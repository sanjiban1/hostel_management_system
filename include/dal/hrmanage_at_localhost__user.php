<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableuser["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableuser["mob"] = array("type"=>3,"varname"=>"mob", "name" => "mob");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
	$dalTableuser["id"]["key"]=true;

$dal_info["hrmanage_at_localhost__user"] = &$dalTableuser;
?>