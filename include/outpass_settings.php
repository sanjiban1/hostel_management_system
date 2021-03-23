<?php
$tdataoutpass = array();
$tdataoutpass[".searchableFields"] = array();
$tdataoutpass[".ShortName"] = "outpass";
$tdataoutpass[".OwnerID"] = "";
$tdataoutpass[".OriginalTable"] = "outpass";


$tdataoutpass[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataoutpass[".originalPagesByType"] = $tdataoutpass[".pagesByType"];
$tdataoutpass[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataoutpass[".originalPages"] = $tdataoutpass[".pages"];
$tdataoutpass[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataoutpass[".originalDefaultPages"] = $tdataoutpass[".defaultPages"];

//	field labels
$fieldLabelsoutpass = array();
$fieldToolTipsoutpass = array();
$pageTitlesoutpass = array();
$placeHoldersoutpass = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoutpass["English"] = array();
	$fieldToolTipsoutpass["English"] = array();
	$placeHoldersoutpass["English"] = array();
	$pageTitlesoutpass["English"] = array();
	$fieldLabelsoutpass["English"]["id"] = "Id";
	$fieldToolTipsoutpass["English"]["id"] = "";
	$placeHoldersoutpass["English"]["id"] = "";
	$fieldLabelsoutpass["English"]["usn"] = "Usn";
	$fieldToolTipsoutpass["English"]["usn"] = "";
	$placeHoldersoutpass["English"]["usn"] = "";
	$fieldLabelsoutpass["English"]["student_name"] = "Student Name";
	$fieldToolTipsoutpass["English"]["student_name"] = "";
	$placeHoldersoutpass["English"]["student_name"] = "";
	$fieldLabelsoutpass["English"]["sem"] = "Sem";
	$fieldToolTipsoutpass["English"]["sem"] = "";
	$placeHoldersoutpass["English"]["sem"] = "";
	$fieldLabelsoutpass["English"]["start_date"] = "Start Date";
	$fieldToolTipsoutpass["English"]["start_date"] = "";
	$placeHoldersoutpass["English"]["start_date"] = "";
	$fieldLabelsoutpass["English"]["end_date"] = "End Date";
	$fieldToolTipsoutpass["English"]["end_date"] = "";
	$placeHoldersoutpass["English"]["end_date"] = "";
	$fieldLabelsoutpass["English"]["hostel_name"] = "Hostel Name";
	$fieldToolTipsoutpass["English"]["hostel_name"] = "";
	$placeHoldersoutpass["English"]["hostel_name"] = "";
	if (count($fieldToolTipsoutpass["English"]))
		$tdataoutpass[".isUseToolTips"] = true;
}


	$tdataoutpass[".NCSearch"] = true;



$tdataoutpass[".shortTableName"] = "outpass";
$tdataoutpass[".nSecOptions"] = 0;

$tdataoutpass[".mainTableOwnerID"] = "";
$tdataoutpass[".entityType"] = 0;
$tdataoutpass[".connId"] = "hrmanage_at_localhost";


$tdataoutpass[".strOriginalTableName"] = "outpass";

	



$tdataoutpass[".showAddInPopup"] = false;

$tdataoutpass[".showEditInPopup"] = false;

$tdataoutpass[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataoutpass[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataoutpass[".listAjax"] = false;
//	temporary
$tdataoutpass[".listAjax"] = false;

	$tdataoutpass[".audit"] = false;

	$tdataoutpass[".locking"] = false;


$pages = $tdataoutpass[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoutpass[".edit"] = true;
	$tdataoutpass[".afterEditAction"] = 1;
	$tdataoutpass[".closePopupAfterEdit"] = 1;
	$tdataoutpass[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoutpass[".add"] = true;
$tdataoutpass[".afterAddAction"] = 1;
$tdataoutpass[".closePopupAfterAdd"] = 1;
$tdataoutpass[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoutpass[".list"] = true;
}



$tdataoutpass[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoutpass[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoutpass[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoutpass[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoutpass[".printFriendly"] = true;
}



$tdataoutpass[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoutpass[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoutpass[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoutpass[".isUseAjaxSuggest"] = true;

$tdataoutpass[".rowHighlite"] = true;





$tdataoutpass[".ajaxCodeSnippetAdded"] = false;

$tdataoutpass[".buttonsAdded"] = false;

$tdataoutpass[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutpass[".isUseTimeForSearch"] = false;


$tdataoutpass[".badgeColor"] = "daa520";


$tdataoutpass[".allSearchFields"] = array();
$tdataoutpass[".filterFields"] = array();
$tdataoutpass[".requiredSearchFields"] = array();

$tdataoutpass[".googleLikeFields"] = array();
$tdataoutpass[".googleLikeFields"][] = "id";
$tdataoutpass[".googleLikeFields"][] = "usn";
$tdataoutpass[".googleLikeFields"][] = "student_name";
$tdataoutpass[".googleLikeFields"][] = "sem";
$tdataoutpass[".googleLikeFields"][] = "start_date";
$tdataoutpass[".googleLikeFields"][] = "end_date";
$tdataoutpass[".googleLikeFields"][] = "hostel_name";



$tdataoutpass[".tableType"] = "list";

$tdataoutpass[".printerPageOrientation"] = 0;
$tdataoutpass[".nPrinterPageScale"] = 100;

$tdataoutpass[".nPrinterSplitRecords"] = 40;

$tdataoutpass[".geocodingEnabled"] = false;










$tdataoutpass[".pageSize"] = 20;

$tdataoutpass[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataoutpass[".strOrderBy"] = $tstrOrderBy;

$tdataoutpass[".orderindexes"] = array();


$tdataoutpass[".sqlHead"] = "SELECT id,  	usn,  	student_name,  	sem,  	start_date,  	end_date,  	hostel_name";
$tdataoutpass[".sqlFrom"] = "FROM outpass";
$tdataoutpass[".sqlWhereExpr"] = "";
$tdataoutpass[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutpass[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutpass[".arrGroupsPerPage"] = $arrGPP;

$tdataoutpass[".highlightSearchResults"] = true;

$tableKeysoutpass = array();
$tableKeysoutpass[] = "id";
$tdataoutpass[".Keys"] = $tableKeysoutpass;


$tdataoutpass[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "outpass";
	$fdata["Label"] = GetFieldLabel("outpass","id");
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


	$tdataoutpass["id"] = $fdata;
		$tdataoutpass[".searchableFields"][] = "id";
//	usn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usn";
	$fdata["GoodName"] = "usn";
	$fdata["ownerTable"] = "outpass";
	$fdata["Label"] = GetFieldLabel("outpass","usn");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "studentlist";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"student_name", 'lookupF'=>"first_name");
	$edata["autoCompleteFields"][] = array('masterF'=>"sem", 'lookupF'=>"sem");
	$edata["autoCompleteFields"][] = array('masterF'=>"hostel_name", 'lookupF'=>"hostel name");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "usn";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usn";

	

	
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


	$tdataoutpass["usn"] = $fdata;
		$tdataoutpass[".searchableFields"][] = "usn";
//	student_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "student_name";
	$fdata["GoodName"] = "student_name";
	$fdata["ownerTable"] = "outpass";
	$fdata["Label"] = GetFieldLabel("outpass","student_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "student_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_name";

	
	
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


	$tdataoutpass["student_name"] = $fdata;
		$tdataoutpass[".searchableFields"][] = "student_name";
//	sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sem";
	$fdata["GoodName"] = "sem";
	$fdata["ownerTable"] = "outpass";
	$fdata["Label"] = GetFieldLabel("outpass","sem");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdataoutpass["sem"] = $fdata;
		$tdataoutpass[".searchableFields"][] = "sem";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "outpass";
	$fdata["Label"] = GetFieldLabel("outpass","start_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "start_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataoutpass["start_date"] = $fdata;
		$tdataoutpass[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "outpass";
	$fdata["Label"] = GetFieldLabel("outpass","end_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "end_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataoutpass["end_date"] = $fdata;
		$tdataoutpass[".searchableFields"][] = "end_date";
//	hostel_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "hostel_name";
	$fdata["GoodName"] = "hostel_name";
	$fdata["ownerTable"] = "outpass";
	$fdata["Label"] = GetFieldLabel("outpass","hostel_name");
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


	$tdataoutpass["hostel_name"] = $fdata;
		$tdataoutpass[".searchableFields"][] = "hostel_name";


$tables_data["outpass"]=&$tdataoutpass;
$field_labels["outpass"] = &$fieldLabelsoutpass;
$fieldToolTips["outpass"] = &$fieldToolTipsoutpass;
$placeHolders["outpass"] = &$placeHoldersoutpass;
$page_titles["outpass"] = &$pageTitlesoutpass;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["outpass"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["outpass"] = array();



	
				$strOriginalDetailsTable="studentlist";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="studentlist";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "studentlist";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["outpass"][0] = $masterParams;
				$masterTablesData["outpass"][0]["masterKeys"] = array();
	$masterTablesData["outpass"][0]["masterKeys"][]="usn";
				$masterTablesData["outpass"][0]["masterKeys"][]="first_name";
				$masterTablesData["outpass"][0]["masterKeys"][]="sem";
				$masterTablesData["outpass"][0]["masterKeys"][]="hostel name";
				$masterTablesData["outpass"][0]["detailKeys"] = array();
	$masterTablesData["outpass"][0]["detailKeys"][]="usn";
				$masterTablesData["outpass"][0]["detailKeys"][]="student_name";
				$masterTablesData["outpass"][0]["detailKeys"][]="sem";
				$masterTablesData["outpass"][0]["detailKeys"][]="hostel_name";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_outpass()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	usn,  	student_name,  	sem,  	start_date,  	end_date,  	hostel_name";
$proto0["m_strFrom"] = "FROM outpass";
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
	"m_strTable" => "outpass",
	"m_srcTableName" => "outpass"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "outpass";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usn",
	"m_strTable" => "outpass",
	"m_srcTableName" => "outpass"
));

$proto8["m_sql"] = "usn";
$proto8["m_srcTableName"] = "outpass";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "student_name",
	"m_strTable" => "outpass",
	"m_srcTableName" => "outpass"
));

$proto10["m_sql"] = "student_name";
$proto10["m_srcTableName"] = "outpass";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "outpass",
	"m_srcTableName" => "outpass"
));

$proto12["m_sql"] = "sem";
$proto12["m_srcTableName"] = "outpass";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "outpass",
	"m_srcTableName" => "outpass"
));

$proto14["m_sql"] = "start_date";
$proto14["m_srcTableName"] = "outpass";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "outpass",
	"m_srcTableName" => "outpass"
));

$proto16["m_sql"] = "end_date";
$proto16["m_srcTableName"] = "outpass";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_name",
	"m_strTable" => "outpass",
	"m_srcTableName" => "outpass"
));

$proto18["m_sql"] = "hostel_name";
$proto18["m_srcTableName"] = "outpass";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "outpass";
$proto21["m_srcTableName"] = "outpass";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "usn";
$proto21["m_columns"][] = "student_name";
$proto21["m_columns"][] = "sem";
$proto21["m_columns"][] = "start_date";
$proto21["m_columns"][] = "end_date";
$proto21["m_columns"][] = "hostel_name";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "outpass";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "outpass";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="outpass";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_outpass = createSqlQuery_outpass();


	
		;

							

$tdataoutpass[".sqlquery"] = $queryData_outpass;



$tableEvents["outpass"] = new eventsBase;
$tdataoutpass[".hasEvents"] = false;

?>