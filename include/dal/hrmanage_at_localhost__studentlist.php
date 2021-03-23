<?php
$dalTablestudentlist = array();
$dalTablestudentlist["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablestudentlist["first_name"] = array("type"=>200,"varname"=>"first_name", "name" => "first_name");
$dalTablestudentlist["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name");
$dalTablestudentlist["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablestudentlist["mob"] = array("type"=>200,"varname"=>"mob", "name" => "mob");
$dalTablestudentlist["sem"] = array("type"=>3,"varname"=>"sem", "name" => "sem");
$dalTablestudentlist["usn"] = array("type"=>200,"varname"=>"usn", "name" => "usn");
$dalTablestudentlist["hostel_type"] = array("type"=>3,"varname"=>"hostel_type", "name" => "hostel_type");
$dalTablestudentlist["hostel name"] = array("type"=>200,"varname"=>"hostel_name", "name" => "hostel name");
	$dalTablestudentlist["id"]["key"]=true;

$dal_info["hrmanage_at_localhost__studentlist"] = &$dalTablestudentlist;
?>