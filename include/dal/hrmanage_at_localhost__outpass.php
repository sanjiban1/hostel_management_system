<?php
$dalTableoutpass = array();
$dalTableoutpass["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableoutpass["usn"] = array("type"=>200,"varname"=>"usn", "name" => "usn");
$dalTableoutpass["student_name"] = array("type"=>200,"varname"=>"student_name", "name" => "student_name");
$dalTableoutpass["sem"] = array("type"=>3,"varname"=>"sem", "name" => "sem");
$dalTableoutpass["start_date"] = array("type"=>135,"varname"=>"start_date", "name" => "start_date");
$dalTableoutpass["end_date"] = array("type"=>135,"varname"=>"end_date", "name" => "end_date");
$dalTableoutpass["hostel_name"] = array("type"=>200,"varname"=>"hostel_name", "name" => "hostel_name");
	$dalTableoutpass["id"]["key"]=true;

$dal_info["hrmanage_at_localhost__outpass"] = &$dalTableoutpass;
?>