<?php

// // require 'index.view.php';
// require 'variables.php';

// try {
//      $pdo = new PDO($dsn, $user, $pass, $options);
// } catch (PDOException $e) {
//      throw new PDOException($e->getMessage(), (int)$e->getCode());
// }
// // this prepares a query to the database
// $statement = $pdo->prepare('select * from details');

// // this execites the query statement 
// $statement -> execute();

// // this dumps the results of the query
// $selectedVeggies = $statement->fetchAll(PDO::FETCH_OBJ);
// var_dump($selectedVeggies);

class Vegetable {
     // protection makes this unaccessible tot he public
     // protected $desciption
    
    public $name;
    public $dtm;
    public $harvestwindow;
    public $sowingDates;
    
     function __construct($name, $dtm, $harvestwindow, $sowingDates) {
         // Automatically triggered on instantiation
         $this->name = $name;
         $this->dtm = $dtm;
         $this->harvestwindow = $harvestwindow;
         $this->sowingDates = $sowingDates;
     }
 }
 
 $veggieType = new Vegetable ('arugula', '30', '14','2/1-5/1');
 var_dump($veggieType);