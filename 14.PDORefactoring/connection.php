<?php

class Connection 
{

    public static function make()
    {

        try {

            $pdo = new PDO('mysql:host=127.0.0.1;dbname=myToDo', 'root','');
        
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}

// $connection = new Connection();

// $connection->make();

$pdo = Connection::make();