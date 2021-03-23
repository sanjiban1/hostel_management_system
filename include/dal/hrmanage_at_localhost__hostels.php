<?php
$dalTablehostels = array();
$dalTablehostels["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablehostels["warden_name"] = array("type"=>200,"varname"=>"warden_name", "name" => "warden_name");
$dalTablehostels["students"] = array("type"=>200,"varname"=>"students", "name" => "students");
$dalTablehostels["hostel_name"] = array("type"=>200,"varname"=>"hostel_name", "name" => "hostel_name");
$dalTablehostels["hostel_type"] = array("type"=>3,"varname"=>"hostel_type", "name" => "hostel_type");
	$dalTablehostels["id"]["key"]=true;

$dal_info["hrmanage_at_localhost__hostels"] = &$dalTablehostels;
?>