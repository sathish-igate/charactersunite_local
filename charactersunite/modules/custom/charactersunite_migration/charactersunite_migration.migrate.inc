<?php
function charactersunite_migration_migrate_api() {
  $api = array(
    'api' => 2,
    'migrations' => array(
      'CuTest' => array('class_name' => 'CuTestMigration'),
      'CuHomePage' => array('class_name' => 'CuHomePageMigration'),
      'CuHomePageIterations' => array('class_name' => 'CuHomePageIterationsMigration'),
	  ),
  );
  return $api;
}
