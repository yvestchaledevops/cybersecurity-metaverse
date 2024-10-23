<?php
require "database.php";
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    $user = $db->getUser($_POST['username']);
    if ($user && $user["password"] === $_POST['password']) {
        $_SESSION["username"] = $user["username"];
        header('Location: /home.php');
    } else {
        echo "Username or password incorrect.";
    }
}