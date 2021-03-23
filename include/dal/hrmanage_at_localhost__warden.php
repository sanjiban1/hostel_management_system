<?php
$dalTablewarden = array();
$dalTablewarden["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablewarden["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTablewarden["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablewarden["mob"] = array("type"=>3,"varname"=>"mob", "name" => "mob");
$dalTablewarden["hostel_name"] = array("type"=>200,"varname"=>"hostel_name", "name" => "hostel_name");
$dalTablewarden["hostel_type"] = array("type"=>3,"varname"=>"hostel_type", "name" => "hostel_type");
	$dalTablewarden["id"]["key"]=true;

$dal_info["hrmanage_at_localhost__warden"] = &$dalTablewarden;
?>