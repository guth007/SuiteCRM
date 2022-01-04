<?php
$module_name='re_prospective_tenant';
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
      'popup_module' => 're_prospective_tenant',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopMassUpdateButton',
      'module' => 're_prospective_tenant',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'type' => 'name',
      'link' => true,
      'width' => '45%',
      'vname' => 'LBL_NAME',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => NULL,
      'target_record_key' => NULL,
    ),
    'checkbox' => 
    array (
      'name' => 'checkbox',
      'widget_class' => 'SubPanelCustomCheckBox',
      'checkbox_value' => 'true',
      'width' => '10%',
      'default' => true,
    ),
    'grade' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_GRADE',
      'width' => '10%',
      'default' => true,
    ),
    'state' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_STATE',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 're_prospective_tenant',
      'width' => '4%',
      'default' => true,
    ),
    'propability' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_PROPABILITY',
      'width' => '10%',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '12%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 're_prospective_tenant',
      'width' => '5%',
      'default' => true,
    ),
  ),
);