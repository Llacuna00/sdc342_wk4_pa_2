<?php
require_once('../Controller/user.php');
require_once('../Controller/user_controller.php');
?>

<html>
<head>
    <title>Week4 PA - Lizzi Llacuna</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>Week4 PA - Lizzi Llacuna</h1>
    <h2>User Accounts</h2>
    <?php //display foreach table of each user ?>
    <table>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Registration Date</th>
            <th>User Level</th>
        </tr>
        <?php foreach (UserController::getUsers() as $users) : ?>
        <tr>
            <td><?php echo $users->getUserId(); ?></td>
            <td><?php echo $users->getFirstName(); ?></td>
            <td><?php echo $users->getLastName(); ?></td>
            <td><?php echo $users->getEmail(); ?></td>
            <td><?php echo $users->getPassword(); ?></td>
            <td><?php echo $users->getRegistrationDate(); ?></td>
            <td><?php echo $users->getUserLevel(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form method="POST">
        <button><a href="admin.php">Home</a></button>
        <button><a href="../index.php">Logout</a></button>
    </form>
</body>
</html>

