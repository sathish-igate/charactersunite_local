<?php
class CuHomePageIterationsMigration extends Migration {
  public function __construct($arguments = array()) {
    
    parent::__construct($arguments);
    
    $this->description = t('Migrate Home Page Iterations');
    $this->dependencies = array('CuHomePage');

    $source_fields = array(
      'entity_id' => t('Entity ID'),
      'field_home_scroll_title' => t('Home Page Scroll Section Title'),
      'field_home_scroll_info' => t('Home Page Scroll Section Info'),
      'field_home_scroll_link' => t('Home Page Scroll Section Link'),
    );
    
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
    $query->addField('n', 'nid');
    $query->leftJoin('field_data_field_home_scroll_section', 'section', 'n.nid = section.entity_id');
    $query->addField('section', 'field_home_scroll_section_value');
    $query->leftJoin('field_data_field_home_scroll_title', 'scroll_title', 'section.field_home_scroll_section_value = scroll_title.entity_id');
    $query->addField('scroll_title', 'field_home_scroll_title_value');
    $query->leftJoin('field_data_field_home_scroll_info', 'scroll_info', 'section.field_home_scroll_section_value = scroll_info.entity_id');
    $query->addField('scroll_info', 'field_home_scroll_info_value');
    $query->leftJoin('field_data_field_home_scroll_link', 'scroll_link', 'section.field_home_scroll_section_value = scroll_link.entity_id');
    $query->addField('scroll_link', 'field_home_scroll_link_url');
    $query->addField('scroll_link', 'field_home_scroll_link_title');
    $query->addField('scroll_link', 'field_home_scroll_link_attributes');

    $this->source = new MigrateSourceSQL($query, array());
    $this->destination = new MigrateDestinationFieldCollection('field_home_scroll_section', array('host_entity_type' => 'node') );
    $this->machineName = 'CuHomePageIterations';
    $this->map = new MigrateSQLMap($this->machineName,
      array(
        'field_home_scroll_section_value' => array(
          'type' => 'int',
        )
      ),MigrateDestinationFieldCollection::getKeySchema());

    
    // Make the mappings
    $this->addFieldMapping('host_entity_id', 'nid')
      ->sourceMigration('CuHomePage')
      ->description(t('NID'));
    $this->addFieldMapping('field_home_scroll_title', 'field_home_scroll_title_value');
    $this->addFieldMapping('field_home_scroll_info', 'field_home_scroll_info_value');
    $this->addFieldMapping('field_home_scroll_link', 'field_home_scroll_link_url');
    $this->addFieldMapping('field_home_scroll_link:title', 'field_home_scroll_link_title');
    $this->addFieldMapping('field_home_scroll_link:attributes', 'field_home_scroll_link_attributes');
    db_set_active();
  }
  
  public function prepareRow($current_row) {
    //$current_row->uid = '1';
    return TRUE;
  }
}
