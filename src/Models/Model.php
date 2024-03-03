<?php

namespace App\Models;

use PDO;
use PDOException;
use App\Databases\Database;

class Model
{
    private const DB_HOST = '127.0.0.1';
    private const DB_NAME = 'db_movie';
    private const DB_USER = 'root';
    private const DB_PASS = '';
    public function getConnection()
    {
        $db = new Database(self::DB_HOST, self::DB_NAME, self::DB_USER, self::DB_PASS);
        return $db->getConnection();
    }



    public function findById(int $id, string $table, string $field = 'id')
    {
        try {
            $sql = "select * from $table where $field=:id;";
            $stmt = $this->getConnection()->prepare($sql);
            $stmt->bindValue(":$field", $id, PDO::PARAM_INT);
            $stmt->execute();
            $results = $stmt->fetchAll();
            $stmt->closeCursor();

            return $results[0];
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }

    // public function save($user) {
    //     // Prepare and execute SQL query to insert or update user data
    // }

    // public function __destruct() {
    //     $this->db->close();
    // }
}
