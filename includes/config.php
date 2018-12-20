<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');



//application address
define('DIR','https://helalibo.ch/omer/clips/');
define('SITEEMAIL','support@helalibo.ch');

try {

	//create PDO connection
    $db = new PDO('mysql:host=lielgips.mysql.db.internal;dbname=lielgips_omer','lielgips_omer','KkXwdLL8');
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
