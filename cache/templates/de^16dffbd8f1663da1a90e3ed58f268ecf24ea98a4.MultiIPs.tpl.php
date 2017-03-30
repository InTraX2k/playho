<?php /*%%SmartyHeaderCode:200468135458dbb482123a27-67835176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16dffbd8f1663da1a90e3ed58f268ecf24ea98a4' => 
    array (
      0 => '/var/www/vhosts/Battlethegalaxy.de/beta.Battlethegalaxy.de/styles/templates/adm/MultiIPs.tpl',
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
  'nocache_hash' => '200468135458dbb482123a27-67835176',
  'variables' => 
  array (
    'mip_ip' => 0,
    'LNG' => 0,
    'multiGroups' => 1,
    'Users' => 1,
    'IP' => 1,
    'ID' => 1,
    'User' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58dbb4822fb9a2_52577260',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbb4822fb9a2_52577260')) {function content_58dbb4822fb9a2_52577260($_smarty_tpl) {?><!DOCTYPE html>

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
<body id="multiips" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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


<table style="width:760px">
	<tr>
		<th></th>
		<th>User ID</th>
		<th>Name</th>
		<th>E-Mail</th>
		<th>Registiert seit</th>
		<th>Letzten Aktivit&auml;t</th>
		<th>Genehmigt?</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['Users'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Users']->_loop = false;
 $_smarty_tpl->tpl_vars['IP'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['multiGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Users']->key => $_smarty_tpl->tpl_vars['Users']->value){
$_smarty_tpl->tpl_vars['Users']->_loop = true;
 $_smarty_tpl->tpl_vars['IP']->value = $_smarty_tpl->tpl_vars['Users']->key;
?>
	<tr>
		<td rowspan="<?php echo count($_smarty_tpl->tpl_vars['Users']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['IP']->value;?>
</td>
		<?php  $_smarty_tpl->tpl_vars['User'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['User']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['User']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['User']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['User']->key => $_smarty_tpl->tpl_vars['User']->value){
$_smarty_tpl->tpl_vars['User']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['User']->key;
 $_smarty_tpl->tpl_vars['User']->iteration++;
 $_smarty_tpl->tpl_vars['User']->last = $_smarty_tpl->tpl_vars['User']->iteration === $_smarty_tpl->tpl_vars['User']->total;
?>
		<td class="left" style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
</td>
		<td class="left" style="padding:3px;"><a href="admin.php?page=accountdata&id_u=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['User']->value['username'];?>
 (?)</a></td>
		<td class="left" style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
</td>
		<td class="left" style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['User']->value['register_time'];?>
</td>
		<td class="left" style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['User']->value['onlinetime'];?>
</td>
		<td class="center" style="padding:3px;"><?php if (($_smarty_tpl->tpl_vars['User']->value['isKnown']!=0)){?><a href="admin.php?page=multiips&amp;action=unknown&amp;id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><img src="styles/resource/images/true.png"></a><?php }else{ ?><a href="admin.php?page=multiips&amp;action=known&amp;id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><img src="styles/resource/images/false.png"></a><?php }?></td>
		</tr><?php if (!$_smarty_tpl->tpl_vars['User']->last){?><tr><?php }?>
		<?php } ?>
	<?php } ?>
</table>
 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>