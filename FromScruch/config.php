<?php 
$DB_server = 'localhost';
$DB_pass = 'root';
$DB_user = '';
$DB_name = 'FR_data';

$con = mysqli_connect($DB_server, $DB_pass, $DB_user, $DB_name);
if(!$con){
    die(mysqli_connect_errno());
}

?>