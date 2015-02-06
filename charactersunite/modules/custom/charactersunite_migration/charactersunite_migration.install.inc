<?php

function charactersunite_migration_disable() {
  MigrateGroup::deregister('CuTest');
  MigrateGroup::deregister('CuHomePage');
  MigrateGroup::deregister('CuHomePageIterations');
}
