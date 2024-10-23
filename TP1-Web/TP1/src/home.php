<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: /index.php');
    die("401 Unauthorized");
}

if($_SESSION["username"] === "admin")
    system("cat /flag");
