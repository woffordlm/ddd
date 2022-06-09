<?php


$selectedVeggies= $app['database']->selectOne("details", "".$_POST['name']);
$veggies= $selectedVeggies[0];

require 'view/details.view.php';