<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'library';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 4306);
if(!$conn){
    die("Connection Failed");
}
?>
