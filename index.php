<?php
session_start();
    require_once('Controller/user.php');
    require_once('Controller/user_controller.php');
    require_once('Util/security.php');

    Security::checkHTTPS();

    $login_msg = isset($_SESSION['logout_msg']) ?
        $_SESSION['logout_msg'] : '';

    if (isset($_POST['email']) & isset($_POST['pw'])) {
        
        //login and password fields were set
        $user_level = UserController::validUser(
            $_POST['email'], $_POST['pw']);


        switch ($user_level) {
            case '1':
                $_SESSION['admin'] = true;
                $_SESSION['user'] = false;
                $_SESSION['tech'] = false;
                header("Location: View/admin.php");
            break;
            case '2':
                $_SESSION['admin'] = false;
                $_SESSION['user'] = true;
                $_SESSION['tech'] = false;
                header("Location: View/user.php");
            break;
            case '3':
                $_SESSION['admin'] = false;
                $_SESSION['user'] = false;
                $_SESSION['tech'] = true;
                header("Location: View/tech.php");
            break;
            default:
                echo "Authentication Failed - Try Again";
        }

    }
?>

<html>
<head>
    <title>Week 4 GP2 - Lizzi Llacuna</title>
</head>
<body>
    <h1>Week4 GP2 - Lizzi Llacuna</h1>
    <h2>Login</h2>
    <form method="POST">
        <h3>Login ID (email): <input type="text" name="email"></h3>
        <h3>Password: <input type="password" name="pw"></h3>
        <input type="submit" value="login" name="login" />
    </form>
    <h2><?php echo $login_msg; ?></h2>
</body>
</html>