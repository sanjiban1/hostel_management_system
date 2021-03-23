<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'fields' => array( 'gridFields' => array( 'first_name',
'last_name',
'email',
'mob',
'hostel_type',
'hostel name' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'first_name' => array( 'report_grid_field1' ),
'last_name' => array( 'report_grid_field2' ),
'email' => array( 'report_grid_field3' ),
'mob' => array( 'report_grid_field4' ),
'hostel_type' => array( 'report_grid_field7' ),
'hostel name' => array( 'report_grid_field8' ),
'id' => array( 'report_group_field' ),
'sem' => array( 'report_group_field1' ),
'usn' => array( 'report_group_field2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'print_pdf' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field7',
'report_grid_field8' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pdf' => 'top',
'print_pages' => 'above-grid',
'report_group_field' => 'grid',
'report_group_field1' => 'grid',
'report_group_field2' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field2' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field4' => 'grid',
'report_grid_field7' => 'grid',
'report_grid_field8' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'report_grid_field' => array( 'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field7',
'report_grid_field8' ),
'report_group_field' => array( 'report_group_field',
'report_group_field1',
'report_group_field2' ),
'print_pdf' => array( 'print_pdf' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'rprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'rprint',
'type' => 'rprint',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'report_group_field',
'report_group_field1',
'report_group_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field7',
'report_grid_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'report_grid_field1' => array( 'field' => 'first_name',
'type' => 'report_grid_field' ),
'report_grid_field2' => array( 'field' => 'last_name',
'type' => 'report_grid_field' ),
'report_grid_field3' => array( 'field' => 'email',
'type' => 'report_grid_field' ),
'report_grid_field4' => array( 'field' => 'mob',
'type' => 'report_grid_field' ),
'report_grid_field7' => array( 'field' => 'hostel_type',
'type' => 'report_grid_field' ),
'report_grid_field8' => array( 'field' => 'hostel name',
'type' => 'report_grid_field' ),
'report_group_field' => array( 'field' => 'id',
'type' => 'report_group_field' ),
'report_group_field1' => array( 'field' => 'sem',
'type' => 'report_group_field' ),
'report_group_field2' => array( 'field' => 'usn',
'type' => 'report_group_field' ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>