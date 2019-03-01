<?php

namespace Core\Database;

use PDO;

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

}