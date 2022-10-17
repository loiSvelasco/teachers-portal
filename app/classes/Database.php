<?php

include(dirname(__DIR__) . '/config/config.php');

class Database
{
    private $connection;

    function __construct()
    {
        $this->connection = mysqli_connect(
            $_ENV['DB_HOST'], 
            $_ENV['DB_USER'], 
            $_ENV['DB_PASS'], 
            $_ENV['DB_NAME']
        );
    }

    public function query($query)
    {
        return mysqli_query($this->connection, $query);
    }

    public function fetch_array($result)
    {
        return mysqli_fetch_array($result);
    }

    public function fetch_assoc($result)
    {
        return mysqli_fetch_assoc($result);
    }
}