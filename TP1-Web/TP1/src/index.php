<?php

require "database.php";
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <script>
        function forgot() {
            let username = prompt("Username?");
            fetch("/forgot.php", {
                method: 'POST',
                body: `username=${username}`,
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                },
            })
        }
    </script>
</head>

<body class="text-center">
<form class="form-signin" method="post" action="/login.php">
    <img class="mb-4" src="https://www.epita.fr/wp-content/themes/epita-refonte-theme/assets/images/logo-epita.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputUsername" class="sr-only">Username</label>
    <input type="text" id="inputUsername"  name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p><a onclick="forgot()">Forgot password ?</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
</form>
</body>
</html>

