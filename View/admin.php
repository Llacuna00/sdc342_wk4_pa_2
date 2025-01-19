<?php
session_start();
require_once('../Util/security.php');

//confirm user is authed
Security::checkAuthority('admin');

if (isset($_POST['logout'])) {
    Security::logout();
}
?>

<html>
<head>
    <title>Week 4 GP3 - Lizzi Llacuna</title>
</head>
<body>
    <h1>Week 4 GP3 - Lizzi Llacuna</h1>
    <h2>Congratulations!</h2>
    <h2>You're logged in as an Administrator!</h2>
    <h3><a href="display_accounts.php">View Users</a></h3>
    <form method="POST">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>