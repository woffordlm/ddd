<?php
// require 'function.php';
$query = require "bootstrap.php";
// require 'database/Connection.php';
require 'Vegetable.php';
// require 'database/QueryBuilder.php';


$selectedVeggies= $query->selectAll('details');

// $selectedVeggies = $query->selectAll('details');
require 'index.view.php';
