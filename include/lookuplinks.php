<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["hostels"] ) ) {
			$lookupTableLinks["hostels"] = array();
		}
		if( !isset( $lookupTableLinks["hostels"]["studentlist.hostel name"] )) {
			$lookupTableLinks["hostels"]["studentlist.hostel name"] = array();
		}
		$lookupTableLinks["hostels"]["studentlist.hostel name"]["edit"] = array("table" => "studentlist", "field" => "hostel name", "page" => "edit");
		if( !isset( $lookupTableLinks["hostels"] ) ) {
			$lookupTableLinks["hostels"] = array();
		}
		if( !isset( $lookupTableLinks["hostels"]["warden.hostel_name"] )) {
			$lookupTableLinks["hostels"]["warden.hostel_name"] = array();
		}
		$lookupTableLinks["hostels"]["warden.hostel_name"]["edit"] = array("table" => "warden", "field" => "hostel_name", "page" => "edit");
		if( !isset( $lookupTableLinks["hostels"] ) ) {
			$lookupTableLinks["hostels"] = array();
		}
		if( !isset( $lookupTableLinks["hostels"]["studentlist_report.hostel name"] )) {
			$lookupTableLinks["hostels"]["studentlist_report.hostel name"] = array();
		}
		$lookupTableLinks["hostels"]["studentlist_report.hostel name"]["search"] = array("table" => "studentlist Report", "field" => "hostel name", "page" => "search");
		if( !isset( $lookupTableLinks["hostels"] ) ) {
			$lookupTableLinks["hostels"] = array();
		}
		if( !isset( $lookupTableLinks["hostels"]["studentlist_chart.hostel name"] )) {
			$lookupTableLinks["hostels"]["studentlist_chart.hostel name"] = array();
		}
		$lookupTableLinks["hostels"]["studentlist_chart.hostel name"]["search"] = array("table" => "studentlist Chart", "field" => "hostel name", "page" => "search");
		if( !isset( $lookupTableLinks["studentlist"] ) ) {
			$lookupTableLinks["studentlist"] = array();
		}
		if( !isset( $lookupTableLinks["studentlist"]["outpass.usn"] )) {
			$lookupTableLinks["studentlist"]["outpass.usn"] = array();
		}
		$lookupTableLinks["studentlist"]["outpass.usn"]["edit"] = array("table" => "outpass", "field" => "usn", "page" => "edit");
}

?>