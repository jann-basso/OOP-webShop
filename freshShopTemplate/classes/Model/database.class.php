<?php
namespace App\Model;

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "root";
    private $dbName = "webshop";

    protected function connect() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbName}";
        $pdo = new \PDO($dsn, $this->user, $this->password);

        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $pdo;
    }
}