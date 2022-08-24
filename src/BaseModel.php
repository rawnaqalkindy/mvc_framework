<?php

namespace Raunaq;

use Raunaq\DBconnection;

class BaseModel
{

    private $db;
    public function __construct()
    {
        $this->db = (new DBConnection())->getConnection();
    }

    public function getDB(){
        return $this->db;
    }

    public function create($data, $table)
    {   $keys = implode(",", array_keys($data));
        $values = '\'' . implode("', '", array_values($data)) . '\'';

        $sql = 'INSERT INTO ' . $table . '(' . $keys . ') VALUES (' . $values . ')';
       //  echo $sql;
        // exit;

        return $this->db->query($sql);
    }

    public function retrieve()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
