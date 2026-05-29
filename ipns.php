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

if (!function_exists('floattostring')) {
    function floattostring($Numeric, $Pro = 0, $Output = false) {
        return ($Output) ? str_replace(',', '.', sprintf('%.'.$Pro.'f', $Numeric)) : sprintf('%.'.$Pro.'f', $Numeric);
    }
}
if (!function_exists('pretty_number')) {
    function pretty_number($n, $dec = 0) {
        return number_format((float)$n, $dec, ',', '.');
    }
}

function SendSimpleMessage($Owner, $Sender, $Time, $Type, $From, $Subject, $Message)
{
    global $pdo;

    $SQL = "INSERT INTO uni1_messages SET
    message_owner = :owner,
    message_sender = :sender,
    message_time = :time,
    message_type = :type,
    message_from = :from,
    message_subject = :subject,
    message_text = :message,
    message_unread = '1',
    message_universe = '1'";
    $stmt = $pdo->prepare($SQL);
    $stmt->execute([
        ':owner'   => (int) $Owner,
        ':sender'  => (int) $Sender,
        ':time'    => (int) $Time,
        ':type'    => (int) $Type,
        ':from'    => $From,
        ':subject' => $Subject,
        ':message' => $Message,
    ]);

    $SQ = "INSERT INTO uni1_messages_copy SET
    message_owner = :owner,
    message_sender = :sender,
    message_time = :time,
    message_type = :type,
    message_from = :from,
    message_subject = :subject,
    message_text = :message,
    message_unread = '1',
    message_universe = '1'";
    $stmt2 = $pdo->prepare($SQ);
    $stmt2->execute([
        ':owner'   => (int) $Owner,
        ':sender'  => (int) $Sender,
        ':time'    => (int) $Time,
        ':type'    => (int) $Type,
        ':from'    => $From,
        ':subject' => $Subject,
        ':message' => $Message,
    ]);
}

function _rewardPurchase($userId, $currency, $mc_gross) {
    global $pdo;

    $userId   = (int) $userId;
    $timer    = time();
    $stmt     = $pdo->prepare("SELECT * FROM `uni1_users` WHERE `id` = :id");
    $stmt->execute([':id' => $userId]);
    $INFO1    = $stmt->fetch(PDO::FETCH_ASSOC);

    $mc_gross = (float) $mc_gross;
    $currency = (int) $currency;

    if ($INFO1['lp_points'] >= 7000) {
        $tex = 8;
    } elseif ($INFO1['lp_points'] >= 2500) {
        $tex = 6;
    } elseif ($INFO1['lp_points'] >= 625) {
        $tex = 4;
    } elseif ($INFO1['lp_points'] >= 125) {
        $tex = 2;
    } else {
        $tex = 1;
    }

    $upd = $pdo->prepare("UPDATE `uni1_users` SET `lp_points` = `lp_points` + :lp, `antimatter` = `antimatter` + :am WHERE `id` = :id");
    $upd->execute([
        ':lp' => $mc_gross * $tex,
        ':am' => $currency,
        ':id' => $userId,
    ]);

    if (!empty($INFO1['ref_id'])) {
        $refUpd = $pdo->prepare("UPDATE `uni1_users` SET `antimatter` = `antimatter` + :am WHERE `id` = :id");
        $refUpd->execute([
            ':am' => intval($currency / 100 * 5),
            ':id' => (int) $INFO1['ref_id'],
        ]);
        SendSimpleMessage($INFO1['ref_id'], '', $timer, 4, 'System', 'Anti Matter Order', 'Referal PayPal payment was successful. <br>'.pretty_number($currency / 100 * 5).' anti matter have been credited to your account.');
    }
    SendSimpleMessage($userId, '', $timer, 4, 'System', 'Anti Matter Order', 'PayPal payment was successful. <br>'.pretty_number($currency).' anti matter have been credited to your account.');
    SendSimpleMessage(1, '', $timer, 4, 'System', 'Anti Matter Order', 'PayPal payment was successful. <br>'.pretty_number($currency).' Anti Matter Units have been credited to '.$userId.' account.');
}

//-------------------------- Don't change anything below this! ----------------------------- //

define("DEBUG", 0);
define("USE_SANDBOX", 0);
define("LOG_FILE", "./ipn.log");
// Read POST data
// reading posted data directly from $_POST causes serialization
// issues with array data in POST. Reading raw POST data from input stream instead.
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$myPost = array();
foreach ($raw_post_array as $keyval) {
$keyval = explode ('=', $keyval);
if (count($keyval) == 2)
$myPost[$keyval[0]] = urldecode($keyval[1]);
}
// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
foreach ($myPost as $key => $value) {
$req .= "&$key=" . urlencode($value);
}
// Post IPN data back to PayPal to validate the IPN data is genuine
// Without this step anyone can fake IPN data
if(USE_SANDBOX == true) {
$paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
} else {
$paypal_url = "https://www.paypal.com/cgi-bin/webscr";
}
$ch = curl_init($paypal_url);
if ($ch == FALSE) {
return FALSE;
}
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
if(DEBUG == true) {
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
}
// CONFIG: Optional proxy configuration
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
// Set TCP timeout to 30 seconds
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
// CONFIG: Please download 'cacert.pem' from "http://curl.haxx.se/docs/caextract.html" and set the directory path
// of the certificate as shown below. Ensure the file is readable by the webserver.
// This is mandatory for some environments.
//$cert = __DIR__ . "./cacert.pem";
//curl_setopt($ch, CURLOPT_CAINFO, $cert);
$res = curl_exec($ch);
if (curl_errno($ch) != 0) // cURL error
{
if(DEBUG == true) {
error_log(date('[Y-m-d H:i e] '). "Can't connect to PayPal to validate IPN message: " . curl_error($ch) . PHP_EOL, 3, LOG_FILE);
}
curl_close($ch);
exit;
} else {
// Log the entire HTTP response if debug is switched on.
if(DEBUG == true) {
error_log(date('[Y-m-d H:i e] '). "HTTP request of validation request:". curl_getinfo($ch, CURLINFO_HEADER_OUT) ." for IPN payload: $req" . PHP_EOL, 3, LOG_FILE);
error_log(date('[Y-m-d H:i e] '). "HTTP response of validation request: $res" . PHP_EOL, 3, LOG_FILE);
// Split response headers and payload
list($headers, $res) = explode("\r\n\r\n", $res, 2);
}
curl_close($ch);
}
// Inspect IPN validation result and act accordingly
// check whether the payment_status is Completed
// check that txn_id has not been previously processed
// check that receiver_email is your PayPal email
// check that payment_amount/payment_currency are correct
// process payment and mark item as paid.
// assign posted variables to local variables
//$item_name = $_POST['item_name'];
//$item_number = $_POST['item_number'];
//$payment_status = $_POST['payment_status'];
//$payment_amount = $_POST['mc_gross'];
//$payment_currency = $_POST['mc_currency'];
//$txn_id = $_POST['txn_id'];
//$receiver_email = $_POST['receiver_email'];
//$payer_email = $_POST['payer_email'];


$userId = isset($_POST['custom']) ? $_POST['custom'] : null;
$currency = isset($_POST['item_number']) ? $_POST['item_number'] : null;
$mc_gross = isset($_POST['mc_gross']) ? $_POST['mc_gross'] : null;
$payment_status = isset($_POST['payment_status']) ? $_POST['payment_status'] : null;

// Verify PayPal responded with VERIFIED before granting any reward
if (strpos($res, 'VERIFIED') === false) {
    if (DEBUG) {
        error_log(date('[Y-m-d H:i e] '). "IPN not verified by PayPal: $res" . PHP_EOL, 3, LOG_FILE);
    }
    exit;
}

$result = false;
if ($payment_status == 'Completed') {
    $result = true;
    _rewardPurchase($userId, $currency, $mc_gross);
}

if ($result) {
    echo 'OK';
}

//Close Connection
$pdo = null;

?>
