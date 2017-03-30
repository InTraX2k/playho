<?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:33
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/ConfigBasicBody.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_58dbb4a2016e46_84146607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbb4a2016e46_84146607')) {function content_58dbb4a2016e46_84146607($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
<?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '135198577158dbb4a1d1c233-00783510');
content_58dbb4a1d26830_64819044($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<?php /*  Call merged included template "head_nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("head_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '135198577158dbb4a1d1c233-00783510');
content_58dbb4a1d96d50_53025805($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "head_nav.tpl" */?><center>
<form action="" method="post">
<input type="hidden" name="opt_save" value="1">
<table width="70%" cellpadding="2" cellspacing="2">
<tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_server_parameters'];?>
</th>
	<th colspan="1" width="5%">(?)</th>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_game_name'];?>
</td>
	<td><input name="game_name" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text" maxlength="60"></td>
	<td>&nbsp;</td>
</tr><tr>
    <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_ttf_file'];?>
</td>
    <td><input name="ttf_file" size="40" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'ttf_file\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_ttf_file_info'];?>
"></td>
</tr><tr>
    <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_timzone'];?>
</td>
	<td><?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'timezone\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'timezone\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'timezone\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_player_settings'];?>
</th><th>&nbsp;</th>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_oldstuff'];?>
</td>
	<td><input name="del_oldstuff" maxlength="3" size="2" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'del_oldstuff\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_days'];?>
</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_oldstuff_info'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_user_manually'];?>
</td>
	<td><input name="del_user_manually" maxlength="3" size="2" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'del_user_manually\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_days'];?>
</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_user_manually_info'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_user_automatic'];?>
</td>
	<td><input name="del_user_automatic" maxlength="3" size="2" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'del_user_automatic\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_days'];?>
</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_user_automatic_info'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_sendmail_inactive'];?>
<br></td>
    <td><input name="sendmail_inactive"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php if ($_smarty_tpl->tpl_vars[\'sendmail_inactive\']->value){?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
 checked="checked"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php }?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
  type="checkbox"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_user_sendmail'];?>
</td>
	<td><input name="del_user_sendmail" maxlength="3" size="2" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'del_user_sendmail\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_days'];?>
</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_del_user_sendmail_info'];?>
"></td>
</tr><tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_recaptcha_head'];?>
</th><th>&nbsp;</th>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_recaptcha_active'];?>
<br></td>
    <td><input name="capaktiv"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php if ($_smarty_tpl->tpl_vars[\'capaktiv\']->value){?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
 checked="checked"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php }?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
  type="checkbox"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_recaptcha_desc'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_recaptcha_public'];?>
</td>
	<td><input name="cappublic" maxlength="40" size="60" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'cappublic\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_recaptcha_private'];?>
</td>
	<td><input name="capprivate" maxlength="40" size="60" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'capprivate\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"></td>
	<td>&nbsp;</td>
</tr><tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp'];?>
</th>
	<th><center><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_info'];?>
"></center></th>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_mail_active'];?>
</td>
	<td><input name="mail_active"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php if ($_smarty_tpl->tpl_vars[\'mail_active\']->value){?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
 checked="checked"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php }?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
  type="checkbox"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_mail_use'];?>
</td>
	<td><?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'mail_use\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'mail\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'mail_use\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
</td>
	<td>&nbsp;</td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_sendmail'];?>
</td>
	<td><input name="smtp_sendmail" size="20" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'smtp_sendmail\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text" autocomplete="off"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_sendmail_info'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smail_path'];?>
</td>
	<td><input name="smail_path" size="20" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'smail_path\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_host'];?>
</td>
	<td><input name="smtp_host" size="20" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'smtp_host\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text" autocomplete="off"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_host_info'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_ssl'];?>
</td>
	<td><?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'smtp_ssl\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'encry\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'smtp_ssl\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
</td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_ssl_info'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_port'];?>
</td>
	<td><input name="smtp_port" size="20" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'smtp_port\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text" autocomplete="off"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_port_info'];?>
"></td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_user'];?>
</td>
	<td><input name="smtp_user" size="20" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'smtp_user\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text" autocomplete="off"></td>
	<td>&nbsp;</td>
</tr><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_smtp_pass'];?>
</td>
	<td><input name="smtp_pass" size="20" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'smtp_pass\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="password" autocomplete="off"></td>
	<td>&nbsp;</td>
</tr><tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_google'];?>
</th><th>&nbsp;</th>
</tr><tr>
    <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_google_active'];?>
</td>
    <td><input name="ga_active"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php if ($_smarty_tpl->tpl_vars[\'ga_active\']->value){?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
 checked="checked"<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php }?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
  type="checkbox"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_google_info'];?>
"></td>
</tr><tr>
    <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_google_key'];?>
</td>
    <td><input name="ga_key" size="20" maxlength="15" value="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'ga_key\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" type="text"></td>
	<td><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_google_key_info'];?>
"></td>
</tr><tr>
	<td colspan="3"><input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['se_save_parameters'];?>
" type="submit"></td>
</tr>
</table>
</form>
</center>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '135198577158dbb4a1d1c233-00783510');
content_58dbb4a2012f34_32710511($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:33
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58dbb4a1d26830_64819044')) {function content_58dbb4a1d26830_64819044($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
	 
    <!-- BEGIN: load jquery -->
	
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
, <?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
, <?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
, <?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
, <?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
, <?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
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

	
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php } ?>/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>

	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>

	});
	</script>

</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:135198577158dbb4a1d1c233-00783510%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:33
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/head_nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58dbb4a1d96d50_53025805')) {function content_58dbb4a1d96d50_53025805($_smarty_tpl) {?>


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


<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2017-03-29 13:20:34
         compiled from "/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58dbb4a2012f34_32710511')) {function content_58dbb4a2012f34_32710511($_smarty_tpl) {?> 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>