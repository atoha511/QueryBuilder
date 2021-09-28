<?php

namespace App;

use Aura\SqlQuery\QueryFactory;
use PDO;


class QueryBuilder
{
    protected $pdo;
    protected $queryFactory;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=lesson', 'lesson', '12345');
        $this->queryFactory = new QueryFactory("mysql");
    }

    public function getAll($table)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table);
        $statement = $this->pdo->prepare($select->getStatement());
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($table, $id)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table)
            ->where("id = :id")
            ->bindValue('id', $id);
        $statement = $this->pdo->prepare($select->getStatement());
        $statement->execute($select->getBindValues());
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data)
    {
        $insert = $this->queryFactory->newInsert();
        $insert->cols($data)
            ->into($table);
        $statement = $this->pdo->prepare($insert->getStatement());
        $statement->execute($data);
    }

    public function update($table, $data, $id)
    {
        $update = $this->queryFactory->newUpdate();
        $update->cols($data)
            ->table($table)
            ->where('id = :id')
            ->bindValue('id', $id);
        $statement = $this->pdo->prepare($update->getStatement());
        $statement->execute($update->getBindValues());
    }

    public function delete($table, $id)
    {
        $delete = $this->queryFactory->newDelete();
        $delete->from($table)
            ->where('id = :id')
            ->bindValue('id', $id);
        $statement = $this->pdo->prepare($delete->getStatement());
        $statement->execute($delete->getBindValues());
    }

}
