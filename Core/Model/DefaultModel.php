<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel extends Database {

    protected string $table;

    public function findAll(): array
    {
        $stmt = "SELECT * FROM ". $this->table; 
        return $this->getData($stmt);
    }
    
    public function find(int $id): object
    {
        $stmt = "SELECT * FROM ". $this->table . "WHERE id = $id"; 
        return $this->getData($stmt, true);
    }
}