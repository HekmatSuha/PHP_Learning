<?php

require 'Task.php';

try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=myToDo', 'root','');

}catch (PDOException $e){
    die($e->getMessage());
}

$statement =$pdo->prepare('select * from todos');

$statement->execute();

$tasks = ($statement->fetchAll(PDO::FETCH_CLASS,'Task'));

require 'index.view.php';