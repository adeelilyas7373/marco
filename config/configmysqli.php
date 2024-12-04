<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marco";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8");
?>
