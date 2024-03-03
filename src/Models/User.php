<?php

namespace App\Models;

use PDO;
use PDOException;
use \App\Models\Model;
use App\Databases\Database;


class User extends Model
{
    public int $id;
    public string $name;
    public string $email;

    public $conn;

    public function __construct($name = '', $email = '')
    {
        if ($name != '' && $email != '') {
            $this->name = $name;
            $this->email = $email;
        }
    }

    // public function getConnection()
    // {
    //     $db = new Database();
    //     return $db->getConnection();
    // }

    public function getAll()
    {
        try {
            $sql = "select * from users";
            $stmt = $this->getConnection()->prepare($sql);
            // $stmt->setFetchMode(PDO::FETCH_DEFAULT);
            $stmt->execute();
            $users = $stmt->fetchAll();
            $stmt->closeCursor();

            return $users;
        } catch (PDOException $e) {
            $e->getMessage();
            echo $e;
        }
    }

    public function getById(int $id)
    {
        return $this->findById($id, 'users');
    }
}
