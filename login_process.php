<?php
session_start();
require 'User.php'; // Pastikan path ke file User.php benar

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = new User($_POST['username'], $_POST['password']);
    $user->login();
} else {
    header('Location: login.php');
    exit();
}
?>
