<?php
$dashletData['re_objectsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
  're_objects_contacts_1_name' => 
  array (
    'default' => '',
  ),
  'objecttype' => 
  array (
    'default' => '',
  ),
  'objectsubtype' => 
  array (
    'default' => '',
  ),
);
$dashletData['re_objectsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  're_objects_contacts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RE_OBJECTS_CONTACTS_1_FROM_CONTACTS_TITLE',
    'id' => 'RE_OBJECTS_CONTACTS_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'price' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'objecttype' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_OBJECTTYPE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
