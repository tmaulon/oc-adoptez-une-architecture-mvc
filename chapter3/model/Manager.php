<?php

namespace OpenClassrooms\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=oc-blog;charset=utf8', 'root', '');
        return $db;
    }
}
