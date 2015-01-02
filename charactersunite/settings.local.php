<?php

// Define the current environment.
$_ENV['AH_SITE_ENVIRONMENT'] = 'local';

$databases['default'] = array ('default' =>
  array (
    'database' => 'nbcuni',  // <--- Typically "publisher7_<sitename>"
    'username' => 'root',
    'password' => '',
    'host' => 'localhost',
    'port' => '',
    'driver' => 'mysql',
    'prefix' => '',
  ),
);
$conf['file_public_path'] = 'sites/charactersunite/files/public'; 
$conf['file_private_path'] = 'sites/charactersunite/files/private'; 