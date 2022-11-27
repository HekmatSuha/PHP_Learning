<?php

require 'Task.php';
require 'connection.php';


$statement =$pdo->prepare('select * from todos');

$statement->execute();

$tasks = ($statement->fetchAll(PDO::FETCH_CLASS,'Task'));

require 'index.view.php';