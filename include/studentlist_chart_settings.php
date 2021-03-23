<?php
$tdatastudentlist_chart = array();
$tdatastudentlist_chart[".searchableFields"] = array();
$tdatastudentlist_chart[".ShortName"] = "studentlist_chart";
$tdatastudentlist_chart[".OwnerID"] = "";
$tdatastudentlist_chart[".OriginalTable"] = "studentlist";


$tdatastudentlist_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatastudentlist_chart[".originalPagesByType"] = $tdatastudentlist_chart[".pagesByType"];
$tdatastudentlist_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatastudentlist_chart[".originalPages"] = $tdatastudentlist_chart[".pages"];
$tdatastudentlist_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatastudentlist_chart[".originalDefaultPages"] = $tdatastudentlist_chart[".defaultPages"];

//	field labels
$fieldLabelsstudentlist_chart = array();
$fieldToolTipsstudentlist_chart = array();
$pageTitlesstudentlist_chart = array();
$placeHoldersstudentlist_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudentlist_chart["English"] = array();
	$fieldToolTipsstudentlist_chart["English"] = array();
	$placeHoldersstudentlist_chart["English"] = array();
	$pageTitlesstudentlist_chart["English"] = array();
	$fieldLabelsstudentlist_chart["English"]["id"] = "Id";
	$fieldToolTipsstudentlist_chart["English"]["id"] = "";
	$placeHoldersstudentlist_chart["English"]["id"] = "";
	$fieldLabelsstudentlist_chart["English"]["first_name"] = "First Name";
	$fieldToolTipsstudentlist_chart["English"]["first_name"] = "";
	$placeHoldersstudentlist_chart["English"]["first_name"] = "";
	$fieldLabelsstudentlist_chart["English"]["last_name"] = "Last Name";
	$fieldToolTipsstudentlist_chart["English"]["last_name"] = "";
	$placeHoldersstudentlist_chart["English"]["last_name"] = "";
	$fieldLabelsstudentlist_chart["English"]["email"] = "Email";
	$fieldToolTipsstudentlist_chart["English"]["email"] = "";
	$placeHoldersstudentlist_chart["English"]["email"] = "";
	$fieldLabelsstudentlist_chart["English"]["mob"] = "Mob";
	$fieldToolTipsstudentlist_chart["English"]["mob"] = "";
	$placeHoldersstudentlist_chart["English"]["mob"] = "";
	$fieldLabelsstudentlist_chart["English"]["sem"] = "Sem";
	$fieldToolTipsstudentlist_chart["English"]["sem"] = "";
	$placeHoldersstudentlist_chart["English"]["sem"] = "";
	$fieldLabelsstudentlist_chart["English"]["usn"] = "Usn";
	$fieldToolTipsstudentlist_chart["English"]["usn"] = "";
	$placeHoldersstudentlist_chart["English"]["usn"] = "";
	$fieldLabelsstudentlist_chart["English"]["hostel_type"] = "Hostel Type";
	$fieldToolTipsstudentlist_chart["English"]["hostel_type"] = "";
	$placeHoldersstudentlist_chart["English"]["hostel_type"] = "";
	$fieldLabelsstudentlist_chart["English"]["hostel_name"] = "Hostel Name";
	$fieldToolTipsstudentlist_chart["English"]["hostel_name"] = "";
	$placeHoldersstudentlist_chart["English"]["hostel_name"] = "";
	if (count($fieldToolTipsstudentlist_chart["English"]))
		$tdatastudentlist_chart[".isUseToolTips"] = true;
}


	$tdatastudentlist_chart[".NCSearch"] = true;

	$tdatastudentlist_chart[".ChartRefreshTime"] = 0;


$tdatastudentlist_chart[".shortTableName"] = "studentlist_chart";
$tdatastudentlist_chart[".nSecOptions"] = 0;

$tdatastudentlist_chart[".mainTableOwnerID"] = "";
$tdatastudentlist_chart[".entityType"] = 3;
$tdatastudentlist_chart[".connId"] = "hrmanage_at_localhost";


$tdatastudentlist_chart[".strOriginalTableName"] = "studentlist";

	



$tdatastudentlist_chart[".showAddInPopup"] = false;

$tdatastudentlist_chart[".showEditInPopup"] = false;

$tdatastudentlist_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastudentlist_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastudentlist_chart[".listAjax"] = false;
//	temporary
$tdatastudentlist_chart[".listAjax"] = false;

	$tdatastudentlist_chart[".audit"] = false;

	$tdatastudentlist_chart[".locking"] = false;


$pages = $tdatastudentlist_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudentlist_chart[".edit"] = true;
	$tdatastudentlist_chart[".afterEditAction"] = 1;
	$tdatastudentlist_chart[".closePopupAfterEdit"] = 1;
	$tdatastudentlist_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudentlist_chart[".add"] = true;
$tdatastudentlist_chart[".afterAddAction"] = 1;
$tdatastudentlist_chart[".closePopupAfterAdd"] = 1;
$tdatastudentlist_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudentlist_chart[".list"] = true;
}



$tdatastudentlist_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudentlist_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudentlist_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudentlist_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudentlist_chart[".printFriendly"] = true;
}



$tdatastudentlist_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudentlist_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudentlist_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudentlist_chart[".isUseAjaxSuggest"] = true;






$tdatastudentlist_chart[".ajaxCodeSnippetAdded"] = false;

$tdatastudentlist_chart[".buttonsAdded"] = false;

$tdatastudentlist_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudentlist_chart[".isUseTimeForSearch"] = false;


$tdatastudentlist_chart[".badgeColor"] = "CFAE83";


$tdatastudentlist_chart[".allSearchFields"] = array();
$tdatastudentlist_chart[".filterFields"] = array();
$tdatastudentlist_chart[".requiredSearchFields"] = array();

$tdatastudentlist_chart[".googleLikeFields"] = array();
$tdatastudentlist_chart[".googleLikeFields"][] = "id";
$tdatastudentlist_chart[".googleLikeFields"][] = "first_name";
$tdatastudentlist_chart[".googleLikeFields"][] = "last_name";
$tdatastudentlist_chart[".googleLikeFields"][] = "email";
$tdatastudentlist_chart[".googleLikeFields"][] = "mob";
$tdatastudentlist_chart[".googleLikeFields"][] = "sem";
$tdatastudentlist_chart[".googleLikeFields"][] = "usn";
$tdatastudentlist_chart[".googleLikeFields"][] = "hostel_type";
$tdatastudentlist_chart[".googleLikeFields"][] = "hostel name";



$tdatastudentlist_chart[".tableType"] = "chart";

$tdatastudentlist_chart[".printerPageOrientation"] = 0;
$tdatastudentlist_chart[".nPrinterPageScale"] = 100;

$tdatastudentlist_chart[".nPrinterSplitRecords"] = 40;

$tdatastudentlist_chart[".geocodingEnabled"] = false;



// chart settings
$tdatastudentlist_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudentlist_chart[".strOrderBy"] = $tstrOrderBy;

$tdatastudentlist_chart[".orderindexes"] = array();


$tdatastudentlist_chart[".sqlHead"] = "SELECT id,  	first_name,  	last_name,  	email,  	mob,  	sem,  	usn,  	hostel_type,  	`hostel name`";
$tdatastudentlist_chart[".sqlFrom"] = "FROM studentlist";
$tdatastudentlist_chart[".sqlWhereExpr"] = "";
$tdatastudentlist_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudentlist_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudentlist_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatastudentlist_chart[".highlightSearchResults"] = true;

$tableKeysstudentlist_chart = array();
$tableKeysstudentlist_chart[] = "id";
$tdatastudentlist_chart[".Keys"] = $tableKeysstudentlist_chart;


$tdatastudentlist_chart[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","id");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["id"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "id";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["first_name"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","last_name");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["last_name"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "last_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","email");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["email"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "email";
//	mob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mob";
	$fdata["GoodName"] = "mob";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","mob");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["mob"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "mob";
//	sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sem";
	$fdata["GoodName"] = "sem";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","sem");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["sem"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "sem";
//	usn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usn";
	$fdata["GoodName"] = "usn";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","usn");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["usn"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "usn";
//	hostel_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "hostel_type";
	$fdata["GoodName"] = "hostel_type";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","hostel_type");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["hostel_type"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "hostel_type";
//	hostel name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hostel name";
	$fdata["GoodName"] = "hostel_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist_Chart","hostel_name");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatastudentlist_chart["hostel name"] = $fdata;
		$tdatastudentlist_chart[".searchableFields"][] = "hostel name";

$tdatastudentlist_chart[".chartLabelField"] = "first_name";
$tdatastudentlist_chart[".chartSeries"] = array();
$tdatastudentlist_chart[".chartSeries"][] = array( 
	"field" => "hostel_type",
	"total" => "AVG"
);
$tdatastudentlist_chart[".chartSeries"][] = array( 
	"field" => "sem",
	"total" => "AVG"
);
	$tdatastudentlist_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">studentlist Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">hostel_type</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">sem</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">first_name</attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatastudentlist_chart[".chartXml"] .= '<attr value="head">'.xmlencode("studentlist Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("sem").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatastudentlist_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">first_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","first_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">last_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","last_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">email</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","email")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">mob</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","mob")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">sem</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","sem")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">usn</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","usn")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">hostel_type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","hostel_type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatastudentlist_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">hostel name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("studentlist_Chart","hostel_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatastudentlist_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">studentlist Chart</attr>
<attr value="short_table_name">studentlist_chart</attr>
</attr>

</chart>';

$tables_data["studentlist Chart"]=&$tdatastudentlist_chart;
$field_labels["studentlist_Chart"] = &$fieldLabelsstudentlist_chart;
$fieldToolTips["studentlist_Chart"] = &$fieldToolTipsstudentlist_chart;
$placeHolders["studentlist_Chart"] = &$placeHoldersstudentlist_chart;
$page_titles["studentlist_Chart"] = &$pageTitlesstudentlist_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["studentlist Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["studentlist Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_studentlist_chart()
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
	"m_srcTableName" => "studentlist Chart"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "studentlist Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto8["m_sql"] = "first_name";
$proto8["m_srcTableName"] = "studentlist Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "studentlist Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "studentlist Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mob",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto14["m_sql"] = "mob";
$proto14["m_srcTableName"] = "studentlist Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto16["m_sql"] = "sem";
$proto16["m_srcTableName"] = "studentlist Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usn",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto18["m_sql"] = "usn";
$proto18["m_srcTableName"] = "studentlist Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_type",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto20["m_sql"] = "hostel_type";
$proto20["m_srcTableName"] = "studentlist Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist Chart"
));

$proto22["m_sql"] = "`hostel name`";
$proto22["m_srcTableName"] = "studentlist Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "studentlist";
$proto25["m_srcTableName"] = "studentlist Chart";
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
$proto24["m_srcTableName"] = "studentlist Chart";
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
$proto0["m_srcTableName"]="studentlist Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_studentlist_chart = createSqlQuery_studentlist_chart();


	
		;

									

$tdatastudentlist_chart[".sqlquery"] = $queryData_studentlist_chart;



$tableEvents["studentlist Chart"] = new eventsBase;
$tdatastudentlist_chart[".hasEvents"] = false;

?>