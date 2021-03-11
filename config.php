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
