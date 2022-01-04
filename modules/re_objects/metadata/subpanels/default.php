<?php
$module_name='re_objects';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 're_objects',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'objecttype' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_OBJECTTYPE',
      'width' => '10%',
      'default' => true,
    ),
    'adresse' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADRESSE',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'vermittlungsart' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_VERMITTLUNGSART',
      'width' => '10%',
      'default' => true,
    ),
    'price' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_PRICE',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 're_objects',
      'width' => '4%',
      'default' => true,
    ),
  ),
);