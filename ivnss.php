<?php

define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)) . '/');
set_include_path(ROOT_PATH);
require('includes/common.php');

// Enforce caller IP whitelist — only the vote platform may call this endpoint
$ipsWhitelist = []; // add trusted IPs here, e.g. '1.2.3.4'
$callerIp = $_SERVER['REMOTE_ADDR'];
if (!in_array($callerIp, $ipsWhitelist, true)) {
    exit;
}

// Validate shared secret token from environment — never hardcode in source
$expectedToken = getenv('VOTESYSTEM_SECRET') ?: '';

function _VoteReward(int $userId): void {
    $timer     = time() + 12 * 60 * 60;
    $timerReal = time();

    $sth = $GLOBALS['DATABASE']->prepare("SELECT v1 FROM uni1_users WHERE id = ?");
    $sth->execute([$userId]);
    $voted = $sth->fetch(PDO::FETCH_ASSOC);

    if ($voted && $voted['v1'] < $timerReal) {
        $GLOBALS['DATABASE']->prepare(
            "UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + 15000, v1 = ? WHERE `id` = ?"
        )->execute([$timer, $userId]);
    }
}

$userId  = isset($_POST['userid'])  ? (int)$_POST['userid']  : 0;
$at_refc = isset($_POST['at_refc']) ? $_POST['at_refc']      : null;

if ($userId > 0 && !empty($at_refc) && !empty($expectedToken)) {
    if (hash_equals($expectedToken, $at_refc)) {
        _VoteReward($userId);
        echo 'OK';
    }
}
?>
