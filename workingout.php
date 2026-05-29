<?php

// Load credentials from environment — never hardcode in source files.
$host        = getenv('ALLOPASS_DB_HOST') ?: 'localhost';
$db_name     = getenv('ALLOPASS_DB_NAME') ?: '';
$db_user     = getenv('ALLOPASS_DB_USER') ?: '';
$db_password = getenv('ALLOPASS_DB_PASS') ?: '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('DB connection failed');
}

function pretty_number($n, $dec = 0) {
    return number_format(floattostring($n, $dec), $dec, ',', '.');
}
function floattostring($Numeric, $Pro = 0, $Output = false) {
    return ($Output)
        ? str_replace(',', '.', sprintf('%.' . $Pro . 'f', $Numeric))
        : sprintf('%.' . $Pro . 'f', $Numeric);
}

function SendSimpleMessage(PDO $pdo, $Owner, $Sender, $Time, $Type, $From, $Subject, $Message) {
    $params = [(int)$Owner, (int)$Sender, (int)$Time, (int)$Type, $From, $Subject, $Message];
    $sql = "INSERT INTO uni1_messages
        SET message_owner=?, message_sender=?, message_time=?, message_type=?,
            message_from=?, message_subject=?, message_text=?,
            message_unread='1', message_universe='1'";
    $pdo->prepare($sql)->execute($params);
    $pdo->prepare(str_replace('uni1_messages', 'uni1_messages_copy', $sql))->execute($params);
}

function _rewardPurchase(PDO $pdo, $userId, $pay, $realpay, $received, $credits, $type, $transac, $code, $timer) {
    $userId  = (int) $userId;
    $credits = (int) $credits;
    $timer   = time();

    $sth = $pdo->prepare("SELECT * FROM `uni1_users` WHERE `id` = ?");
    $sth->execute([$userId]);
    $INFO1 = $sth->fetch(PDO::FETCH_ASSOC);
    if (!$INFO1) return;

    if     ($INFO1['lp_points'] >= 7000) { $tex = 8; }
    elseif ($INFO1['lp_points'] >= 2500) { $tex = 6; }
    elseif ($INFO1['lp_points'] >= 625)  { $tex = 4; }
    elseif ($INFO1['lp_points'] >= 125)  { $tex = 2; }
    else                                  { $tex = 1; }

    $sth = $pdo->prepare("UPDATE `uni1_users` SET `lp_points` = `lp_points` + ?, `antimatter` = `antimatter` + ? WHERE `id` = ?");
    $sth->execute([$credits * $tex, $credits, $userId]);

    $sth = $pdo->prepare("INSERT INTO `uni1_allopass_log` VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?, ?, '1')");
    $sth->execute([$userId, $code, $credits, $type, $transac, $pay, $realpay, $received, $timer]);

    if (!empty($INFO1['ref_id'])) {
        $refBonus = (int)($credits / 100 * 5);
        $pdo->prepare("UPDATE `uni1_users` SET `antimatter` = `antimatter` + ? WHERE `id` = ?")->execute([$refBonus, (int)$INFO1['ref_id']]);
        SendSimpleMessage($pdo, (int)$INFO1['ref_id'], 0, $timer, 4, 'System', 'Anti Matter Order',
            'Referral payment was successful. <br>' . pretty_number($refBonus) . ' anti matter have been credited to your account.');
    }

    $bonus = pretty_number($credits + (int)($credits / 100 * $tex));
    SendSimpleMessage($pdo, $userId, 0, $timer, 4, 'System', 'Anti Matter Order',
        'Allopass payment was successful. <br>' . $bonus . ' Anti Matter Units have been credited to your account');
    SendSimpleMessage($pdo, 1, 0, $timer, 4, 'System', 'Anti Matter Order',
        'Allopass payment was successful. <br>' . $bonus . ' Anti Matter Units have been credited to ' . $userId);
}

// Main
$userId   = $_GET['user_id']       ?? null;
$pay      = $_GET['amount']        ?? null;
$realpay  = $_GET['paid']          ?? null;
$received = $_GET['payout_amount'] ?? null;
$credits  = $_GET['virtual_amount']?? null;
$type     = $_GET['type']          ?? null;
$transac  = $_GET['transaction_id']?? null;
$code     = $_GET['code']          ?? null;

if (isset($code)) {
    _rewardPurchase($pdo, $userId, $pay, $realpay, $received, $credits, $type, $transac, $code, time());
    echo 'OK';
}
?>
