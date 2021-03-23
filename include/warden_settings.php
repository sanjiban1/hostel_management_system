<?php
$tdatawarden = array();
$tdatawarden[".searchableFields"] = array();
$tdatawarden[".ShortName"] = "warden";
$tdatawarden[".OwnerID"] = "";
$tdatawarden[".OriginalTable"] = "warden";


$tdatawarden[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawarden[".originalPagesByType"] = $tdatawarden[".pagesByType"];
$tdatawarden[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawarden[".originalPages"] = $tdatawarden[".pages"];
$tdatawarden[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawarden[".originalDefaultPages"] = $tdatawarden[".defaultPages"];

//	field labels
$fieldLabelswarden = array();
$fieldToolTipswarden = array();
$pageTitleswarden = array();
$placeHolderswarden = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswarden["English"] = array();
	$fieldToolTipswarden["English"] = array();
	$placeHolderswarden["English"] = array();
	$pageTitleswarden["English"] = array();
	$fieldLabelswarden["English"]["id"] = "Id";
	$fieldToolTipswarden["English"]["id"] = "";
	$placeHolderswarden["English"]["id"] = "";
	$fieldLabelswarden["English"]["name"] = "Name";
	$fieldToolTipswarden["English"]["name"] = "";
	$placeHolderswarden["English"]["name"] = "";
	$fieldLabelswarden["English"]["email"] = "Email";
	$fieldToolTipswarden["English"]["email"] = "";
	$placeHolderswarden["English"]["email"] = "";
	$fieldLabelswarden["English"]["mob"] = "Mob";
	$fieldToolTipswarden["English"]["mob"] = "";
	$placeHolderswarden["English"]["mob"] = "";
	$fieldLabelswarden["English"]["hostel_name"] = "Hostel Name";
	$fieldToolTipswarden["English"]["hostel_name"] = "";
	$placeHolderswarden["English"]["hostel_name"] = "";
	$fieldLabelswarden["English"]["hostel_type"] = "Hostel Type";
	$fieldToolTipswarden["English"]["hostel_type"] = "";
	$placeHolderswarden["English"]["hostel_type"] = "";
	if (count($fieldToolTipswarden["English"]))
		$tdatawarden[".isUseToolTips"] = true;
}


	$tdatawarden[".NCSearch"] = true;



$tdatawarden[".shortTableName"] = "warden";
$tdatawarden[".nSecOptions"] = 0;

$tdatawarden[".mainTableOwnerID"] = "";
$tdatawarden[".entityType"] = 0;
$tdatawarden[".connId"] = "hrmanage_at_localhost";


$tdatawarden[".strOriginalTableName"] = "warden";

	



$tdatawarden[".showAddInPopup"] = false;

$tdatawarden[".showEditInPopup"] = false;

$tdatawarden[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawarden[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawarden[".listAjax"] = false;
//	temporary
$tdatawarden[".listAjax"] = false;

	$tdatawarden[".audit"] = false;

	$tdatawarden[".locking"] = false;


$pages = $tdatawarden[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawarden[".edit"] = true;
	$tdatawarden[".afterEditAction"] = 1;
	$tdatawarden[".closePopupAfterEdit"] = 1;
	$tdatawarden[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawarden[".add"] = true;
$tdatawarden[".afterAddAction"] = 1;
$tdatawarden[".closePopupAfterAdd"] = 1;
$tdatawarden[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawarden[".list"] = true;
}



$tdatawarden[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawarden[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawarden[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawarden[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawarden[".printFriendly"] = true;
}



$tdatawarden[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawarden[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawarden[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawarden[".isUseAjaxSuggest"] = true;

$tdatawarden[".rowHighlite"] = true;





$tdatawarden[".ajaxCodeSnippetAdded"] = false;

$tdatawarden[".buttonsAdded"] = false;

$tdatawarden[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawarden[".isUseTimeForSearch"] = false;


$tdatawarden[".badgeColor"] = "e8926f";


$tdatawarden[".allSearchFields"] = array();
$tdatawarden[".filterFields"] = array();
$tdatawarden[".requiredSearchFields"] = array();

$tdatawarden[".googleLikeFields"] = array();
$tdatawarden[".googleLikeFields"][] = "id";
$tdatawarden[".googleLikeFields"][] = "name";
$tdatawarden[".googleLikeFields"][] = "email";
$tdatawarden[".googleLikeFields"][] = "mob";
$tdatawarden[".googleLikeFields"][] = "hostel_name";
$tdatawarden[".googleLikeFields"][] = "hostel_type";



$tdatawarden[".tableType"] = "list";

$tdatawarden[".printerPageOrientation"] = 0;
$tdatawarden[".nPrinterPageScale"] = 100;

$tdatawarden[".nPrinterSplitRecords"] = 40;

$tdatawarden[".geocodingEnabled"] = false;










$tdatawarden[".pageSize"] = 20;

$tdatawarden[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawarden[".strOrderBy"] = $tstrOrderBy;

$tdatawarden[".orderindexes"] = array();


$tdatawarden[".sqlHead"] = "SELECT id,  	name,  	email,  	mob,  	hostel_name,  	hostel_type";
$tdatawarden[".sqlFrom"] = "FROM warden";
$tdatawarden[".sqlWhereExpr"] = "";
$tdatawarden[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawarden[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawarden[".arrGroupsPerPage"] = $arrGPP;

$tdatawarden[".highlightSearchResults"] = true;

$tableKeyswarden = array();
$tableKeyswarden[] = "id";
$tdatawarden[".Keys"] = $tableKeyswarden;


$tdatawarden[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "warden";
	$fdata["Label"] = GetFieldLabel("warden","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatawarden["id"] = $fdata;
		$tdatawarden[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "warden";
	$fdata["Label"] = GetFieldLabel("warden","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatawarden["name"] = $fdata;
		$tdatawarden[".searchableFields"][] = "name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "warden";
	$fdata["Label"] = GetFieldLabel("warden","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatawarden["email"] = $fdata;
		$tdatawarden[".searchableFields"][] = "email";
//	mob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mob";
	$fdata["GoodName"] = "mob";
	$fdata["ownerTable"] = "warden";
	$fdata["Label"] = GetFieldLabel("warden","mob");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "mob";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mob";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatawarden["mob"] = $fdata;
		$tdatawarden[".searchableFields"][] = "mob";
//	hostel_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hostel_name";
	$fdata["GoodName"] = "hostel_name";
	$fdata["ownerTable"] = "warden";
	$fdata["Label"] = GetFieldLabel("warden","hostel_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hostel_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostel_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hostels";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"hostel_type", 'lookupF'=>"hostel_type");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "hostel_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "hostel_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatawarden["hostel_name"] = $fdata;
		$tdatawarden[".searchableFields"][] = "hostel_name";
//	hostel_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "hostel_type";
	$fdata["GoodName"] = "hostel_type";
	$fdata["ownerTable"] = "warden";
	$fdata["Label"] = GetFieldLabel("warden","hostel_type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "hostel_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostel_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatawarden["hostel_type"] = $fdata;
		$tdatawarden[".searchableFields"][] = "hostel_type";


$tables_data["warden"]=&$tdatawarden;
$field_labels["warden"] = &$fieldLabelswarden;
$fieldToolTips["warden"] = &$fieldToolTipswarden;
$placeHolders["warden"] = &$placeHolderswarden;
$page_titles["warden"] = &$pageTitleswarden;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["warden"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["warden"] = array();



	
				$strOriginalDetailsTable="hostels";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostels";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hostels";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["warden"][0] = $masterParams;
				$masterTablesData["warden"][0]["masterKeys"] = array();
	$masterTablesData["warden"][0]["masterKeys"][]="hostel_name";
				$masterTablesData["warden"][0]["masterKeys"][]="hostel_type";
				$masterTablesData["warden"][0]["detailKeys"] = array();
	$masterTablesData["warden"][0]["detailKeys"][]="hostel_name";
				$masterTablesData["warden"][0]["detailKeys"][]="hostel_type";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_warden()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	email,  	mob,  	hostel_name,  	hostel_type";
$proto0["m_strFrom"] = "FROM warden";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "warden",
	"m_srcTableName" => "warden"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "warden";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "warden",
	"m_srcTableName" => "warden"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "warden";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "warden",
	"m_srcTableName" => "warden"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "warden";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mob",
	"m_strTable" => "warden",
	"m_srcTableName" => "warden"
));

$proto12["m_sql"] = "mob";
$proto12["m_srcTableName"] = "warden";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_name",
	"m_strTable" => "warden",
	"m_srcTableName" => "warden"
));

$proto14["m_sql"] = "hostel_name";
$proto14["m_srcTableName"] = "warden";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_type",
	"m_strTable" => "warden",
	"m_srcTableName" => "warden"
));

$proto16["m_sql"] = "hostel_type";
$proto16["m_srcTableName"] = "warden";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "warden";
$proto19["m_srcTableName"] = "warden";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "mob";
$proto19["m_columns"][] = "hostel_name";
$proto19["m_columns"][] = "hostel_type";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "warden";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "warden";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="warden";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_warden = createSqlQuery_warden();


	
		;

						

$tdatawarden[".sqlquery"] = $queryData_warden;



$tableEvents["warden"] = new eventsBase;
$tdatawarden[".hasEvents"] = false;

?>