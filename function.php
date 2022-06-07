<?php
// function connectToDb()
// {
//     $host = '127.0.0.1';
//     $db   = 'veggies';
//     $user = 'root';
//     $pass = 'password';
//     $charset = 'utf8mb4';
//     $options = [
//         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES   => false,
//     ];
//     $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
//     try {
//          return new PDO($dsn, $user, $pass, $options);
//     } catch (PDOException $e) {
//          die($e->getMessage());
//     }
// }
function fetchAllTasks($pdo){
    $statement = $pdo->prepare("select * from details");
    $statement -> execute();
    // this dumps the results of the query
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Vegetable');
}