<?php 

define('DB_NAME', 'db_bookingCalendar');
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$mysqli->set_charset("utf8");

date_default_timezone_set('Asia/Bangkok');
?>

