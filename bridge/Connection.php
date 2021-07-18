<?php


interface Connection
{
    public function save(BaseModel $baseModel);

    public function delete(BaseModel $baseModel);
}