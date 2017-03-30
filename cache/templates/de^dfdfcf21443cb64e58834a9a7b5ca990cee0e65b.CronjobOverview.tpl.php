<?php /*%%SmartyHeaderCode:152989428958dbb499d9b596-82539270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfdfcf21443cb64e58834a9a7b5ca990cee0e65b' => 
    array (
      0 => '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/CronjobOverview.tpl',
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
  'nocache_hash' => '152989428958dbb499d9b596-82539270',
  'variables' => 
  array (
    'LNG' => 0,
    'CronjobArray' => 1,
    'CronjobInfo' => 1,
    'month' => 1,
    'd' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58dbb49a0a1028_58366647',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbb49a0a1028_58366647')) {function content_58dbb49a0a1028_58366647($_smarty_tpl) {?><!DOCTYPE html>

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
<body id="cronjob" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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


<table width="80%">
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Minute</th>
	<th>Stunde</th>
	<th>Tag</th>
	<th>Monat</th>
	<th>Wochentag</th>
	<th>class</th>
	<th>Nächste Ausführung</th>
	<th>Aktiv</th>
	<th>Locked</th>
	<th>Bearbeiten</th>
	<th>Löschen</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['CronjobInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CronjobInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CronjobArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CronjobInfo']->key => $_smarty_tpl->tpl_vars['CronjobInfo']->value){
$_smarty_tpl->tpl_vars['CronjobInfo']->_loop = true;
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['id'];?>
</td>
	<td><?php if (isset($_smarty_tpl->tpl_vars['LNG']->value['cronName'][$_smarty_tpl->tpl_vars['CronjobInfo']->value['name']])){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cronName'][$_smarty_tpl->tpl_vars['CronjobInfo']->value['name']];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['name'];?>
<?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['min'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['hours'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['dom'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['CronjobInfo']->value['month']=='*'){?><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['month'];?>
<?php }else{ ?><?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CronjobInfo']->value['month']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
$_smarty_tpl->tpl_vars['month']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['months'][$_smarty_tpl->tpl_vars['month']->value-1];?>
<?php } ?><?php }?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['CronjobInfo']->value['dow']=='*'){?><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['dow'];?>
<?php }else{ ?><?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CronjobInfo']->value['dow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['week_day'][$_smarty_tpl->tpl_vars['d']->value];?>
 <?php } ?><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['class'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['CronjobInfo']->value['isActive']){?><?php echo date($_smarty_tpl->tpl_vars['LNG']->value['php_tdformat'],$_smarty_tpl->tpl_vars['CronjobInfo']->value['nextTime']);?>
<?php }else{ ?>-<?php }?></td>
	<td><a href="admin.php?page=cronjob&amp;id=<?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['id'];?>
&amp;active=<?php if ($_smarty_tpl->tpl_vars['CronjobInfo']->value['isActive']){?>0" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cronjob_inactive'];?>
<?php }else{ ?>1" style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cronjob_active'];?>
<?php }?></a></td>
	<td><a href="admin.php?page=cronjob&amp;id=<?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['id'];?>
&amp;lock=<?php if ($_smarty_tpl->tpl_vars['CronjobInfo']->value['lock']){?>0" style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cronjob_is_lock'];?>
<?php }else{ ?>1" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cronjob_is_unlock'];?>
<?php }?></a></td>
	<td><a href="admin.php?page=cronjob&detail=<?php echo $_smarty_tpl->tpl_vars['CronjobInfo']->value['id'];?>
"><img src="./styles/resource/images/admin/GO.png"></a></td>
	<td><a href=""><img src="./styles/resource/images/false.png" width="16" height="16"></a></td>
</tr>
<?php } ?>
<tr>
<td colspan="13"><a href="admin.php?page=cronjob&detail=add">Neuen Cronjob erstellen</a></td>
</tr>
</table>
</body>
 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>