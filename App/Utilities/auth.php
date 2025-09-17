<?php
session_start();
if (!isset($_SESSION["logged_in_id"])) {
    header("Location: ../../views/auth/login.html");
    exit();
}
$id = $_SESSION["logged_in_id"];
$sql = "SELECT * FROM `users` WHERE id = '$id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
if (!$user) {
    header("Location:../../views/auth/login.html");
    exit();
}
?>