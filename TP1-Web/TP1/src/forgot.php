<?php

require "database.php";

if(!isset($_POST["username"]))
    die("missing username in request.");


try {
    $db->setTokenForUser($_POST["username"]);
    // $mailer->sendResetMail($_POST["username"]); TODO: Implement a mailer, see Jira ticket 18310
} catch(Exception $e) {
    // Do nothing
}

echo "If the user exists in our database, it will receive an email.";
