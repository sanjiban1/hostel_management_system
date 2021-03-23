<?php
$tdatastudentlist = array();
$tdatastudentlist[".searchableFields"] = array();
$tdatastudentlist[".ShortName"] = "studentlist";
$tdatastudentlist[".OwnerID"] = "";
$tdatastudentlist[".OriginalTable"] = "studentlist";


$tdatastudentlist[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastudentlist[".originalPagesByType"] = $tdatastudentlist[".pagesByType"];
$tdatastudentlist[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastudentlist[".originalPages"] = $tdatastudentlist[".pages"];
$tdatastudentlist[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastudentlist[".originalDefaultPages"] = $tdatastudentlist[".defaultPages"];

//	field labels
$fieldLabelsstudentlist = array();
$fieldToolTipsstudentlist = array();
$pageTitlesstudentlist = array();
$placeHoldersstudentlist = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudentlist["English"] = array();
	$fieldToolTipsstudentlist["English"] = array();
	$placeHoldersstudentlist["English"] = array();
	$pageTitlesstudentlist["English"] = array();
	$fieldLabelsstudentlist["English"]["id"] = "Id";
	$fieldToolTipsstudentlist["English"]["id"] = "";
	$placeHoldersstudentlist["English"]["id"] = "";
	$fieldLabelsstudentlist["English"]["first_name"] = "First Name";
	$fieldToolTipsstudentlist["English"]["first_name"] = "";
	$placeHoldersstudentlist["English"]["first_name"] = "";
	$fieldLabelsstudentlist["English"]["last_name"] = "Last Name";
	$fieldToolTipsstudentlist["English"]["last_name"] = "";
	$placeHoldersstudentlist["English"]["last_name"] = "";
	$fieldLabelsstudentlist["English"]["email"] = "Email";
	$fieldToolTipsstudentlist["English"]["email"] = "";
	$placeHoldersstudentlist["English"]["email"] = "";
	$fieldLabelsstudentlist["English"]["mob"] = "Mob";
	$fieldToolTipsstudentlist["English"]["mob"] = "";
	$placeHoldersstudentlist["English"]["mob"] = "";
	$fieldLabelsstudentlist["English"]["sem"] = "Sem";
	$fieldToolTipsstudentlist["English"]["sem"] = "";
	$placeHoldersstudentlist["English"]["sem"] = "";
	$fieldLabelsstudentlist["English"]["usn"] = "Usn";
	$fieldToolTipsstudentlist["English"]["usn"] = "";
	$placeHoldersstudentlist["English"]["usn"] = "";
	$fieldLabelsstudentlist["English"]["hostel_type"] = "Hostel Type";
	$fieldToolTipsstudentlist["English"]["hostel_type"] = "";
	$placeHoldersstudentlist["English"]["hostel_type"] = "";
	$fieldLabelsstudentlist["English"]["hostel_name"] = "Hostel Name";
	$fieldToolTipsstudentlist["English"]["hostel_name"] = "";
	$placeHoldersstudentlist["English"]["hostel_name"] = "";
	if (count($fieldToolTipsstudentlist["English"]))
		$tdatastudentlist[".isUseToolTips"] = true;
}


	$tdatastudentlist[".NCSearch"] = true;



$tdatastudentlist[".shortTableName"] = "studentlist";
$tdatastudentlist[".nSecOptions"] = 0;

$tdatastudentlist[".mainTableOwnerID"] = "";
$tdatastudentlist[".entityType"] = 0;
$tdatastudentlist[".connId"] = "hrmanage_at_localhost";


$tdatastudentlist[".strOriginalTableName"] = "studentlist";

	



$tdatastudentlist[".showAddInPopup"] = false;

$tdatastudentlist[".showEditInPopup"] = false;

$tdatastudentlist[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastudentlist[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastudentlist[".listAjax"] = false;
//	temporary
$tdatastudentlist[".listAjax"] = false;

	$tdatastudentlist[".audit"] = false;

	$tdatastudentlist[".locking"] = false;


$pages = $tdatastudentlist[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudentlist[".edit"] = true;
	$tdatastudentlist[".afterEditAction"] = 1;
	$tdatastudentlist[".closePopupAfterEdit"] = 1;
	$tdatastudentlist[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudentlist[".add"] = true;
$tdatastudentlist[".afterAddAction"] = 1;
$tdatastudentlist[".closePopupAfterAdd"] = 1;
$tdatastudentlist[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudentlist[".list"] = true;
}



$tdatastudentlist[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudentlist[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudentlist[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudentlist[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudentlist[".printFriendly"] = true;
}



$tdatastudentlist[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudentlist[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudentlist[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudentlist[".isUseAjaxSuggest"] = true;

$tdatastudentlist[".rowHighlite"] = true;





$tdatastudentlist[".ajaxCodeSnippetAdded"] = false;

$tdatastudentlist[".buttonsAdded"] = false;

$tdatastudentlist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudentlist[".isUseTimeForSearch"] = false;


$tdatastudentlist[".badgeColor"] = "4682b4";


$tdatastudentlist[".allSearchFields"] = array();
$tdatastudentlist[".filterFields"] = array();
$tdatastudentlist[".requiredSearchFields"] = array();

$tdatastudentlist[".googleLikeFields"] = array();
$tdatastudentlist[".googleLikeFields"][] = "id";
$tdatastudentlist[".googleLikeFields"][] = "first_name";
$tdatastudentlist[".googleLikeFields"][] = "last_name";
$tdatastudentlist[".googleLikeFields"][] = "email";
$tdatastudentlist[".googleLikeFields"][] = "mob";
$tdatastudentlist[".googleLikeFields"][] = "sem";
$tdatastudentlist[".googleLikeFields"][] = "usn";
$tdatastudentlist[".googleLikeFields"][] = "hostel_type";
$tdatastudentlist[".googleLikeFields"][] = "hostel name";



$tdatastudentlist[".tableType"] = "list";

$tdatastudentlist[".printerPageOrientation"] = 0;
$tdatastudentlist[".nPrinterPageScale"] = 100;

$tdatastudentlist[".nPrinterSplitRecords"] = 40;

$tdatastudentlist[".geocodingEnabled"] = false;










$tdatastudentlist[".pageSize"] = 20;

$tdatastudentlist[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudentlist[".strOrderBy"] = $tstrOrderBy;

$tdatastudentlist[".orderindexes"] = array();


$tdatastudentlist[".sqlHead"] = "SELECT id,  	first_name,  	last_name,  	email,  	mob,  	sem,  	usn,  	hostel_type,  	`hostel name`";
$tdatastudentlist[".sqlFrom"] = "FROM studentlist";
$tdatastudentlist[".sqlWhereExpr"] = "";
$tdatastudentlist[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudentlist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudentlist[".arrGroupsPerPage"] = $arrGPP;

$tdatastudentlist[".highlightSearchResults"] = true;

$tableKeysstudentlist = array();
$tableKeysstudentlist[] = "id";
$tdatastudentlist[".Keys"] = $tableKeysstudentlist;


$tdatastudentlist[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","id");
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


	$tdatastudentlist["id"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "id";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","first_name");
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


	$tdatastudentlist["first_name"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","last_name");
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


	$tdatastudentlist["last_name"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "last_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","email");
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


	$tdatastudentlist["email"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "email";
//	mob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mob";
	$fdata["GoodName"] = "mob";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","mob");
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


	$tdatastudentlist["mob"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "mob";
//	sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sem";
	$fdata["GoodName"] = "sem";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","sem");
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


	$tdatastudentlist["sem"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "sem";
//	usn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usn";
	$fdata["GoodName"] = "usn";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","usn");
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


	$tdatastudentlist["usn"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "usn";
//	hostel_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "hostel_type";
	$fdata["GoodName"] = "hostel_type";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","hostel_type");
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


	$tdatastudentlist["hostel_type"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "hostel_type";
//	hostel name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hostel name";
	$fdata["GoodName"] = "hostel_name";
	$fdata["ownerTable"] = "studentlist";
	$fdata["Label"] = GetFieldLabel("studentlist","hostel_name");
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


	$tdatastudentlist["hostel name"] = $fdata;
		$tdatastudentlist[".searchableFields"][] = "hostel name";


$tables_data["studentlist"]=&$tdatastudentlist;
$field_labels["studentlist"] = &$fieldLabelsstudentlist;
$fieldToolTips["studentlist"] = &$fieldToolTipsstudentlist;
$placeHolders["studentlist"] = &$placeHoldersstudentlist;
$page_titles["studentlist"] = &$pageTitlesstudentlist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["studentlist"] = array();
//	outpass
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="outpass";
		$detailsParam["dOriginalTable"] = "outpass";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "outpass";
	$detailsParam["dCaptionTable"] = GetTableCaption("outpass");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["studentlist"][$dIndex] = $detailsParam;

	
		$detailsTablesData["studentlist"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["studentlist"][$dIndex]["masterKeys"][]="usn";

	$detailsTablesData["studentlist"][$dIndex]["masterKeys"][]="first_name";

	$detailsTablesData["studentlist"][$dIndex]["masterKeys"][]="sem";

	$detailsTablesData["studentlist"][$dIndex]["masterKeys"][]="hostel name";

				$detailsTablesData["studentlist"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["studentlist"][$dIndex]["detailKeys"][]="usn";

		
	$detailsTablesData["studentlist"][$dIndex]["detailKeys"][]="student_name";

		
	$detailsTablesData["studentlist"][$dIndex]["detailKeys"][]="sem";

		
	$detailsTablesData["studentlist"][$dIndex]["detailKeys"][]="hostel_name";

// tables which are master tables for current table (detail)
$masterTablesData["studentlist"] = array();



	
				$strOriginalDetailsTable="hostels";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostels";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hostels";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["studentlist"][0] = $masterParams;
				$masterTablesData["studentlist"][0]["masterKeys"] = array();
	$masterTablesData["studentlist"][0]["masterKeys"][]="hostel_name";
				$masterTablesData["studentlist"][0]["detailKeys"] = array();
	$masterTablesData["studentlist"][0]["detailKeys"][]="hostel name";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_studentlist()
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
	"m_srcTableName" => "studentlist"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "studentlist";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto8["m_sql"] = "first_name";
$proto8["m_srcTableName"] = "studentlist";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "studentlist";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "studentlist";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mob",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto14["m_sql"] = "mob";
$proto14["m_srcTableName"] = "studentlist";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto16["m_sql"] = "sem";
$proto16["m_srcTableName"] = "studentlist";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usn",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto18["m_sql"] = "usn";
$proto18["m_srcTableName"] = "studentlist";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel_type",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto20["m_sql"] = "hostel_type";
$proto20["m_srcTableName"] = "studentlist";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hostel name",
	"m_strTable" => "studentlist",
	"m_srcTableName" => "studentlist"
));

$proto22["m_sql"] = "`hostel name`";
$proto22["m_srcTableName"] = "studentlist";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "studentlist";
$proto25["m_srcTableName"] = "studentlist";
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
$proto24["m_srcTableName"] = "studentlist";
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
$proto0["m_srcTableName"]="studentlist";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_studentlist = createSqlQuery_studentlist();


	
		;

									

$tdatastudentlist[".sqlquery"] = $queryData_studentlist;



$tableEvents["studentlist"] = new eventsBase;
$tdatastudentlist[".hasEvents"] = false;

?>