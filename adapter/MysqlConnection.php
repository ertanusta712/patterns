<?php

class MysqlConnection implements Database
{

    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct($host, $db, $user, $password)
    {

        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }

    public function select($sql)
    {
        //select query
    }

    public function connect()
    {
        //mysql connection
    }
}