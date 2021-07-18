<?php
require('Database.php');
require('MongoDB.php');
require('MongoDBConnection.php');
require('MysqlConnection.php');
$mysql = new MysqlConnection("test","test","test","test");

$mongo = new MongoDBConnection(new MongoDB("test","test","test","test"));

$mongo->select("test");
$mysql->select("test");