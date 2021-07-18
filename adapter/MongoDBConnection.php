<?php


class MongoDBConnection implements Database
{

    /**
     * @var MongoDB
     */
    private $mongoDB;

    public function __construct(MongoDB $mongoDB)
    {
        $this->mongoDB = $mongoDB;
    }

    public function select($sql)
    {
        // select query
    }

    public function connect()
    {
        $this->mongoDB->connection();
    }
}