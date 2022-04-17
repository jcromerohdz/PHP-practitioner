<?php 


require 'Tasks.php';


try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', '');
} catch (PDOException $e) {
  die($e->getMessage());
}


$statement = $pdo->prepare('select * from todos;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Tasks');

//var_dump($results[0]->description);


require 'index.view.php';

?>