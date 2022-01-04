<?php
$popupMeta = array (
    'moduleMain' => 're_objects',
    'varName' => 're_objects',
    'orderBy' => 're_objects.name',
    'whereClauses' => array (
  'name' => 're_objects.name',
  're_objects_contacts_1_name' => 're_objects.re_objects_contacts_1_name',
  'objecttype' => 're_objects.objecttype',
  'objectsubtype' => 're_objects.objectsubtype',
  'price' => 're_objects.price',
  'assigned_user_id' => 're_objects.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 're_objects_contacts_1_name',
  5 => 'objecttype',
  6 => 'objectsubtype',
  7 => 'price',
  8 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  're_objects_contacts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RE_OBJECTS_CONTACTS_1_FROM_CONTACTS_TITLE',
    'id' => 'RE_OBJECTS_CONTACTS_1CONTACTS_IDA',
    'width' => '10%',
    'name' => 're_objects_contacts_1_name',
  ),
  'objecttype' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_OBJECTTYPE',
    'width' => '10%',
    'name' => 'objecttype',
  ),
  'objectsubtype' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_OBJECTSUBTYPE',
    'width' => '10%',
    'name' => 'objectsubtype',
  ),
  'price' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'price',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'OBJECTTYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_OBJECTTYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'objecttype',
  ),
  'VERMITTLUNGSART' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VERMITTLUNGSART',
    'width' => '10%',
    'default' => true,
    'name' => 'vermittlungsart',
  ),
  'RE_OBJECTS_CONTACTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RE_OBJECTS_CONTACTS_1_FROM_CONTACTS_TITLE',
    'id' => 'RE_OBJECTS_CONTACTS_1CONTACTS_IDA',
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
    'name' => 'price',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
