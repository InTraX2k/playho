<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="{$lang}" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="{$lang}" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="{$lang}" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="{$lang}" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{$lang}" class="no-js"> <!--<![endif]-->
<head>
	<title>{block name="title"} - {$uni_name} - {$game_name}{/block}</title>
	<meta name="generator" content="2Moons {$VERSION}">
	<!-- 
		This website is powered by 2Moons {$VERSION}
		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	{if !empty($goto)}
	<meta http-equiv="refresh" content="{$gotoinsec};URL={$goto}">
	{/if}
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/css/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css">
  	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/ingame.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/style.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/chat.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery_notification.css">
	<link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = {$Offset};
	var serverTime 	= new Date({$date.0}, {$date.1 - 1}, {$date.2}, {$date.3}, {$date.4}, {$date.5});
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "{$LNG.ready}";
	var Skin		= "{$dpath}";
	var Lang		= "{$lang}";
	var head_info	= "{$LNG.fcm_info}";
	var auth		= {$authlevel|default:'0'};
	var days 		= {$LNG.week_day|json|default:'[]'} 
	var months 		= {$LNG.months|json|default:'[]'} ;
	var tdformat	= "{$LNG.js_tdformat}";
	var queryString	= "{$queryString|escape:'javascript'}";
	var miniChat	= 2;

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
		<script type="text/javascript" src="./scripts/base/jquery.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-{$lang}.js"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="./scripts/game/base.js"></script>
	<script type="text/javascript" src="./scripts/game/newmail.js"></script>
	<script type="text/javascript" src="./scripts/game/qtip.js"></script>
	{foreach item=scriptname from=$scripts}
	<script type="text/javascript" src="./scripts/game/{$scriptname}.js"></script>
	{/foreach}
	{block name="script"}{/block}
	<script type="text/javascript">
	$(function() {
		{$execscript}
	});
	</script>
	
	
	{if $manual_11_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#attack', 'Achtung! auf Ihren Planeten fliegt angreifende Flotte', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over', 'Gehen Sie auf die Übersicht, um die Flotte des Angreifer zu sehen', 'bottomMiddle', 'topLeft') }, 4000);

	});
	</script>
	

	
	
	{/if}
	

	
	{if $manual_15_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_fleet ', 'Klicke auf Hangar <br> Hier können Sie eine Flotte bauen, Angriffe auf andere Spieler vorbereiten oder Flugexpedition starten.', 'rightMiddle', 'leftMiddle');

	});
	</script>
	{/if}
	
	{if $manual_24_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#munu_academy ', 'Klick auf Academy. <br> Hier kannst du deine Fähigkeiten verbessern, durch die Auswahl eines von drei Bäumen, lässt sich deine Klassifizierung verbessern', 'rightMiddle', 'leftMiddle');

	});
	</script>
	{/if}
	
	{if $manual_26_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#achievements_name ', 'Klick auf Errungenschaften. <br> Seh dir deine Entwicklungsstrategie an.', 'rightMiddle', 'leftMiddle');

	});
	</script>
	{/if}
	
	{if $manual_17_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#munu_galaxy ', 'Klicke auf Galaxis. <br> Diese Karte zegt das Universum, Planet und Spieler.', 'rightMiddle', 'leftMiddle');

	});
	</script>
	
	{/if}
	
	{if $manual_19_step == 0}
	
	<script type="text/javascript">
	$(function() {
		qtips('.over ', 'Go to the review, to see the fleet sent for recycling', 'bottomMiddle', 'topLeft');

	});
	</script>
	
	{/if}
	
	
	{if $manual_21_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#munu_senat ', 'Klick auf Senate. <br> Hier können Sie Experten in verschiedenen Kategorien mieten.', 'rightMiddle', 'leftMiddle');

	});
	</script>
	
	{/if}
	
	
	
	
	{if $manual_13_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('.mesages ', 'Klick auf Nachrichten.<br> Die Roten Zahlen zeigen dir wie viele ungelesenen Nachrichten du hast.', 'bottomMiddle', 'topMiddle');
		
	});
	</script>
		{/if}
	{if $manual_5_step == 0}
	<script type="text/javascript">
	$(function() {
setTimeout(function() { qtips('#munu_research', 'Klick hier, um dich vor Spionage zu schützen.', 'rightMiddle', 'leftMiddle') }, 4000);

	});
	</script>
	
	{/if}
	
	{if $manual_8_step == 0}
	
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_defense ', 'Verteidigung - <br>Hier könnt ihr den Schutz des Planeten erhöhen. ', 'rightMiddle', 'leftMiddle');

	});
	</script>
	
	{/if}
	
	
	
	
	{if $manuel_step_1_1 == 0}
	
		<script type="text/javascript">
	
	$(function() {
		
qtips('#munu_build ', 'Go to Buildings.', 'rightMiddle', 'leftMiddle');

	});
	</script>
	{/if}
	

	{if $manual_step_3 == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#espionage ', 'Achtung! Spione auf deinem Planeten.', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over ', 'Gehe zur Übersicht', 'bottomMiddle', 'topLeft') }, 3000);


	});
	</script>
	{/if}
	
	
	
	
	
	
	
	
	
	
	
	
	{if $manual_step_1 == 0}
	
		<script type="text/javascript">
	
	$(function() {
		qtips('#res_block_metal .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211; "><b>Metall:</b></span> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wird für den Bau von Gebäuden, Schiffen und Verteidigung und in der Forschung benötigt <br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Kann gegen andere Ressourcen ausgetauscht werden <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wenn das Lager voll ist , stopt die Produktion.', 'bottomMiddle', 'topLeft');
qtips('#res_block_crystal .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Kristall:</b></span> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wird in der Forschung benötigt <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Kann gegen andere Ressourcen ausgetauscht werden <br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wenn das Lager voll ist , stopt die Produktion.', 'bottomMiddle', 'topLeft');
qtips('#res_block_deuterium .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Deuterium:</b></span> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wird für die Flotte benötigt<br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Kann gegen andere Ressourcen ausgetauscht werden <br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wenn das Lager voll ist , stopt die Produktion.', 'bottomMiddle', 'topLeft');
qtips('#res_block_energy .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Energie:</b></span>  <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wird für den Betrieb von Minen benötigt <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Produziert mit Hilfe von Solar- oder Fusionskraftwerken und Solarsatelliten; <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span> Wird zu wenig Energie Produziert sinkt die Produktion in den Minen.', 'bottomMiddle', 'topLeft');

qtips('#res_block_darkmatter .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Dunkle Materie:</b></span>  <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Wird benötigt, um Besonderheiten  und Funktionen zu kaufen <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Produziert mit Hilfe von Collider (nur auf Monden erhältlich) <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Es gibt keine Lagersgrenze.', 'bottomMiddle', 'topLeft');

qtips('#res_block_antimatter .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Anti Materie:</b></span>  <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Kann nur gekauft werden', 'bottomLeft', 'topLeft');


setTimeout(function() { qtips('#munu_build ', 'Gehe zu Gebäuden.', 'rightMiddle', 'leftMiddle') }, 4000);
	});
	</script>
	{/if}

   
    <script type="text/javascript">
		$(document).ready(function(){
			var flag_planet_menu = false;
			$('#planet_select').click(function(){ 
				$(this).toggleClass('active');
				$('#list_palnet').stop(true,false).slideDown(300);
				flag_planet_menu = true;
			});		
			if(flag_planet_menu)
			{					
				document.body.onclick = function (e) {
					e = e || event;
					target = e.target || e.srcElement;
					if (target.id == "planet_select") {
						return;
					} else {
						$('#planet_select').removeClass('active');
						$('#list_palnet').hide();
						flag_planet_menu = false;
					}
				}

			}
			$('.urlpalnet').click( function(){
				document.location = '?'+queryString+'&'+$(this).attr("url");
			});		
		});
	</script>
</head>

<body id="{$smarty.get.page|htmlspecialchars|default:'overview'}" class="{$bodyclass}" >
	<div id="tooltip" class="tip"></div>