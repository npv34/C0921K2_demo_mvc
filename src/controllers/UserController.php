<?php
namespace Src\Controller;

use Src\Model\UserModel;

class UserController extends Controller
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function index() {
        $users = $this->userModel->getAll();
        include_once "users/list.php";
    }

    function checkAccountLogin($request) {
        $email = $request['email'];
        $password = $request['password'];
        $accountUser = $this->userModel->getAccountUser($email, $password);
        if ($accountUser) {
            $_SESSION['isLogin'] = true;
            $_SESSION['userLogin'] = $accountUser;
            $_SESSION['error-login'] = null;
            header('location: index.php');
        }else{
            $_SESSION['error-login'] = 'Account not exist!';
        }
    }

    function logout() {
        $_SESSION['isLogin'] = false;
        $_SESSION['userLogin'] = null;
        header('location: login.php');
    }

    function create() {
        include_once "users/add.php";
    }

    function store() {

    }
}