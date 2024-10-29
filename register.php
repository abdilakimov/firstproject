<?php
require_once('db.php');

$email = $_POST['email'];
$full_name = $_POST['full_name'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if (isset($email, $full_name, $nickname, $password, $password2) && 
    strlen($email) > 2 && strlen($full_name) > 2 && 
    strlen($nickname) > 2 && strlen($password) > 2 && 
    strlen($password2) > 2) {

    if ($password !== $password2) {
        header("Location: http://bekk/register.php?error=2");
        exit();
    }

    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: http://bekk/register.php?error=3");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO `users` (email, full_name, nickname, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $full_name, $nickname, $hashed_password);

    if ($stmt->execute()) {
        header("Location: http://bekk/register.php?success=1");
        exit();
    } else {
        header("Location: http://bekk/register.php?success=4");
        exit();
    }
} else {
    header("Location: http://bekk/register.php?error=1");
    exit();
}
?>
