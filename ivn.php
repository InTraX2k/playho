<?php

#Example PHP Postback Script

// Your Database Connection Details
$host        = getenv('IPN_DB_HOST') ?: 'localhost';
$db_name     = getenv('IPN_DB_NAME') ?: '';
$db_user     = getenv('IPN_DB_USER') ?: '';
$db_password = getenv('IPN_DB_PASS') ?: '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('DB connection failed');
}

function _VoteReward($userId, $userIp, $valid) {
    global $pdo;

        //if(!$voted[0]) {
    if($valid == 1) {

        // Make userid safe to use in query
        $userId = (int) $userId;
        $timer = time();
        $timer += 12 * 60 * 60;
        // Check if that user voted already
        // Adjust this query to match your table, column names etc
        //$voted = $pdo->prepare("SELECT voted FROM vote_list WHERE user = :user"); ...
        //if(!$voted[0]) {
            // User has not voted, grant him reward, for example points
            $upd = $pdo->prepare("UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + '40000', v3 = :timer WHERE `id` = :id");
            $upd->execute([':timer' => $timer, ':id' => $userId]);
            $ins = $pdo->prepare("INSERT INTO uni1_votesystem_log VALUES (:uid, :timer, '3', '1')");
            $ins->execute([':uid' => $userId, ':timer' => $timer]);
        //}
        //else {
            // Do whatever you want if he voted already. Maybe a log of false votes
       // }

    }

}

//-------------------------- Don't change anything below this! ----------------------------- //

$ipsWhitelist = array('78.46.67.100');

// Enforce IP whitelist — only the vote platform may call this endpoint
$callerIp = $_SERVER['REMOTE_ADDR'];
if (!in_array($callerIp, $ipsWhitelist)) {
    exit;
}

$userId = isset($_POST['userid']) ? $_POST['userid'] : null;
$userIp = isset($_POST['userip']) ? $_POST['userip'] : null;
$valid  = isset($_POST['voted']) ? intval($_POST['voted']) : 0;

$result = false;
if (!empty($userId) && !empty($userIp)) {
    _VoteReward($userId, $userIp, $valid);
    $result = true;

}

if ($result) {
    echo 'OK';
}

//Close Connection
$pdo = null;

?>
