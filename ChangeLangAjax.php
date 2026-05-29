<?php
$allowedLangs = array('de', 'en', 'fr', 'es', 'ru', 'pl', 'pt', 'it', 'nl', 'tr');
$lang = isset($_POST['Lang']) ? $_POST['Lang'] : 'en';
if (!in_array($lang, $allowedLangs, true)) {
    $lang = 'en';
}
setcookie('lang', $lang, 2147483647, '/', '', false, true);
echo "ok";
