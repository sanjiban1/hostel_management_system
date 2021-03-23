<?php
$tdatastudentlist_report = array();
$tdatastudentlist_report[".searchableFields"] = array();
$tdatastudentlist_report[".ShortName"] = "studentlist_report";
$tdatastudentlist_report[".OwnerID"] = "";
$tdatastudentlist_report[".OriginalTable"] = "studentlist";


$tdatastudentlist_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatastudentlist_report[".originalPagesByType"] = $tdatastudentlist_report[".pagesByType"];
$tdatastudentlist_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatastudentlist_report[".originalPages"] = $tdatastudentlist_report[".pages"];
$tdatastudentlist_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatastudentlist_report[".originalDefaultPages"] = $tdatastudentlist_report[".defaultPages"];

//	field labels
$fieldLabelsstudentlist_report = array();
$fieldToolTipsstudentlist_report = array();
$pageTitlesstudentlist_report = array();
$placeHoldersstudentlist_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudentlist_report["English"] = array();
	$fieldToolTipsstudentlist_report["English"] = array();
	$placeHoldersstudentlist_report["English"] = array();
	$pageTitlesstudentlist_report["English"] = array();
	$fieldLabelsstudentlist_report["English"]["id"] = "Id";
	$fieldToolTipsstudentlist_report["English"]["id"] = "";
	$placeHoldersstudentlist_report["English"]["id"] = "";
	$fieldLabelsstudentlist_report["English"]["first_name"] = "First Name";
	$fieldToolTipsstudentlist_report["English"]["first_name"] = "";
	$placeHoldersstudentlist_report["English"]["first_name"] = "";
	$fieldLabelsstudentlist_report["English"]["last_name"] = "Last Name";
	$fieldToolTipsstudentlist_report["English"]["last_name"] = "";
	$placeHoldersstudentlist_report["English"]["last_name"] = "";
	$fieldLabelsstudentlist_report["English"]["email"] = "Email";
	$fieldToolTipsstudentlist_report["English"]["email"] = "";
	$placeHoldersstudentlist_report["English"]["email"] = "";
	$fieldLabelsstudentlist_report["English"]["mob"] = "Mob";
	$fieldToolTipsstudentlist_report["English"]["mob"] = "";
	$placeHoldersstudentlist_report["English"]["mob"] = "";
	$fieldLabelsstudentlist_report["English"]["sem"] = "Sem";
	$fieldToolTipsstudentlist_report["English"]["sem"] = "";
	$placeHoldersstudentlist_report["English"]["sem"] = "";
	$fieldLabelsstudentlist_report["English"]["usn"] = "Usn";
	$fieldToolTipsstudentlist_report["English"]["usn"] = "";
	$placeHoldersstudentlist_report["English"]["usn"] = "";
	$fieldLabelsstudentlist_report["English"]["hostel_type"] = "Hostel Type";
	$fieldToolTipsstudentlist_report["English"]["hostel_type"] = "";
	$placeHoldersstudentlist_report["English"]["hostel_type"] = "";
	$fieldLabelsstudentlist_report["English"]["hostel_name"] = "Hostel Name";
	$fieldToolTipsstudentlist_report["English"]["hostel_name"] = "";
	$placeHoldersstudentlist_report["English"]["hostel_name"] = "";
	if (count($fieldToolTipsstudentlist_report["English"]))
		$tdatastudentlist_report[".isUseToolTips"] = true;
}


	$tdatastudentlist_report[".NCSearch"] = true;



$tdatastudentlist_report[".shortTableName"] = "studentlist_report";
$tdatastudentlist_report[".nSecOptions"] = 0;

$tdatastudentlist_report[".mainTableOwnerID"] = "";
$tdatastudentlist_report[".entityType"] = 2;
$tdatastudentlist_report[".connId"] = "hrmanage_at_localhost";


$tdatastudentlist_report[".strOriginalTableName"] = "studentlist";

	



$tdatastudentlist_report[".showAddInPopup"] = false;

$tdatastudentlist_report[".showEditInPopup"] = false;

$tdatastudentlist_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastudentlist_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastudentlist_report[".listAjax"] = false;
//	temporary
$tdatastudentlist_report[".listAjax"] = false;

	$tdatastudentlist_report[".audit"] = false;

	$tdatastudentlist_report[".locking"] = false;


$pages = $tdatastudentlist_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudentlist_report[".edit"] = true;
	$tdatastudentlist_report[".afterEditAction"] = 1;
	$tdatastudentlist_report[".closePopupAfterEdit"] = 1;
	$tdatastudentlist_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudentlist_report[".add"] = true;
$tdatastudentlist_report[".afterAddAction"] = 1;
$tdatastudentlist_report[".closePopupAfterAdd"] = 1;
$tdatastudentlist_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudentlist_report[".list"] = true;
}



$tdatastudentlist_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudentlist_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudentlist_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudentlist_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudentlist_report[".printFriendly"] = true;
}



$tdatastudentlist_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudentlist_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudentlist_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudentlist_report[".isUseAjaxSuggest"] = true;






$tdatastudentlist_report[".ajaxCodeSnippetAdded"] = false;

$tdatastudentlist_report[".buttonsAdded"] = false;

$tdatastudentlist_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudentlist_report[".isUseTimeForSearch"] = false;


$tdatastudentlist_report[".badgeColor"] = "008B8B";


$tdatastudentlist_report[".allSearchFields"] = array();
$tdatastudentlist_report[".filterFields"] = array();
$tdatastudentlist_report[".requiredSearchFields"] = array();

$tdatastudentlist_report[".googleLikeFields"] = array();
$tdatastudentlist_report[".googleLikeFields"][] = "id";
$tdatastudentlist_report[".googleLikeFields"][] = "first_name";
$tdatastudentlist_report[".googleLikeFields"][] = "last_name";
$tdatastudentlist_report[".googleLikeFields"][] = "email";
$tdatastudentlist_report[".googleLikeFields"][] = "mob";
$tdatastudentlist_report[".googleLikeFields"][] = "sem";
$tdatastudentlist_report[".googleLikeFields"][] = "usn";
$tdatastudentlist_report[".googleLikeFields"][] = "hostel_type";
$tdatastudentlist_report[".googleLikeFields"][] = "hostel name";



$tdatastudentlist_report[".tableType"] = "report";

$tdatastudentlist_report[".printerPageOrientation"] = 0;
$tdatastudentlist_report[".nPrinterPageScale"] = 100;

$tdatastudentlist_report[".nPrinterSplitRecords"] = 40;

$tdatastudentlist_report[".geocodingEnabled"] = false;

//report settings

$tdatastudentlist_report[".reportPrintPartitionType"] = 1;
$tdatastudentlist_report[".reportPrintGroupsPerPage"] = 3;
$tdatastudentlist_report[".lowGroup"] = 3;



$tdatastudentlist_report[".reportGroupFields"] = true;
$tdatastudentlist_report[".pageSize"] = 5;
$tdatastudentlist_report[".showGroupSummaryCount"] = true;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "id";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "sem";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "sem";
	$rgroupField['groupInterval'] = 50;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$reportGroupFieldsList []= "usn";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "usn";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdatastudentlist_report[".reportGroupFieldsData"] = $reportGroupFields;
$tdatastudentlist_report[".reportGroupFieldsList"] = $reportGroupFieldsList;




$tdatastudentlist_report[".reportPageSummary"] = true;


$tdatastudentlist_report[".repShowDet"] = true;

$tdatastudentlist_report[".reportLayout"] = 0;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudentlist_report[".strOrderBy"] = $tstrOrderBy;

$tdatastudentlist_report[".orderindexes"] = array();


$tdatastudentlist_report[".sqlHead"] = "SELECT id,  	first_name,  	last_name,  	email,  	mob,  	sem,  	usn,  	hostel_type,  	`hostel name`";
$tdatastudentlist_report[".sqlFrom"] = "FROM studentlist";
$tdatastudentlist_report[".sqlWhereExpr"] = "";
$tdatastudentlist_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudentlist_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudentlist_report[".arrGroupsPerPage"] = $arrGPP;

$tdatastudentlist_report[".highlightSearchResults"] = true;

$tableKeysstudentlist_report = array();
$tableKeysstudentlist_report[] = "id";
$tdatastudentlist_report[".Keys"] = $tableKeysstudentlist_report;


$tdatastudentlist_report[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","id");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["id"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "id";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","first_name");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "first_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["first_name"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","last_name");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "last_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["last_name"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "last_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","email");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["email"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "email";
//	mob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mob";
	$fdata["GoodName"] = "mob";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","mob");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["mob"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "mob";
//	sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sem";
	$fdata["GoodName"] = "sem";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","sem");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "sem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sem";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["sem"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "sem";
//	usn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usn";
	$fdata["GoodName"] = "usn";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","usn");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "usn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usn";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["usn"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "usn";
//	hostel_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "hostel_type";
	$fdata["GoodName"] = "hostel_type";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","hostel_type");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["hostel_type"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "hostel_type";
//	hostel name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hostel name";
	$fdata["GoodName"] = "hostel_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Report","hostel_name");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "hostel name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hostel name`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatastudentlist_report["hostel name"] = $fdata;
		$tdatastudentlist_report[".searchableFields"][] = "hostel name";


$tables_data["studentlist Report"]=&$tdatastudentlist_report;
$field_labels["studentlist_Report"] = &$fieldLabelsstudentlist_report;
$fieldToolTips["studentlist_Report"] = &$fieldToolTipsstudentlist_report;
$placeHolders["studentlist_Report"] = &$placeHoldersstudentlist_report;
$page_titles["studentlist_Report"] = &$pageTitlesstudentlist_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["studentlist Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["studentlist Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_studentlist_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	first_name,  	last_name,  	email,  	mob,  	sem,  	usn,  	hostel_type,  	`hostel name`";
$proto0["m_strFrom"] = "FROM studentlist";
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
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "studentlist Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto8["m_sql"] = "first_name";
$proto8["m_srcTableName"] = "studentlist Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "studentlist Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "studentlist Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mob",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto14["m_sql"] = "mob";
$proto14["m_srcTableName"] = "studentlist Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto16["m_sql"] = "sem";
$proto16["m_srcTableName"] = "studentlist Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usn",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto18["m_sql"] = "usn";
$proto18["m_srcTableName"] = "studentlist Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_type",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto20["m_sql"] = "hostel_type";
$proto20["m_srcTableName"] = "studentlist Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Report"
));

$proto22["m_sql"] = "`hostel name`";
$proto22["m_srcTableName"] = "studentlist Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "studentlist";
$proto25["m_srcTableName"] = "studentlist Report";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "first_name";
$proto25["m_columns"][] = "last_name";
$proto25["m_columns"][] = "email";
$proto25["m_columns"][] = "mob";
$proto25["m_columns"][] = "sem";
$proto25["m_columns"][] = "usn";
$proto25["m_columns"][] = "hostel_type";
$proto25["m_columns"][] = "hostel name";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "studentlist";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "studentlist Report";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="studentlist Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_studentlist_report = createSqlQuery_studentlist_report();


	
		;

									

$tdatastudentlist_report[".sqlquery"] = $queryData_studentlist_report;



$tableEvents["studentlist Report"] = new eventsBase;
$tdatastudentlist_report[".hasEvents"] = false;

?>