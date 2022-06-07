<?php

require 'Vegetable.php';
require 'functions.php';

$pdo = connectToDb();
$selectedVeggies = fetchAllVegetables($pdo);
require 'index.view.php';

