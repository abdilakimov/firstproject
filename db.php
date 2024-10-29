<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registerusers";

// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
     "Успех";
}
?>
