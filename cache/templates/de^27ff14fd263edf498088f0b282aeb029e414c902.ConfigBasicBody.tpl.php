<?php /*%%SmartyHeaderCode:135198577158dbb4a1d1c233-00783510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ff14fd263edf498088f0b282aeb029e414c902' => 
    array (
      0 => '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/ConfigBasicBody.tpl',
      1 => 1490793062,
      2 => 'file',
    ),
    '084f9eb06fae1c0a076f3ecdd6497e2052c434d3' => 
    array (
      0 => '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/overall_header.tpl',
      1 => 1490793062,
      2 => 'file',
    ),
    'bcf28776767130c1d221155f2d9d7a1d8871040d' => 
    array (
      0 => '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/head_nav.tpl',
      1 => 1490793062,
      2 => 'file',
    ),
    'a7564047dd565b4d90649bc43e37a0c5a6e81043' => 
    array (
      0 => '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/overall_footer.tpl',
      1 => 1490793062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135198577158dbb4a1d1c233-00783510',
  'variables' => 
  array (
    'LNG' => 0,
    'game_name' => 1,
    'ttf_file' => 1,
    'Selector' => 1,
    'timezone' => 1,
    'del_oldstuff' => 1,
    'del_user_manually' => 1,
    'del_user_automatic' => 1,
    'sendmail_inactive' => 1,
    'del_user_sendmail' => 1,
    'capaktiv' => 1,
    'cappublic' => 1,
    'capprivate' => 1,
    'mail_active' => 1,
    'mail_use' => 1,
    'smtp_sendmail' => 1,
    'smail_path' => 1,
    'smtp_host' => 1,
    'smtp_ssl' => 1,
    'smtp_port' => 1,
    'smtp_user' => 1,
    'smtp_pass' => 1,
    'ga_active' => 1,
    'ga_key' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58dbb4a2032dc4_34653969',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbb4a2032dc4_34653969')) {function content_58dbb4a2032dc4_34653969($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) include '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/includes/libs/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
	 
    <!-- BEGIN: load jquery -->
	
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "Fertig";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Information";
	var days 		= ["So","Mo","Di","Mi","Do","Fr","Sa"] 
	var months 		= ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	
	
	<link rel="stylesheet" type="text/css" href="./styles/css/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css">
  	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/ingame.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/style.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/chat.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/responsive.css">

	
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>

</head>
<body id="config" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>

	<div id="left_side">        
    <div id="left_menu">
               
        <div class="separator"></div>

        
        
        <a class="btn_menu" href="admin.php?page=overview" >&nbsp;Overview</a>
        <a class="btn_menu" href="game.php" >Go to game</a>
	        <div class="separator"></div>	
		<a href="?page=infos" class="btn_menu" >Informationen</a>		<a href="?page=config" class="btn_menu" >Server Konfiguration</a>		<a href="?page=configuni" class="btn_menu" >Uni Konfiguration</a>		<a href="?page=chat" class="btn_menu" >Chat Konfiguration</a>		<a href="?page=teamspeak" class="btn_menu" >Teamspeak Optionen</a>		<a href="?page=facebook" class="btn_menu" >Facebook Connect</a>		<a href="?page=module" class="btn_menu" >Module</a>		<a href="?page=disclamer" class="btn_menu" >mu_disclaimer</a>		<a href="?page=statsconf" class="btn_menu" >Statistik Options</a>		<a href="?page=vertify" class="btn_menu" >Vertify Game Content</a>		<a href="?page=cronjob" class="btn_menu" >Cronjobs</a>		<a href="?page=dump" class="btn_menu" >Datenbank-Backup</a>        <div class="separator"></div>		
		<a href="?page=create" class="btn_menu" >Erstellen</a>		<a href="?page=accounteditor" class="btn_menu" >Account Editor</a>		<a href="?page=bans" class="btn_menu" >Ban-Panel</a>		<a href="?page=giveaway" class="btn_menu" >Giveaways</a>        <div class="separator"></div>		
		<a href="?page=search&amp;search=online&amp;minimize=on" class="btn_menu" >Online</a>		<a href="?page=support" class="btn_menu" >Support-Tickets</a>		<a href="?page=active" class="btn_menu" >Aktive User</a>		<a href="?page=search&amp;search=p_connect&amp;minimize=on" class="btn_menu" >Aktive Planeten</a>		<a href="?page=fleets" class="btn_menu" >Fliegende Flotten</a>		<a href="?page=news" class="btn_menu" >News</a>		<a href="?page=search&amp;search=users&amp;minimize=on" class="btn_menu" >Spielerliste</a>		<a href="?page=search&amp;search=planet&amp;minimize=on" class="btn_menu" >Planetenliste</a>		<a href="?page=search&amp;search=moon&amp;minimize=on" class="btn_menu" >Mondliste</a>		<a href="?page=messagelist" class="btn_menu" >Nachrichtenliste</a>		<a href="?page=accountdata" class="btn_menu" >Account-Informationen</a>		<a href="?page=search" class="btn_menu" >Erweiterte Suche</a>		<a href="?page=multiips" class="btn_menu" >MultiIP</a>        <div class="separator"></div>		
		<a href="?page=log" class="btn_menu" >Admin-Log</a>		<a href="?page=globalmessage" class="btn_menu" >Globale Nachrichten</a>		<a href="?page=password" class="btn_menu" >MD5 Generator</a>		<a href="?page=statsupdate" class="btn_menu"  onClick=" return confirm('Die Punkte werden automatisch aktualisiert. Um sie manuell zu aktualisieren, klicke OK');">Manual Update Points</a>		<a href="?page=clearcache" class="btn_menu" >Lösche Cache</a>
        <div class="separator"></div>
        
		        
                <div class="clear"></div>
				
    </div><!--/left_menu-->
	
 
</div><!--/left_side-->

   <div id="page" >
   <div id="content">


<center>
<form action="" method="post">
<input type="hidden" name="opt_save" value="1">
<table width="70%" cellpadding="2" cellspacing="2">
<tr>
	<th colspan="2">Server Einstellungen</th>
	<th colspan="1" width="5%">(?)</th>
</tr><tr>
	<td>Name (Game)</td>
	<td><input name="game_name" value="<?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
" type="text" maxlength="60"></td>
	<td>&nbsp;</td>
</tr><tr>
    <td>Pfad zur TFF File</td>
    <td><input name="ttf_file" size="40" value="<?php echo $_smarty_tpl->tpl_vars['ttf_file']->value;?>
" type="text"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Die TTF wird benötigt, um im Statistiken Banner kyrillische, oder chinesische Zeichen darstellen zu können"></td>
</tr><tr>
    <td>Zeitzone des Unis</td>
	<td><?php echo smarty_function_html_options(array('name'=>'timezone','options'=>$_smarty_tpl->tpl_vars['Selector']->value['timezone'],'selected'=>$_smarty_tpl->tpl_vars['timezone']->value),$_smarty_tpl);?>
</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<th colspan="2">Spielereinstellungen</th><th>&nbsp;</th>
</tr><tr>
	<td>Lösche Nachrichten nach </td>
	<td><input name="del_oldstuff" maxlength="3" size="2" value="<?php echo $_smarty_tpl->tpl_vars['del_oldstuff']->value;?>
" type="text"> Tagen</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Löscht Nachrichten/Kampfberichte nach X Tagen."></td>
</tr><tr>
	<td>Userlöschung nach</td>
	<td><input name="del_user_manually" maxlength="3" size="2" value="<?php echo $_smarty_tpl->tpl_vars['del_user_manually']->value;?>
" type="text"> Tagen</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Löscht User, die ihre Accountlöschung aktiv haben nach X Tagen."></td>
</tr><tr>
	<td>Inaktive löschen nach</td>
	<td><input name="del_user_automatic" maxlength="3" size="2" value="<?php echo $_smarty_tpl->tpl_vars['del_user_automatic']->value;?>
" type="text"> Tagen</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Löscht User, die die sich nach X Tagen nicht eingeloggt haben. (0 = Deaktiviert)"></td>
</tr><tr>
	<td>Aktiviere Erinnerungsmails<br></td>
    <td><input name="sendmail_inactive"<?php if ($_smarty_tpl->tpl_vars['sendmail_inactive']->value){?> checked="checked"<?php }?>  type="checkbox"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td>Sende Erinnerungsmal nach</td>
	<td><input name="del_user_sendmail" maxlength="3" size="2" value="<?php echo $_smarty_tpl->tpl_vars['del_user_sendmail']->value;?>
" type="text"> Tagen</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Sendet eine Erinnerungs Mail an den User nach X Tagen nicht mehr eingeloggt haben"></td>
</tr><tr>
	<th colspan="2">reCAPTCHA - EInstellungen</th><th>&nbsp;</th>
</tr><tr>
	<td>reCAPTCHA aktivieren<br></td>
    <td><input name="capaktiv"<?php if ($_smarty_tpl->tpl_vars['capaktiv']->value){?> checked="checked"<?php }?>  type="checkbox"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="reCAPTCHA ist ein kostenlosen CAPTCHA Service, der dir dabei helfen soll Spam-Bot zu blocken.<br />Um den Service nutzten zu können ist ein Registration auf reCAPTCHA.net notwendig."></td>
</tr><tr>
	<td>Public Key:</td>
	<td><input name="cappublic" maxlength="40" size="60" value="<?php echo $_smarty_tpl->tpl_vars['cappublic']->value;?>
" type="text"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td>Private Key:</td>
	<td><input name="capprivate" maxlength="40" size="60" value="<?php echo $_smarty_tpl->tpl_vars['capprivate']->value;?>
" type="text"></td>
	<td>&nbsp;</td>
</tr><tr>
	<th colspan="2">Mail-Einstellungen</th>
	<th><center><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Hier können die Einstellungen zum Mail Versand eingestellt werden."></center></th>
</tr><tr>
	<td>Mail aktivieren</td>
	<td><input name="mail_active"<?php if ($_smarty_tpl->tpl_vars['mail_active']->value){?> checked="checked"<?php }?>  type="checkbox"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td>Mail versand:</td>
	<td><?php echo smarty_function_html_options(array('name'=>'mail_use','options'=>$_smarty_tpl->tpl_vars['Selector']->value['mail'],'selected'=>$_smarty_tpl->tpl_vars['mail_use']->value),$_smarty_tpl);?>
</td>
	<td>&nbsp;</td>
</tr><tr>
	<td>Absender Adresse:</td>
	<td><input name="smtp_sendmail" size="20" value="<?php echo $_smarty_tpl->tpl_vars['smtp_sendmail']->value;?>
" type="text" autocomplete="off"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Hier die Absender Adresse eintragen. Muss nicht identisch mit der anmelde Adresse sein"></td>
</tr><tr>
	<td>Pfad zu Sendmail / Qmail</td>
	<td><input name="smail_path" size="20" value="<?php echo $_smarty_tpl->tpl_vars['smail_path']->value;?>
" type="text"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td>SMTP Host:</td>
	<td><input name="smtp_host" size="20" value="<?php echo $_smarty_tpl->tpl_vars['smtp_host']->value;?>
" type="text" autocomplete="off"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Trage hier die Adresse deines SMTP-Servers ein."></td>
</tr><tr>
	<td>SMTP SSL/TLS :</td>
	<td><?php echo smarty_function_html_options(array('name'=>'smtp_ssl','options'=>$_smarty_tpl->tpl_vars['Selector']->value['encry'],'selected'=>$_smarty_tpl->tpl_vars['smtp_ssl']->value),$_smarty_tpl);?>
</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Hier kannst du auswählen, ob eine sichere Verbindung zwischen deinem Server und dem Webserver aufgebaut werden soll. Wird in den seltensten Fällen benötigt"></td>
</tr><tr>
	<td>SMTP Port:</td>
	<td><input name="smtp_port" size="20" value="<?php echo $_smarty_tpl->tpl_vars['smtp_port']->value;?>
" type="text" autocomplete="off"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Trage hier den Port deines SMTP-Servers ein.<br>Standart: 25"></td>
</tr><tr>
	<td>SMTP Username:</td>
	<td><input name="smtp_user" size="20" value="<?php echo $_smarty_tpl->tpl_vars['smtp_user']->value;?>
" type="text" autocomplete="off"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td>SMTP Passwort:</td>
	<td><input name="smtp_pass" size="20" value="<?php echo $_smarty_tpl->tpl_vars['smtp_pass']->value;?>
" type="password" autocomplete="off"></td>
	<td>&nbsp;</td>
</tr><tr>
	<th colspan="2">Google Analytics - Einstellungen</th><th>&nbsp;</th>
</tr><tr>
    <td>Aktivieren?</td>
    <td><input name="ga_active"<?php if ($_smarty_tpl->tpl_vars['ga_active']->value){?> checked="checked"<?php }?>  type="checkbox"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Google Analytics ist die Unternehmenslösung für Webanalysen, mit der Sie wertvolle Erkenntnisse über die Zugriffe auf Ihre Website und die Wirkung Ihrer Marketingstrategien gewinnen. Dank der leistungsstarken, flexiblen und nutzerfreundlichen Funktionen können Sie jetzt Ihre Zugriffsdaten auf ganz neue Weise analysieren und anzeigen. Mit Google Analytics können Sie Ihre Werbung zielgerichtet gestalten, Ihre Marketingkampagnen stärken und Websites mit hohen Conversion-Raten entwickeln."></td>
</tr><tr>
    <td>Analytics Key</td>
    <td><input name="ga_key" size="20" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['ga_key']->value;?>
" type="text"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="Der Identify-Key für ihre Webseite. Diese beginnt immer mit UA, z.B.: UA-13185300-3"></td>
</tr><tr>
	<td colspan="3"><input value="Speichern" type="submit"></td>
</tr>
</table>
</form>
</center>
 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>