<?php
namespace Src\Model;

class Model
{
    protected $conn;
    protected $tableName;

    public function __construct($tableName)
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
        $this->tableName = $tableName;

    }

    function getAll(): array
    {
        $sql = "SELECT * FROM $this->tableName";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}