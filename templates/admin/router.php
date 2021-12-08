<?php

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
$userController = new \Src\Controller\UserController();

switch ($page) {
    case 'user.php':
        switch ($action) {
            case 'show-list':
                $userController->index();
                break;
            case 'add-new':
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    $userController->create();
                } else{
                    $userController->store();
                }
                break;
        }
        break;
    case 'admin.php':
        switch ($action){
            case 'logout':
                $userController->logout();
                break;
        }
        break;
}