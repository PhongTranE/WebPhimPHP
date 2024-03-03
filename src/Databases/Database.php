<?php
declare(strict_types=1);

namespace App\Databases;

use PDO;
use PDOException;

class Database{
    protected string $db_host;
    protected string $db_name;
    protected string $db_user;
    protected string $db_pass;


    public function __construct($host, $name, $user, $pass)
    {
        $this->db_host = $host;
        $this->db_name = $name;
        $this->db_user = $user;
        $this->db_pass = $pass;
    }

    public function getConn(){
        $dsn = "mysql:host={$this->db_host}; dbname={$this->db_name}; charset=utf8";
        try{
            $conn = new PDO($dsn, $this->db_user, $this->db_pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
            exit;
        }
    }

}
