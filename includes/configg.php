<?php

$host = "lielgips.mysql.db.internal"; /* Host name */
$user = "lielgips_omer"; /* User */
$password = "KkXwdLL8"; /* Password */
$dbname = "lielgips_omer"; /* Database name */


$con = mysqli_connect($host, $user, $password,$dbname);
// Check connectionn
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}