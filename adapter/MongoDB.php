<?php


class MongoDB
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

    public function connection()
    {
        //mongo connection
    }

    public function select($query)
    {
        //mongo select
    }
}