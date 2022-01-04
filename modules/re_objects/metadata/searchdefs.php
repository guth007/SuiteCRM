<?php
$module_name = 're_objects';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      're_objects_contacts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_RE_OBJECTS_CONTACTS_1_FROM_CONTACTS_TITLE',
        'id' => 'RE_OBJECTS_CONTACTS_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 're_objects_contacts_1_name',
      ),
      'vermittlungsart' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_VERMITTLUNGSART',
        'width' => '10%',
        'default' => true,
        'name' => 'vermittlungsart',
      ),
      'objecttype' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_OBJECTTYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'objecttype',
      ),
      'objectsubtype' => 
      array (
        'type' => 'dynamicenum',
        'studio' => 'visible',
        'label' => 'LBL_OBJECTSUBTYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'objectsubtype',
      ),
      'price' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'price',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
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
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
