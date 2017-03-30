<?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:24
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/VertifyPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171362242158dbb498b6d6b5-74113540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a0b83002ca177bea673b214154a485b3b2ee49' => 
    array (
      0 => '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/VertifyPage.tpl',
      1 => 1490793063,
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
  'nocache_hash' => '171362242158dbb498b6d6b5-74113540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58dbb498cfd5c5_78692648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbb498cfd5c5_78692648')) {function content_58dbb498cfd5c5_78692648($_smarty_tpl) {?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '171362242158dbb498b6d6b5-74113540');
content_58dbb498b7a907_07135568($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<?php /*  Call merged included template "head_nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("head_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '171362242158dbb498b6d6b5-74113540');
content_58dbb498beabd0_94855892($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "head_nav.tpl" */?><table>
	<tr>
		<th colspan="6"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_head'];?>
</th>
	</tr>
	<tr>
		<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_info'];?>
</td>
	</tr>
	<tr>
		<td><a href="admin.php?page=vertify&amp;action=vertify&amp;ext=php"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_filephp'];?>
</a></td>
		<td><a href="admin.php?page=vertify&amp;action=vertify&amp;ext=tpl"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_filetpl'];?>
</a></td>
		<td><a href="admin.php?page=vertify&amp;action=vertify&amp;ext=css"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_filecss'];?>
</a></td>
		<td><a href="admin.php?page=vertify&amp;action=vertify&amp;ext=js"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_filejs'];?>
</a></td>
		<td><a href="admin.php?page=vertify&amp;action=vertify&amp;ext=png|jpg|gif"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_fileimg'];?>
</a></td>
		<td><a href="admin.php?page=vertify&amp;action=vertify&amp;ext=htaccess"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_filehtaccess'];?>
</a></td>
	</tr>
	<tr>
		<td colspan="6"><a href="admin.php?page=vertify&amp;action=vertify&amp;ext=php|tpl|js|css|png|jpg|gif|htaccess"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['vt_all'];?>
</a></td>
	</tr>
</table>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '171362242158dbb498b6d6b5-74113540');
content_58dbb498cfa833_73303037($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:24
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58dbb498b7a907_07135568')) {function content_58dbb498b7a907_07135568($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
	 
    <!-- BEGIN: load jquery -->
	
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
, <?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
, <?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
, <?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
, <?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
, <?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
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

	
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php } ?>/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>

	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>

	});
	</script>

</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:171362242158dbb498b6d6b5-74113540%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:24
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/head_nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58dbb498beabd0_94855892')) {function content_58dbb498beabd0_94855892($_smarty_tpl) {?>


	<div id="left_side">        
    <div id="left_menu">
               
        <div class="separator"></div>

        
        
        <a class="btn_menu" href="admin.php?page=overview" >&nbsp;Overview</a>
        <a class="btn_menu" href="game.php" >Go to game</a>
	        <div class="separator"></div>	
		<?php if (allowedTo('ShowInformationPage')){?><a href="?page=infos" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_game_info'];?>
</a><?php }?>
		<?php if (allowedTo('ShowConfigBasicPage')){?><a href="?page=config" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_settings'];?>
</a><?php }?>
		<?php if (allowedTo('ShowConfigUniPage')){?><a href="?page=configuni" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_unisettings'];?>
</a><?php }?>
		<?php if (allowedTo('ShowChatConfigPage')){?><a href="?page=chat" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_chat'];?>
</a><?php }?>
		<?php if (allowedTo('ShowTeamspeakPage')){?><a href="?page=teamspeak" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ts_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowFacebookPage')){?><a href="?page=facebook" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_fb_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowModulePage')){?><a href="?page=module" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_module'];?>
</a><?php }?>
		<?php if (allowedTo('ShowDisclamerPage')){?><a href="?page=disclamer" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_disclaimer'];?>
</a><?php }?>
		<?php if (allowedTo('ShowStatsPage')){?><a href="?page=statsconf" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_stats_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowVertifyPage')){?><a href="?page=vertify" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_vertify'];?>
</a><?php }?>
		<?php if (allowedTo('ShowCronjobPage')){?><a href="?page=cronjob" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_cronjob'];?>
</a><?php }?>
		<?php if (allowedTo('ShowDumpPage')){?><a href="?page=dump" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_dump'];?>
</a><?php }?>
        <div class="separator"></div>		
		<?php if (allowedTo('ShowCreatorPage')){?><a href="?page=create" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['new_creator_title'];?>
</a><?php }?>
		<?php if (allowedTo('ShowAccountEditorPage')){?><a href="?page=accounteditor" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_add_delete_resources'];?>
</a><?php }?>
		<?php if (allowedTo('ShowBanPage')){?><a href="?page=bans" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ban_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowGiveawayPage')){?><a href="?page=giveaway" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_giveaway'];?>
</a><?php }?>
        <div class="separator"></div>		
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=online&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_connected'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSupportPage')){?><a href="?page=support" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_support'];?>
<?php if ($_smarty_tpl->tpl_vars['supportticks']->value!=0){?> (<?php echo $_smarty_tpl->tpl_vars['supportticks']->value;?>
)<?php }?></a><?php }?>
		<?php if (allowedTo('ShowActivePage')){?><a href="?page=active" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_vaild_users'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=p_connect&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_active_planets'];?>
</a><?php }?>
		<?php if (allowedTo('ShowFlyingFleetPage')){?><a href="?page=fleets" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_flying_fleets'];?>
</a><?php }?>
		<?php if (allowedTo('ShowNewsPage')){?><a href="?page=news" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_news'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=users&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_user_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=planet&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_planet_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=moon&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_moon_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowMessageListPage')){?><a href="?page=messagelist" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mess_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowAccountDataPage')){?><a href="?page=accountdata" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_info_account_page'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_search_page'];?>
</a><?php }?>
		<?php if (allowedTo('ShowMultiIPPage')){?><a href="?page=multiips" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_multiip_page'];?>
</a><?php }?>
        <div class="separator"></div>		
		<?php if (allowedTo('ShowLogPage')){?><a href="?page=log" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_logs'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSendMessagesPage')){?><a href="?page=globalmessage" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_global_message'];?>
</a><?php }?>
		<?php if (allowedTo('ShowPassEncripterPage')){?><a href="?page=password" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_md5_encripter'];?>
</a><?php }?>
		<?php if (allowedTo('ShowStatUpdatePage')){?><a href="?page=statsupdate" class="btn_menu"  onClick=" return confirm('<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mpu_confirmation'];?>
');"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_manual_points_update'];?>
</a><?php }?>
		<?php if (allowedTo('ShowClearCachePage')){?><a href="?page=clearcache" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_clear_cache'];?>
</a><?php }?>

        <div class="separator"></div>
        
		        
                <div class="clear"></div>
				
    </div><!--/left_menu-->
	
 
</div><!--/left_side-->

   <div id="page" >
   <div id="content">


<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:24
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58dbb498cfa833_73303037')) {function content_58dbb498cfa833_73303037($_smarty_tpl) {?> 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>