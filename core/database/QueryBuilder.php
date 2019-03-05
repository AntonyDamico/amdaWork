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

    public function insert($tableName, $params)
    {
        $query =
            "insert into ${tableName} 
            (" . implode(',', array_keys($params)) . ") values (:" .
            implode(', :', array_keys($params)) . ")";

        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute($params);
        } catch (Exception $exception) {
            echo 'Can not insert element<br>';
            die($exception->getMessage());
        }
    }

}