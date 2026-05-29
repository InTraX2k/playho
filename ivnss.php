<?php

// Your Database Connection Details
$host = 'localhost';
$db_name = '';
$db_user = '';
$db_password = '';

mysql_connect($host, $db_user, $db_password);
mysql_select_db($db_name);

function _VoteReward($userId, $valid) {
    if($valid == 1) {
        $userId = mysql_real_escape_string($userId);
        mysql_query("UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + '15000', v1 = '".TIMESTAMP."' WHERE `id` = '".mysql_escape_string($userId)."';");
    }
}

//-------------------------- Don't change anything below this! ----------------------------- //

// Enforce caller IP whitelist — only the vote platform may call this endpoint
$ipsWhitelist = array(); // add trusted IPs here, e.g. '1.2.3.4'
$callerIp = $_SERVER['REMOTE_ADDR'];
if (!in_array($callerIp, $ipsWhitelist)) {
    exit;
}

// Validate shared secret token from environment — never hardcode in source
$expectedToken = getenv('VOTESYSTEM_SECRET') ?: '';

$userId  = isset($_POST['userid'])  ? $_POST['userid']  : null;
$userIp  = isset($_POST['userip'])  ? $_POST['userip']  : null;
$valid   = isset($_POST['voted'])   ? intval($_POST['voted']) : 0;
$at_refc = isset($_POST['at_refc']) ? $_POST['at_refc'] : null;

$result = false;
if (!empty($userId) && !empty($at_refc) && !empty($expectedToken)) {
    if (hash_equals($expectedToken, $at_refc)) {
        $result = true;
        _VoteReward($userId, $valid);
    }
}

if ($result) {
    echo 'OK';
}

mysql_close();
?>
