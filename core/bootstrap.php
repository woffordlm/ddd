<?php
    $app = [];
    $app{'config'} = require 'config.php';
    require 'core/Router.php';
    require 'database/connection.php';
    require 'database/QueryBuilder.php';
    require 'core/Request.php';
  
  
    $app['database'] = new QueryBuilder(
        Connection::make($app['config']['database'])
    );

 