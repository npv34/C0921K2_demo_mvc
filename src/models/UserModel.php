<?php
namespace Src\Model;


class UserModel extends Model
{
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct($this->table);
    }

    function getAccountUser($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}