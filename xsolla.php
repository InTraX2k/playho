<?php
define('MODE'  , 'CRON');
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);
require('includes/common.php');
require_once 'inc/virtual_currency_protocol.php';

class VirtualCurrencyExample extends VirtualCurrency {
public function setupDB() {
try {
$this->db = new PDO('mysql:host='.DBConfig::HOST.';port='.DBConfig::PORT.';dbname='.DBConfig::DB, DBConfig::USER, DBConfig::PASS);
} catch (PDOException $e) {
throw new Exception($e->getMessage());
}
}
public function userExists($user) {
$sth = $this->db->prepare("SELECT id FROM uni1_users WHERE id=?");
$sth->execute(array((int)$user));
return count($sth->fetchAll()) > 0;
}
public function invoiceExists($invoiceID) {
$sth = $this->db->prepare("SELECT payment_invoice FROM vc_payments WHERE payment_invoice=?");
$sth->execute(array((int)$invoiceID));
return count($sth->fetchAll()) > 0;
}
public function newInvoice($invoiceID, $userID, $sum) {
try {
$invoiceID = (int)   $invoiceID;
$userID    = (int)   $userID;
$sum       = (float) $sum;
$sth = $this->db->prepare("INSERT INTO vc_payments(payment_invoice, user_id, payment_date, payment_total) VALUES (?,?,?,?)");
$sth->execute(array($invoiceID, $userID, TIMESTAMP, $sum));
$sth = $this->db->prepare("UPDATE uni1_users SET antimatter = antimatter + ? WHERE id = ?");
$sth->execute(array($sum, $userID));
SendSimpleMessage($userID, '', TIMESTAMP, 4, 'System', 'Anti Matter Order', 'Xsolla payment was successful. <br>'.pretty_number($sum).' anti matter have been credited to your account.');
SendSimpleMessage(1, '', TIMESTAMP, 4, 'System', 'Anti Matter Order', 'Xsolla payment was successful. <br>'.pretty_number($sum).' Anti Matter Units have been credited to '.$userID.' account.');
} catch (PDOException $e) {
throw new Exception('error creating payment.');
}
}
public function cancelInvoice($invoiceID) {
$invoiceID = (int) $invoiceID;
$sth = $this->db->prepare("SELECT payment_invoice FROM vc_payments WHERE payment_invoice=? AND payment_canceled=1");
$sth->execute(array($invoiceID));
if (count($sth->fetchAll()) < 1) {
$sth = $this->db->prepare("UPDATE vc_payments SET payment_canceled=1, payment_canceled_date=now() WHERE payment_invoice=?");
$sth->execute(array($invoiceID));
}
}
}
$example = new VirtualCurrencyExample();
$example->process();
?>
