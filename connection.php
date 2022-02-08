<?php
class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'internship';

    public function connect()
    {
        $this->dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=UTF8";
        echo "just testing";
        try {
            $error = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $error);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->pdo;
    }
}
$db = new Database();
