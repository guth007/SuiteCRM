<?php
$module_name = 're_objects';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');"
value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
          ),
          6 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'email\');return false;" value="{$MOD.LBL_EMAIL_QUOTE}">',
          ),
        ),
      ),
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
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
            'name' => 'objekttitel',
            'label' => 'LBL_OBJEKTTITEL',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description_furnishing',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION_FURNISHING',
          ),
          1 => 
          array (
            'name' => 'description_location',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION_LOCATION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'vermittlungsart',
            'studio' => 'visible',
            'label' => 'LBL_VERMITTLUNGSART',
          ),
          1 => 
          array (
            'name' => 'show_address',
            'studio' => 'visible',
            'label' => 'LBL_SHOW_ADDRESS',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 're_objects_contacts_1_name',
            'label' => 'LBL_RE_OBJECTS_CONTACTS_1_FROM_CONTACTS_TITLE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rent_cold',
            'label' => 'LBL_RENT_COLD',
          ),
          1 => 
          array (
            'name' => 'rent_warm',
            'label' => 'LBL_RENT_WARM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rent_other_costs',
            'label' => 'LBL_RENT_OTHER_COSTS',
          ),
          1 => 
          array (
            'name' => 'rent_cold_sq',
            'label' => 'LBL_RENT_COLD_SQ',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'provision',
            'studio' => 'visible',
            'label' => 'LBL_PROVISION',
          ),
          1 => 
          array (
            'name' => 'provision_note',
            'label' => 'LBL_PROVISION_NOTE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'studio' => 'visible',
            'label' => 'LBL_STATE',
          ),
          1 => 
          array (
            'name' => 'available_from',
            'label' => 'LBL_AVAILABLE_FROM',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'adresse',
            'label' => 'LBL_ADRESSE',
          ),
          1 => 
          array (
            'name' => 'adresse_street_number',
            'label' => 'LBL_ADRESSE_STREET_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'adresse_postalcode',
            'label' => 'LBL_ADRESSE_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'adresse_city',
            'label' => 'LBL_ADRESSE_CITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'adresse_country',
            'label' => 'LBL_ADRESSE_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'adresse_state',
            'label' => 'LBL_ADRESSE_STATE',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'firing',
            'studio' => 'visible',
            'label' => 'LBL_FIRING',
          ),
          1 => 
          array (
            'name' => 'heating',
            'studio' => 'visible',
            'label' => 'LBL_HEATING',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'basement',
            'studio' => 'visible',
            'label' => 'LBL_BASEMENT',
          ),
          1 => 
          array (
            'name' => 'floor',
            'label' => 'LBL_FLOOR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'floor_space',
            'label' => 'LBL_FLOOR_SPACE',
          ),
          1 => 
          array (
            'name' => 'rooms',
            'label' => 'LBL_ROOMS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'properties',
            'studio' => 'visible',
            'label' => 'LBL_PROPERTIES',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'unit_condition',
            'studio' => 'visible',
            'label' => 'LBL_UNIT_CONDITION',
          ),
          1 => 
          array (
            'name' => 'construction_year',
            'label' => 'LBL_CONSTRUCTION_YEAR',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => '',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is24_id',
            'label' => 'LBL_IS24_ID',
          ),
          1 => 
          array (
            'name' => 'is_24_updated',
            'label' => 'LBL_IS_24_UPDATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'is24_state',
            'studio' => 'visible',
            'label' => 'LBL_IS24_STATE',
          ),
          1 => 
          array (
            'name' => 'is_24_message',
            'label' => 'LBL_IS_24_MESSAGE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
