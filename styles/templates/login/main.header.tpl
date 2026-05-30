<!DOCTYPE html>
<html lang="{$lang}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{$gameName}: {$LNG.header_meta_description}">
  <title>{block name="title"}{$gameName}{/block}</title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link href="media/css/login-modern.css" rel="stylesheet">
  <script>
    var loginError  = {if isset($code) && $code}{$code|json}{else}0{/if};
    var LoginConfig = {literal}{{/literal}
      isMultiUniverse: {$isMultiUniverse|json},
      basePath:        {$basepath|json}
    {literal}}{/literal};
  </script>
  {block name="script"}{/block}
</head>
<body id="{if isset($smarty.get.page)}{$smarty.get.page|htmlspecialchars}{else}overview{/if}" class="{$bodyclass}">

<div id="stars-bg"></div>
<div class="nebula nebula-1"></div>
<div class="nebula nebula-2"></div>
<div class="nebula nebula-3"></div>

<div id="page">
