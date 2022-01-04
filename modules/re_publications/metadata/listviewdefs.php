<?php
$module_name = 're_publications';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TARGET' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TARGET',
    'width' => '10%',
    'default' => true,
  ),
  'TARGETID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TARGETID',
    'width' => '10%',
    'default' => true,
  ),
  'LASTPUSHED' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LASTPUSHED',
    'width' => '10%',
    'default' => true,
  ),
  'LASTMESSAGE' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_LASTMESSAGE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
