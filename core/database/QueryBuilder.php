<?php

namespace Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll(string $tableName)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$tableName}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function read(string $tableName, string $id)
    {
        $query = "SELECT * FROM ${tableName} WHERE id = ?";

        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute([$id]);
            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            echo 'Something went wrong';
            die($e->getMessage());
        }
    }

}