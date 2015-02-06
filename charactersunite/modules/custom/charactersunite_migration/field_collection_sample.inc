<?php
class WvStatementMigration extends DrupalMigration {
  public function __construct($arguments) {
    parent::__construct($arguments);

    $this->source = new MigrateSourceSQL($this->query(), array(), NULL,
      $this->sourceOptions);
    $this->destination = new MigrateDestinationFieldCollection('field_statements',
      array('host_entity_type' => 'node'));
    $this->map = new MigrateSQLMap($this->machineName,
      array(
        'field_statements_value' => array(
          'type' => 'int',
          'not null' => TRUE,
          'description' => 'Unique ID for each statement',
        )
      ),
      MigrateDestinationFieldCollection::getKeySchema()
    );

    $this->addFieldMapping('host_entity_id', 'entity_id')
         ->sourceMigration('Accomplishment');
    $this->addFieldMapping('field_progress_category', 'field_progress_category_tid')
         ->sourceMigration('Progress');
    $this->addFieldMapping('field_progress_category:source_type')
         ->defaultValue('tid');
    $this->addFieldMapping('field_impact_sector', 'field_impact_sector_tid')
         ->sourceMigration('ImpactSector');
    $this->addFieldMapping('field_impact_sector:source_type')
         ->defaultValue('tid');
    $this->addFieldMapping('field_statement', 'field_statement_value');
    $this->addFieldMapping('field_project', 'projects')
         ->separator(',');

    $this->addUnmigratedDestinations(array(
        'field_impact_sector:create_term', 'field_impact_sector:ignore_case',
        'field_progress_category:create_term', 'field_progress_category:ignore_case',
        'field_statement:language',
    ));
  }

  protected function query() {
    // Base table for the collections - for each entity, order by delta so we
    // create the statements in the right order.
    $query = Database::getConnection('default', $this->sourceConnection)
             ->select('field_data_field_statements', 'fs')
             ->fields('fs', array('entity_id', 'field_statements_value'))
             ->orderBy('fs.entity_id')
             ->orderBy('fs.delta');

    $query->leftJoin('field_data_field_progress_category', 'fpc',
      'fs.field_statements_value = fpc.entity_id');
    $query->addField('fpc', 'field_progress_category_tid');

    $query->leftJoin('field_data_field_impact_sector', 'fis',
      'fs.field_statements_value = fis.entity_id');
    $query->addField('fis', 'field_impact_sector_tid');

    $query->leftJoin('field_data_field_statement', 'fs2',
      'fs.field_statements_value = fs2.entity_id');
    $query->addField('fs2', 'field_statement_value');

    // There can be multiple projects per statement - gather them into a
    // comma-separated list.
    $query->leftJoin('field_data_field_project', 'fp',
      'fs.field_statements_value = fp.entity_id');
    $query->addField('fp', 'field_project_value');
    $query->groupBy('fs.field_statements_value');
    $query->addExpression('GROUP_CONCAT(field_project_value)', 'projects');

    return $query;
  }
}
?>