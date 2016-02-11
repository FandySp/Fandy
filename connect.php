<?php
$hostname = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "b4e4227c5f49a4";
$password = "c85acd0d":
$database_name = "db_fandysp-websample";

$conn = mysql_connect($hostname, $username, $password) or die("Error menghubungkan ke host database");
$db = mysql_select_db($database_name) or die("Error menghubungkan ke database");
?>