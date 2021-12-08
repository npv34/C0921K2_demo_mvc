<?php
session_start();
include_once "../../vendor/autoload.php";

if (empty($_SESSION['isLogin'])) {
    header('location: login.php');
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
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<ul>
    <li>
        <a href="index.php?page=user.php&action=show-list">Danh sach nguoi dung</a>
    </li>
    <li>
        <a href="">Danh sach bai viet</a>
    </li>
</ul>
Xin chao: <?php echo $_SESSION['userLogin']['name'] ?>
<a href="index.php?page=admin.php&action=logout">Dang xuat</a>

<?php

include_once 'router.php';

?>
</body>
</html>