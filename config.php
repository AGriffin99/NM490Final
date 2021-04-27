<?php
define('DB_SERVER', 'technicolor.anitragriffin.com');
define('DB_USERNAME', 'agriffi1');
define('DB_PASSWORD', '');
define('DB_NAME', 'technicolor');

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
<?php

$hostname = "technicolor.anitragriffin.com"; // the hostname you created when creating the database
$username = "agriffi1";      // the username specified when setting up the database
$password = "";      // the password specified when setting up the database
$database = "technicolor";      // the database name chosen when setting up the database

$link = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}
?>
