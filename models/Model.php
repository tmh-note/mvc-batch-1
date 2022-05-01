<?php

namespace Models;

abstract class Model
{
    protected $hostname = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'mvc';
    protected $port = '3306';
    protected $connection;
    protected $result;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->connection = mysqli_connect(
            $this->hostname,
            $this->username,
            $this->password,
            $this->database,
            $this->port
        );
    }

    public function query($sql)
    {
        $this->result = mysqli_query($this->connection, $sql);

        return $this;
    }

    public function get()
    {
        $rows = [];

        while($row = mysqli_fetch_assoc($this->result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function first()
    {
        $row = mysqli_fetch_assoc($this->result);
        return $row;
    }

    public function result()
    {
        return $this->result;
    }
}
