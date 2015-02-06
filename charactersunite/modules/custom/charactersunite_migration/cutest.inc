<?php
class CuTestMigration extends Migration {
  public function __construct($arguments = array()) {
    
    parent::__construct($arguments);
    
    $this->description = t('Migrate test');
    
    $source_fields = array(
      'title' => t('The node ID of the  test'),
      'body' => t('Body'),
      'field_test_text' => t('test')
    );
    
    $this->machineName = 'CuTest';
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
    $query->condition('n.type', 'test', '=');
    $query->fields('n', array('nid', 'title', 'uid', 'status', 'created', 'changed', 'promote'));
    $query->join('field_data_body', 'b', 'n.nid=b.entity_id');
    $query->fields('b', array('body_value'));
    $query->join('field_data_field_test_text', 'f', 'n.nid=f.entity_id');
    $query->fields('f', array('field_test_text_value'));

    //$this->source = new MigrateSourceSQL($query, $source_fields);
    $this->source = new MigrateSourceSQL($query, array());
    $this->destination = new MigrateDestinationNode('test');

    
    // Make the mappings
    $this->addFieldMapping('title', 'title');
    $this->addFieldMapping('uid', 'uid');
    $this->addFieldMapping('status', 'status');
    $this->addFieldMapping('created', 'created');
    $this->addFieldMapping('changed', 'changed');
    $this->addFieldMapping('promote', 'promote');
    $this->addFieldMapping('language')->defaultValue('und');
    
    //$body_arguments = MigrateTextFieldHandler::arguments(NULL, filter_default_format());
    $this->addFieldMapping('body', 'body_value');
    $this->addFieldMapping('field_test_text', 'field_test_text_value');
    db_set_active();
  }
  
  public function prepareRow($current_row) {
    $current_row->uid = '1';
    return TRUE;
  }
}
