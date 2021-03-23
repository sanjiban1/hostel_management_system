<?php
$tdatahostels = array();
$tdatahostels[".searchableFields"] = array();
$tdatahostels[".ShortName"] = "hostels";
$tdatahostels[".OwnerID"] = "";
$tdatahostels[".OriginalTable"] = "hostels";


$tdatahostels[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahostels[".originalPagesByType"] = $tdatahostels[".pagesByType"];
$tdatahostels[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahostels[".originalPages"] = $tdatahostels[".pages"];
$tdatahostels[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahostels[".originalDefaultPages"] = $tdatahostels[".defaultPages"];

//	field labels
$fieldLabelshostels = array();
$fieldToolTipshostels = array();
$pageTitleshostels = array();
$placeHoldershostels = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshostels["English"] = array();
	$fieldToolTipshostels["English"] = array();
	$placeHoldershostels["English"] = array();
	$pageTitleshostels["English"] = array();
	$fieldLabelshostels["English"]["id"] = "Id";
	$fieldToolTipshostels["English"]["id"] = "";
	$placeHoldershostels["English"]["id"] = "";
	$fieldLabelshostels["English"]["warden_name"] = "Warden Name";
	$fieldToolTipshostels["English"]["warden_name"] = "";
	$placeHoldershostels["English"]["warden_name"] = "";
	$fieldLabelshostels["English"]["students"] = "Students";
	$fieldToolTipshostels["English"]["students"] = "";
	$placeHoldershostels["English"]["students"] = "";
	$fieldLabelshostels["English"]["hostel_name"] = "Hostel Name";
	$fieldToolTipshostels["English"]["hostel_name"] = "";
	$placeHoldershostels["English"]["hostel_name"] = "";
	$fieldLabelshostels["English"]["hostel_type"] = "Hostel Type";
	$fieldToolTipshostels["English"]["hostel_type"] = "";
	$placeHoldershostels["English"]["hostel_type"] = "";
	if (count($fieldToolTipshostels["English"]))
		$tdatahostels[".isUseToolTips"] = true;
}


	$tdatahostels[".NCSearch"] = true;



$tdatahostels[".shortTableName"] = "hostels";
$tdatahostels[".nSecOptions"] = 0;

$tdatahostels[".mainTableOwnerID"] = "";
$tdatahostels[".entityType"] = 0;
$tdatahostels[".connId"] = "hrmanage_at_localhost";


$tdatahostels[".strOriginalTableName"] = "hostels";

	



$tdatahostels[".showAddInPopup"] = false;

$tdatahostels[".showEditInPopup"] = false;

$tdatahostels[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahostels[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahostels[".listAjax"] = false;
//	temporary
$tdatahostels[".listAjax"] = false;

	$tdatahostels[".audit"] = false;

	$tdatahostels[".locking"] = false;


$pages = $tdatahostels[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahostels[".edit"] = true;
	$tdatahostels[".afterEditAction"] = 1;
	$tdatahostels[".closePopupAfterEdit"] = 1;
	$tdatahostels[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahostels[".add"] = true;
$tdatahostels[".afterAddAction"] = 1;
$tdatahostels[".closePopupAfterAdd"] = 1;
$tdatahostels[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahostels[".list"] = true;
}



$tdatahostels[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahostels[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahostels[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahostels[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahostels[".printFriendly"] = true;
}



$tdatahostels[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahostels[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahostels[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahostels[".isUseAjaxSuggest"] = true;

$tdatahostels[".rowHighlite"] = true;





$tdatahostels[".ajaxCodeSnippetAdded"] = false;

$tdatahostels[".buttonsAdded"] = false;

$tdatahostels[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahostels[".isUseTimeForSearch"] = false;


$tdatahostels[".badgeColor"] = "9acd32";


$tdatahostels[".allSearchFields"] = array();
$tdatahostels[".filterFields"] = array();
$tdatahostels[".requiredSearchFields"] = array();

$tdatahostels[".googleLikeFields"] = array();
$tdatahostels[".googleLikeFields"][] = "id";
$tdatahostels[".googleLikeFields"][] = "warden_name";
$tdatahostels[".googleLikeFields"][] = "students";
$tdatahostels[".googleLikeFields"][] = "hostel_name";
$tdatahostels[".googleLikeFields"][] = "hostel_type";



$tdatahostels[".tableType"] = "list";

$tdatahostels[".printerPageOrientation"] = 0;
$tdatahostels[".nPrinterPageScale"] = 100;

$tdatahostels[".nPrinterSplitRecords"] = 40;

$tdatahostels[".geocodingEnabled"] = false;










$tdatahostels[".pageSize"] = 20;

$tdatahostels[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahostels[".strOrderBy"] = $tstrOrderBy;

$tdatahostels[".orderindexes"] = array();


$tdatahostels[".sqlHead"] = "SELECT id,  	warden_name,  	students,  	hostel_name,  	hostel_type";
$tdatahostels[".sqlFrom"] = "FROM hostels";
$tdatahostels[".sqlWhereExpr"] = "";
$tdatahostels[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahostels[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahostels[".arrGroupsPerPage"] = $arrGPP;

$tdatahostels[".highlightSearchResults"] = true;

$tableKeyshostels = array();
$tableKeyshostels[] = "id";
$tdatahostels[".Keys"] = $tableKeyshostels;


$tdatahostels[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hostels";
	$fdata["Label"] = GetFieldLabel("hostels","id");
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


	$tdatahostels["id"] = $fdata;
		$tdatahostels[".searchableFields"][] = "id";
//	warden_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "warden_name";
	$fdata["GoodName"] = "warden_name";
	$fdata["ownerTable"] = "hostels";
	$fdata["Label"] = GetFieldLabel("hostels","warden_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "warden_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "warden_name";

	
	
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


	$tdatahostels["warden_name"] = $fdata;
		$tdatahostels[".searchableFields"][] = "warden_name";
//	students
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "students";
	$fdata["GoodName"] = "students";
	$fdata["ownerTable"] = "hostels";
	$fdata["Label"] = GetFieldLabel("hostels","students");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "students";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "students";

	
	
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


	$tdatahostels["students"] = $fdata;
		$tdatahostels[".searchableFields"][] = "students";
//	hostel_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hostel_name";
	$fdata["GoodName"] = "hostel_name";
	$fdata["ownerTable"] = "hostels";
	$fdata["Label"] = GetFieldLabel("hostels","hostel_name");
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "godawari";
	$edata["LookupValues"][] = "sindhu";
	$edata["LookupValues"][] = "madhabi";
	$edata["LookupValues"][] = "nila";

	
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


	$tdatahostels["hostel_name"] = $fdata;
		$tdatahostels[".searchableFields"][] = "hostel_name";
//	hostel_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hostel_type";
	$fdata["GoodName"] = "hostel_type";
	$fdata["ownerTable"] = "hostels";
	$fdata["Label"] = GetFieldLabel("hostels","hostel_type");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "8";

	
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


	$tdatahostels["hostel_type"] = $fdata;
		$tdatahostels[".searchableFields"][] = "hostel_type";


$tables_data["hostels"]=&$tdatahostels;
$field_labels["hostels"] = &$fieldLabelshostels;
$fieldToolTips["hostels"] = &$fieldToolTipshostels;
$placeHolders["hostels"] = &$placeHoldershostels;
$page_titles["hostels"] = &$pageTitleshostels;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostels"] = array();
//	studentlist
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="studentlist";
		$detailsParam["dOriginalTable"] = "studentlist";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "studentlist";
	$detailsParam["dCaptionTable"] = GetTableCaption("studentlist");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostels"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostels"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostels"][$dIndex]["masterKeys"][]="hostel_name";

				$detailsTablesData["hostels"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostels"][$dIndex]["detailKeys"][]="hostel name";
//	warden
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="warden";
		$detailsParam["dOriginalTable"] = "warden";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "warden";
	$detailsParam["dCaptionTable"] = GetTableCaption("warden");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostels"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostels"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostels"][$dIndex]["masterKeys"][]="hostel_name";

	$detailsTablesData["hostels"][$dIndex]["masterKeys"][]="hostel_type";

				$detailsTablesData["hostels"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostels"][$dIndex]["detailKeys"][]="hostel_name";

		
	$detailsTablesData["hostels"][$dIndex]["detailKeys"][]="hostel_type";

// tables which are master tables for current table (detail)
$masterTablesData["hostels"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hostels()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	warden_name,  	students,  	hostel_name,  	hostel_type";
$proto0["m_strFrom"] = "FROM hostels";
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
	"m_strTable" => "hostels",
	"m_srcTableName" => "hostels"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hostels";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "warden_name",
	"m_strTable" => "hostels",
	"m_srcTableName" => "hostels"
));

$proto8["m_sql"] = "warden_name";
$proto8["m_srcTableName"] = "hostels";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "students",
	"m_strTable" => "hostels",
	"m_srcTableName" => "hostels"
));

$proto10["m_sql"] = "students";
$proto10["m_srcTableName"] = "hostels";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_name",
	"m_strTable" => "hostels",
	"m_srcTableName" => "hostels"
));

$proto12["m_sql"] = "hostel_name";
$proto12["m_srcTableName"] = "hostels";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_type",
	"m_strTable" => "hostels",
	"m_srcTableName" => "hostels"
));

$proto14["m_sql"] = "hostel_type";
$proto14["m_srcTableName"] = "hostels";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "hostels";
$proto17["m_srcTableName"] = "hostels";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "warden_name";
$proto17["m_columns"][] = "students";
$proto17["m_columns"][] = "hostel_name";
$proto17["m_columns"][] = "hostel_type";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "hostels";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "hostels";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hostels";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hostels = createSqlQuery_hostels();


	
		;

					

$tdatahostels[".sqlquery"] = $queryData_hostels;



$tableEvents["hostels"] = new eventsBase;
$tdatahostels[".hasEvents"] = false;

?>