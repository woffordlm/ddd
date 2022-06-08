<?php
$selectedVeggies= $app['database']->selectAll('details');

require 'view/index.view.php';