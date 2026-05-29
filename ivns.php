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

function _VoteReward($custom): void {
    $userId    = (int) $custom;
    $timer     = time() + 12 * 60 * 60;
    $timerReal = time();

    $sth = $GLOBALS['DATABASE']->prepare("SELECT v1 FROM uni1_users WHERE id = ?");
    $sth->execute([$userId]);
    $voted = $sth->fetch(PDO::FETCH_ASSOC);

    if ($voted && $voted['v1'] < $timerReal) {
        $GLOBALS['DATABASE']->prepare(
            "UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + 40000, v1 = ? WHERE `id` = ?"
        )->execute([$timer, $userId]);
        $GLOBALS['DATABASE']->prepare(
            "INSERT INTO uni1_votesystem_log VALUES (?, ?, '1', '1')"
        )->execute([$userId, $timer]);
    }
}

$custom = isset($_POST['custom']) ? (int)$_POST['custom'] : 0;
if ($custom > 0) {
    _VoteReward($custom);
    echo 'OK';
}
?>
