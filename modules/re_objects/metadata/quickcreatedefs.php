<?php
$module_name = 're_objects';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'owner_f',
            'studio' => 'visible',
            'label' => 'LBL_OWNER_F',
          ),
          1 => 
          array (
            'name' => 'price',
            'label' => 'LBL_PRICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'objecttype',
            'studio' => 'visible',
            'label' => 'LBL_OBJECTTYPE',
          ),
          1 => 
          array (
            'name' => 'objectsubtype',
            'studio' => 'visible',
            'label' => 'LBL_OBJECTSUBTYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'vermittlungsart',
            'studio' => 'visible',
            'label' => 'LBL_VERMITTLUNGSART',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
