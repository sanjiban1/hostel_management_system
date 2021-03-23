<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard["English"] = array();
	$fieldLabelsdashboard["English"]["studentlist_id"] = "Id";
	$fieldLabelsdashboard["English"]["studentlist_first_name"] = "First Name";
	$fieldLabelsdashboard["English"]["studentlist_last_name"] = "Last Name";
	$fieldLabelsdashboard["English"]["studentlist_email"] = "Email";
	$fieldLabelsdashboard["English"]["studentlist_mob"] = "Mob";
	$fieldLabelsdashboard["English"]["studentlist_sem"] = "Sem";
	$fieldLabelsdashboard["English"]["studentlist_usn"] = "Usn";
	$fieldLabelsdashboard["English"]["studentlist_hostel_type"] = "Hostel Type";
	$fieldLabelsdashboard["English"]["studentlist_hostel_name"] = "Hostel Name";
}

//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"id" );
$tdatadashboard[".searchFields"]["studentlist_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"first_name" );
$tdatadashboard[".searchFields"]["studentlist_first_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"last_name" );
$tdatadashboard[".searchFields"]["studentlist_last_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"email" );
$tdatadashboard[".searchFields"]["studentlist_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"mob" );
$tdatadashboard[".searchFields"]["studentlist_mob"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"sem" );
$tdatadashboard[".searchFields"]["studentlist_sem"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"usn" );
$tdatadashboard[".searchFields"]["studentlist_usn"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"hostel_type" );
$tdatadashboard[".searchFields"]["studentlist_hostel_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"studentlist", "field"=>"hostel name" );
$tdatadashboard[".searchFields"]["studentlist_hostel_name"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "studentlist_id";
$tdatadashboard[".allSearchFields"][] = "studentlist_first_name";
$tdatadashboard[".allSearchFields"][] = "studentlist_last_name";
$tdatadashboard[".allSearchFields"][] = "studentlist_email";
$tdatadashboard[".allSearchFields"][] = "studentlist_mob";
$tdatadashboard[".allSearchFields"][] = "studentlist_sem";
$tdatadashboard[".allSearchFields"][] = "studentlist_usn";
$tdatadashboard[".allSearchFields"][] = "studentlist_hostel_type";
$tdatadashboard[".allSearchFields"][] = "studentlist_hostel_name";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "studentlist_id";
$tdatadashboard[".googleLikeFields"][] = "studentlist_first_name";
$tdatadashboard[".googleLikeFields"][] = "studentlist_last_name";
$tdatadashboard[".googleLikeFields"][] = "studentlist_email";
$tdatadashboard[".googleLikeFields"][] = "studentlist_mob";
$tdatadashboard[".googleLikeFields"][] = "studentlist_sem";
$tdatadashboard[".googleLikeFields"][] = "studentlist_usn";
$tdatadashboard[".googleLikeFields"][] = "studentlist_hostel_type";
$tdatadashboard[".googleLikeFields"][] = "studentlist_hostel_name";

$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "studentlist_record", "table" => "studentlist",
		 "pageName" => "","type" => 3);
	$dbelement["cellName"] = "cell_0_0";

				$dbelement["tabsPageTypes"] = array();
	$dbelement["pageNames"] = array();
		$dbelement["tabsPageTypes"][] = PAGE_VIEW;
	$dbelement["pageNames"][ PAGE_VIEW ] = "";
		$dbelement["tabsPageTypes"][] = PAGE_EDIT;
	$dbelement["pageNames"][ PAGE_EDIT ] = "";
		$dbelement["tabsPageTypes"][] = PAGE_ADD;
	$dbelement["pageNames"][ PAGE_ADD ] = "";
		$dbelement["initialTabPageType"] = PAGE_VIEW;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "hostels_list", "table" => "hostels",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_0_1";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "warden_list", "table" => "warden",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_1_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatadashboard[".dashElements"][] = $dbelement;

$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;



$tableEvents["Dashboard"] = new eventsBase;
$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";



$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>