<?php
// Conectar a la DB
$server = "localhost";
$user = "administrador";
$pass = "administrador";
$database = "sbs";
$db = mysqli_connect($server, $user, $pass, $database);

$isConnected;
if ($db) {
    $isConnected = true;
} else {
    echo 'La base de datos MySQL ha fallado'.mysqli_connect_error();
}

mysqli_query($db, "SET NAMES utf8");

// Create a session
session_start();

?>