<?php


define('MODE', 'ADMIN');

define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');

require('includes/common.php');
require_once('includes/classes/class.Log.php');

// Kein Spiel-Login → Root-Login-Formular direkt in admin.php abhandeln
if (empty($_SESSION['id']) || $USER['authlevel'] == AUTH_USR) {
	if (isset($_POST['admin_pw'])) {
		$ipKey = 'root_attempts_' . md5($_SERVER['REMOTE_ADDR'] ?? '');
		if (!isset($_SESSION[$ipKey])) $_SESSION[$ipKey] = ['count' => 0, 'since' => time()];
		if (time() - $_SESSION[$ipKey]['since'] > 900) $_SESSION[$ipKey] = ['count' => 0, 'since' => time()];
		if ($_SESSION[$ipKey]['count'] >= 5) HTTP::redirectTo('admin.php?blocked=1');

		$adminRow = $GLOBALS['DATABASE']->getFirstRow(
			"SELECT `id`,`username`,`password`,`dpath`,`authlevel`,`id_planet` FROM ".USERS." WHERE `id`='1';"
		);
		$valid = false;
		if ($adminRow) {
			if (password_verify($_POST['admin_pw'], $adminRow['password'])) {
				$valid = true;
			} elseif (strlen($adminRow['password']) === 32 &&
			          hash_equals(md5($_POST['admin_pw']), $adminRow['password'])) {
				$newHash = password_hash($_POST['admin_pw'], PASSWORD_DEFAULT);
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `password`='".$GLOBALS['DATABASE']->sql_escape($newHash)."' WHERE `id`='1';");
				$adminRow['password'] = $newHash;
				$valid = true;
			}
		}
		if ($valid) {
			$SESSION2 = new Session();
			$SESSION2->CreateSession($adminRow['id'], $adminRow['username'], $adminRow['id_planet'], $UNI, $adminRow['authlevel'], $adminRow['dpath']);
			$_SESSION['admin_login'] = $adminRow['password'];
			HTTP::redirectTo('admin.php');
		} else {
			$_SESSION[$ipKey]['count']++;
			HTTP::redirectTo('admin.php?error=1');
		}
	}
	$tpl = new template();
	$tpl->assign_vars([
		'lang'      => $LNG->getLanguage(),
		'title'     => Config::get('game_name').' — Admin',
		'REV'       => substr(Config::get('VERSION'), -4),
		'date'      => explode('|', date('Y\|n\|j\|G\|i\|s\|Z', TIMESTAMP)),
		'Offset'    => 0,
		'VERSION'   => Config::get('VERSION'),
		'dpath'     => 'gow',
		'bodyclass' => 'popup',
		'username'  => 'admin',
	]);
	$tpl->show('LoginPage.tpl');  // show() setzt adm/ selbst via MODE=ADMIN
	exit;
}

// Spieler eingeloggt, aber Admin-Passwort noch nicht bestätigt
if (!isset($_SESSION['admin_login']) || !hash_equals((string)$USER['password'], (string)$_SESSION['admin_login'])) {
	include_once('includes/pages/adm/ShowLoginPage.php');
	ShowLoginPage();
	exit;
}

$page = HTTP::_GP('page', '');
$uni = HTTP::_GP('uni', 0);

if($USER['authlevel'] >= AUTH_OPS && !empty($uni))
	$_SESSION['adminuni'] = $uni;
if(empty($_SESSION['adminuni']))
	$_SESSION['adminuni'] = $uni;

switch($page)
{
	case 'logout':
		include_once('includes/pages/adm/ShowLogoutPage.php');
		ShowLogoutPage();
	break;
	case 'voucher':
		include_once('includes/pages/adm/ShowVoucherPage.php');
		ShowVoucherPage();
	break;
	case 'banmessage':
		include_once('includes/pages/adm/ShowBanmessagePage.php');
		ShowBanmessagePage();
	break;
	case 'paybonus':
		include_once('includes/pages/adm/ShowPaybonusPage.php');
		ShowPaybonusPage();
	break;
	case 'timebonus':
		include_once('includes/pages/adm/ShowTimebonusPage.php');
		ShowTimebonusPage();
	break;
	case 'premium':
		include_once('includes/pages/adm/ShowPremiumPage.php');
		ShowPremiumPage();
	break;
	case 'infos':
		include_once('includes/pages/adm/ShowInformationPage.php');
		ShowInformationPage();
	break;
	case 'rights':
		include_once('includes/pages/adm/ShowRightsPage.php');
		ShowRightsPage();
	break;
	case 'config':
		include_once('includes/pages/adm/ShowConfigBasicPage.php');
		ShowConfigBasicPage();
	break;
	case 'configuni':
		include_once('includes/pages/adm/ShowConfigUniPage.php');
		ShowConfigUniPage();
	break;
	case 'chat':
		include_once('includes/pages/adm/ShowChatConfigPage.php');
		ShowChatConfigPage();
	break;
	case 'teamspeak':
		include_once('includes/pages/adm/ShowTeamspeakPage.php');
		ShowTeamspeakPage();
	break;
	case 'facebook':
		include_once('includes/pages/adm/ShowFacebookPage.php');
		ShowFacebookPage();
	break;
	case 'module':
		include_once('includes/pages/adm/ShowModulePage.php');
		ShowModulePage();
	break;
	case 'statsconf':
		include_once('includes/pages/adm/ShowStatsPage.php');
		ShowStatsPage();
	break;
	case 'fleetsconf':
		include_once('includes/pages/adm/ShowFleetsConfPage.php');
		ShowFleetsConfPage();
	break;
	case 'disclamer':
		include_once('includes/pages/adm/ShowDisclamerPage.php');
		ShowDisclamerPage();
	break;
	case 'create':
		include_once('includes/pages/adm/ShowCreatorPage.php');
		ShowCreatorPage();
	break;
	case 'accounteditor':
		include_once('includes/pages/adm/ShowAccountEditorPage.php');
		ShowAccountEditorPage();
	break;
	case 'active':
		include_once('includes/pages/adm/ShowActivePage.php');
		ShowActivePage();
	break;
	case 'bans':
		include_once('includes/pages/adm/ShowBanPage.php');
		ShowBanPage();
	break;
	case 'mesreport':
		include_once('includes/pages/adm/ShowMesreportPage.php');
		ShowMesreportPage();
	break;
	case 'messagelist':
		include_once('includes/pages/adm/ShowMessageListPage.php');
		ShowMessageListPage();
	break;
	case 'globalmessage':
		include_once('includes/pages/adm/ShowSendMessagesPage.php');
		ShowSendMessagesPage();
	break;
	case 'gmrate':
		include_once('includes/pages/adm/ShowGmratePage.php');
		ShowGmratePage();
	break;
	case 'fleets':
		include_once('includes/pages/adm/ShowFlyingFleetPage.php');
		ShowFlyingFleetPage();
	break;
	case 'accountdata':
		include_once('includes/pages/adm/ShowAccountDataPage.php');
		ShowAccountDataPage();
	break;
	case 'support':
		include_once('includes/pages/adm/ShowSupportPage.php');
		new ShowSupportPage();
	break;
	case 'password':
		include_once('includes/pages/adm/ShowPassEncripterPage.php');
		ShowPassEncripterPage();
	break;
	case 'search':
		include_once('includes/pages/adm/ShowSearchPage.php');
		ShowSearchPage();
	break;
	case 'qeditor':
		include_once('includes/pages/adm/ShowQuickEditorPage.php');
		ShowQuickEditorPage();
	break;
	case 'statsupdate':
		include_once('includes/pages/adm/ShowStatUpdatePage.php');
		ShowStatUpdatePage();
	break;
	case 'reset':
		include_once('includes/pages/adm/ShowResetPage.php');
		ShowResetPage();
	break;
	case 'news':
		include_once('includes/pages/adm/ShowNewsPage.php');
		ShowNewsPage();
	break;
	case 'topnav':
		include_once('includes/pages/adm/ShowTopnavPage.php');
		ShowTopnavPage();
	break;
	case 'mods':
		include_once('includes/pages/adm/ShowModVersionPage.php');
		ShowModVersionPage();
	break;
	case 'overview':
		include_once('includes/pages/adm/ShowOverviewPage.php');
		ShowOverviewPage();
	break;
	case 'menu':
		include_once('includes/pages/adm/ShowMenuPage.php');
		ShowMenuPage();
	break;
	case 'clearcache':
		include_once('includes/pages/adm/ShowClearCachePage.php');
		ShowClearCachePage();
	break;
	case 'universe':
		include_once('includes/pages/adm/ShowUniversePage.php');
		ShowUniversePage();
	break;
	case 'multiips':
		include_once('includes/pages/adm/ShowMultiIPPage.php');
		ShowMultiIPPage();
	break;
	case 'log':
		include_once('includes/pages/adm/ShowLogPage.php');
		ShowLog();
	break;
	case 'vertify':
		include_once('includes/pages/adm/ShowVertify.php');
		ShowVertify();
	break;
	case 'cronjob':
		include_once('includes/pages/adm/ShowCronjobPage.php');
		ShowCronjob();
	break;
	case 'giveaway':
		include_once('includes/pages/adm/ShowGiveawayPage.php');
		ShowGiveaway();
	break;
	case 'autocomplete':
		include_once('includes/pages/adm/ShowAutoCompletePage.php');
		ShowAutoCompletePage();
	break;
	case 'dump':
		include_once('includes/pages/adm/ShowDumpPage.php');
		ShowDumpPage();
	break;
	default:
		include_once('includes/pages/adm/ShowIndexPage.php');
		ShowIndexPage();
	break;
}
