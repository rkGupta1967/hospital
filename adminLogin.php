<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <?php
    include "database/config.php";
    ?>

    <form class="formAlign" action="admin_login_process.php" method="POST">
        <h2 class="header">Admin Login</h2>
        <label for="email">Email: </label>
        <input type="email" name="email" class="input" placeholder="Enter your email"><br>
        <label for="password">Password: </label>
        <input type="password" name="password" class="input" placeholder="Enter your password"><br>
        <input type="submit" value="Sign in" class="btn">
        
    </form>

</body>

</html>