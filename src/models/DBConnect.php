<?php
namespace Src\Model;

use Exception;
use PDO;

class DBConnect
{
    private string $dns;
    private string $username;
    private string $password;

    public function __construct()
    {
        $this->dns = 'mysql:host=127.0.0.1;dbname=blog-mvc';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    function connect(): PDO|string
    {
        try {
            return new PDO($this->dns, $this->username, $this->password);
        }catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}