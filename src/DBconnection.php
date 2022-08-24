<?php

namespace Raunaq;

use PDO;
use PDOException;

class DBconnection
{

    private $dbServer = 'localhost';
    private $user = 'root';
    private $pass =  '';
    private $dbName = 'db_example';
    private ?PDO $connection;

    protected array $params = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->dbServer;dbname=$this->dbName", $this->user, $this->pass, $this->params);
        } catch (PDOException $e) {
            $this->connection = null;
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
