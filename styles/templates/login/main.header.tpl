<!DOCTYPE html>
<html lang="{$lang}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta name="description" content="{$gameName}: {$LNG.header_meta_description}">
  <meta name="keywords" content="{$LNG.header_keywords}">

  {* ── PWA & Mobile Meta Tags ── *}
  <meta name="theme-color" content="#020818">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="{$gameName}">
  <meta name="format-detection" content="telephone=no">

  {* ── Open Graph / Social ── *}
  <meta property="og:title" content="{$gameName}">
  <meta property="og:description" content="{$LNG.header_meta_description}">
  <meta property="og:type" content="website">

  <title>{block name="title"}{$gameName}{/block}</title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="./favicon.ico">

  {* ── Stylesheet ── *}
  <link href="media/css/login-modern.css" rel="stylesheet">

  {* ── Inline Config ── *}
  <script>
    var loginError  = {if isset($code) && $code}{$code|json}{else}0{/if};
    var LoginConfig = {literal}{{/literal}
      isMultiUniverse: {$isMultiUniverse|json},
      basePath:        {$basepath|json}
    {literal}}{/literal};
  </script>
  {block name="script"}{/block}
</head>
<body id="{if isset($smarty.get.page)}{$smarty.get.page|htmlspecialchars}{else}overview{/if}"
      class="{$bodyclass}">

{* Animierter Hintergrund *}
<div id="stars-bg"></div>
<div class="nebula nebula-1"></div>
<div class="nebula nebula-2"></div>
<div class="nebula nebula-3"></div>

<div id="page">
