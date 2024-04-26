<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=gamerstore;user=root;password=Mimo7alawani12;charset=utf8mb4';

        $this->connection = new PDO($dsn);
    }
    public function query($query , $params = [])
    {
        $statement = $this->connection->prepare($query);
        foreach ($params as $key => $value) {
            $statement->bindValue($key, $value);
        }
        $statement->execute();
         return $statement;
    }

}










