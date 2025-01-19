<?php
session_start();
require_once('../Util/security.php');

Security::checkAuthority('user');

//user clicked the logout button
if (isset($_POST['logout'])) {
    Security::logout();
}
?>
<html>
<head>
    <title>Week4 GP3 - Lizzi Llacuna</title>
</head>
<body>
    <h1>Week4 GP3 - Lizzi Llacuna</h1>
    <h2>Congratulations!</h2>
    <h2>You're logged in as a User!</h2>
    <h3><a href="display_products.php">View Products</a></h3>
    <form method="POST">
        <input type="submit" value="logout" name="logout" >
    </form>
</body>
</html>