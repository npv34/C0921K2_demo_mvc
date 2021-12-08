<?php
session_start();
use Src\Controller\UserController;

include_once "../../vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userController = new UserController();
    $userController->checkAccountLogin($_REQUEST);

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>
<div class="container">
    <div class="form-login">
        <form action="" method="post">
            <table>
                <tr>
                    <td colspan="2">
                        <h2>Login Admin</h2>
                        <?php if (isset($_SESSION['error-login'])):?>
                        <p><?php echo $_SESSION['error-login']?></p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Login</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>

</div>
</body>
</html>