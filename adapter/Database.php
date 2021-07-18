<?php

interface Database{

    public function select($sql);
    public function connect();
}