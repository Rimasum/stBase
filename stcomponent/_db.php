<?php
$username = "admin";
$password = "@#stdata@#";
$db = "stdata";
$host = "localhost";

$conn = mysqli_connect($host, $username, $password, $db);

if ($conn) {
    echo "Connected Successfully!";
    // $check = true;
} else {
    die("Erro: " . mysqli_connect_error());
    // $check = false;
}
