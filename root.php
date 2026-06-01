<?php


define('MODE', 'LOGIN');
define('ROOT_PATH'	, str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);

require('includes/common.php');

$LNG->includeData(array('L18N', 'INGAME', 'ADMIN'));

if(isset($_POST['admin_pw']))
{
	// Rate limiting: max 5 attempts per 15 minutes per IP
	$ipKey = 'root_attempts_' . md5($_SERVER['REMOTE_ADDR'] ?? '');
	if (!isset($_SESSION[$ipKey])) $_SESSION[$ipKey] = ['count' => 0, 'since' => time()];
	if (time() - $_SESSION[$ipKey]['since'] > 900) {
		$_SESSION[$ipKey] = ['count' => 0, 'since' => time()];
	}
	if ($_SESSION[$ipKey]['count'] >= 5) {
		HTTP::redirectTo('root.php?blocked=1');
	}

	$adminRow = $GLOBALS['DATABASE']->getFirstRow("SELECT `id`, `username`, `password`, `dpath`, `authlevel`, `id_planet` FROM ".USERS." WHERE `id` = '1';");
	$inputPw  = $_POST['admin_pw'];
	$valid    = false;

	if ($adminRow) {
		if (password_verify($inputPw, $adminRow['password'])) {
			$valid = true;
		} elseif (strlen($adminRow['password']) === 32 && hash_equals(md5($inputPw), $adminRow['password'])) {
			$newHash = password_hash($inputPw, PASSWORD_DEFAULT);
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `password` = '".$GLOBALS['DATABASE']->sql_escape($newHash)."' WHERE `id` = '1';");
			$valid = true;
		}
	}

	if ($valid) {
		$SESSION = new Session();
		$SESSION->CreateSession($adminRow['id'], $adminRow['username'], $adminRow['id_planet'], $UNI, $adminRow['authlevel'], $adminRow['dpath']);
		$_SESSION['admin_login'] = $adminRow['password'];
		HTTP::redirectTo('admin.php');
	} else {
		$_SESSION[$ipKey]['count']++;
		HTTP::redirectTo('root.php?error=1');
	}
}
$template	= new template();

$tplDir	= $template->getTemplateDir();
$template->setTemplateDir($tplDir[0].'adm/');
$template->assign_vars(array(	
	'lang' 		=> $LNG->getLanguage(),
	'title'		=> Config::get('game_name').' - '.$LNG['adm_cp_title'],
	'REV'		=> substr(Config::get('VERSION'), -4),
	'date'		=> explode("|", date('Y\|n\|j\|G\|i\|s\|Z', TIMESTAMP)),
	'Offset'	=> 0,
	'VERSION'	=> Config::get('VERSION'),
	'dpath'		=> 'gow',
	'bodyclass'	=> 'popup',
	'username'	=> 'root'
));
$template->show('LoginPage.tpl');
