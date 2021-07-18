<?php


class MongoConnection implements Connection
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

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function save(BaseModel $baseModel)
    {
        // TODO: Implement save() method.
    }

    public function delete(BaseModel $baseModel)
    {
        // TODO: Implement delete() method.
    }
}