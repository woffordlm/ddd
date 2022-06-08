<?php
// require 'function.php';
$query = require "core/bootstrap.php";

// require 'Vegetable.php';




// $uri = trim($_SERVER['REQUEST_URI'],"/");


require Router::load('routes.php')

     ->direct(Request::uri());