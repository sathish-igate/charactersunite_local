<?php
class CuHomePageMigration extends Migration {
  public function __construct($arguments = array()) {
    
    parent::__construct($arguments);
    
    $this->description = t('Migrate Home Page');
    
    $source_fields = array(
      'title' => t('The node ID of the  test'),
    );
    
    $this->machineName = 'CuHomePage';
    $this->map = new MigrateSQLMap($this->machineName,
      array(
        'nid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'description' => 'D7 Unique Node ID',
          'alias' => 'n',
        )
      ),MigrateDestinationNode::getKeySchema());

    $other_database = array(
      'database' => 'devnbcuni',  // <--- Typically "publisher7_<sitename>"
      'username' => 'root',
      'password' => '',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    );
    Database::addConnectionInfo('cu2db', 'default', $other_database);
    db_set_active('cu2db');
    $query = db_select('node', 'n');
    $query->condition('n.type', 'home_page', '=');
    $query->fields('n', array('nid', 'title', 'uid', 'status', 'created', 'changed', 'promote'));

    $this->source = new MigrateSourceSQL($query, $source_fields);
    //$this->source = new MigrateSourceSQL($query, array());
    $this->destination = new MigrateDestinationNode('home_page');

    
    // Make the mappings
    $this->addFieldMapping('title', 'title');
    $this->addFieldMapping('uid', 'uid');
    $this->addFieldMapping('status', 'status');
    $this->addFieldMapping('created', 'created');
    $this->addFieldMapping('changed', 'changed');
    $this->addFieldMapping('promote', 'promote');
    $this->addFieldMapping('language')->defaultValue('und');
    $this->addFieldMapping('field_home_image_section')->issueGroup(t('DNM'));
    $this->addFieldMapping('field_home_scroll_section')->issueGroup(t('DNM'));
    db_set_active();
  }
  
  public function prepareRow($current_row) {
    $current_row->uid = '1';
    return TRUE;
  }
}
