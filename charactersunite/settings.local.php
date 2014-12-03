<?php

//ini_set('max_execution_time', 300);
//ini_set('max_input_time', 180);
//ini_set('memory_limit', '256M');
//ini_set('post_max_size', '36M');
//ini_set('upload_max_filesize', '12M');

// Define the current environment.
$_ENV['AH_SITE_ENVIRONMENT'] = 'local';

$databases['default'] = array ('default' =>
  array (
    'database' => 'charactersunite',  // <--- Typically "publisher7_<sitename>"
    'username' => 'root',
    'password' => '',
    'host' => 'localhost',
    'port' => '',
    'driver' => 'mysql',
    'prefix' => '',
  ),
);

$base_url = 'http://local.charactersunite.com';

$conf['file_public_path'] = 'sites/charactersunite/files/public'; 
$conf['file_private_path'] = 'sites/charactersunite/files/private'; 