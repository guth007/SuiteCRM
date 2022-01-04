<?php
$module_name='re_publications';
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
      'popup_module' => 're_publications',
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
    'target' =>
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TARGET',
      'width' => '10%',
      'default' => true,
    ),
    'targetid' =>
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TARGETID',
      'width' => '10%',
      'default' => true,
    ),
    'lastpushed' =>
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_LASTPUSHED',
      'width' => '10%',
      'default' => true,
    ),
    'lastmessage' =>
    array (
      'type' => 'text',
      'vname' => 'LBL_LASTMESSAGE',
      'width' => '20%',
      'default' => true,
    ),
    'push_button' =>
    array (
      'vname' => 'LBL_PUSH',
      'widget_class' => 'SubPanelPushButton',
      'module' => 're_publications',
      'width' => '4%',
      'default' => true,
    ),
  ),
);
