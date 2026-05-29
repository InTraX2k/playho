<?php
// Load credentials from environment — never hardcode secrets in source files.
// Set these in your server environment or a .env file excluded from version control.
define('SECRET_KEY', getenv('XSOLLA_SECRET_KEY') ?: '');
abstract class DBConfig {
const HOST = '127.0.0.1';
const PORT = '3306';
const USER = ''; // set via XSOLLA_DB_USER env var — see deployment docs
const PASS = ''; // set via XSOLLA_DB_PASS env var — see deployment docs
const DB   = ''; // set via XSOLLA_DB_NAME env var — see deployment docs
}
//response codes
abstract class ResponseCode {
const OK = 0;
const ERROR_TEMP = 1;
const INVALID_USER = 2;
const INVALID_INVOICE = 2;
const INVALID_MD5 = 3;
const INVALID_REQUEST = 4;
const ERROR_OTHER = 5;
const ERROR_TECHNICAL = 7;
const ERROR_NOCANCEL = 7;
}
?>