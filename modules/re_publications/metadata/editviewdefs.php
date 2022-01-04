<?php
$module_name = 're_publications';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          0 => 'description',
          1 => 
          array (
            'name' => 're_publications_re_objects_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'target',
            'studio' => 'visible',
            'label' => 'LBL_TARGET',
          ),
          1 => 
          array (
            'name' => 'state',
            'studio' => 'visible',
            'label' => 'LBL_STATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'targetid',
            'label' => 'LBL_TARGETID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'lastpushed',
            'label' => 'LBL_LASTPUSHED',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'lastmessage',
            'studio' => 'visible',
            'label' => 'LBL_LASTMESSAGE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
