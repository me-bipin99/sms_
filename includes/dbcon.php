<?php
/*
// For free hostia
$ser = 'localhost';
$db = 'new_sms';
$usr = 'new_sms';
$pwd = '<password>';
$conn = mysqli_connect($ser, $usr, $pwd, $db);
if (!$conn) {
    die('connection failed');
}
*/

//For XAMPP
$ser = 'localhost';
$db = 'school_ms';
$usr = 'root';
$pwd = '';
$conn = mysqli_connect($ser, $usr, $pwd, $db);
if (!$conn) {
    die('connection failed');
}

?>