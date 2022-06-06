<?php


require 'variables.php';

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
     throw new PDOException($e->getMessage(), (int)$e->getCode());
}
// this prepares a query to the database
$statement = $pdo->prepare('select * from details');

// this execites the query statement 
$statement -> execute();

// this dumps the results of the query
$selectedVeggies = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';

