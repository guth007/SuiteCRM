<?php
$module_name = 're_objects';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'OBJECTTYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_OBJECTTYPE',
    'width' => '10%',
    'default' => true,
  ),
  'VERMITTLUNGSART' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VERMITTLUNGSART',
    'width' => '10%',
    'default' => true,
  ),
  'PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
