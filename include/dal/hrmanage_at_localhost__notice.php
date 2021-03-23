<?php
$dalTablenotice = array();
$dalTablenotice["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablenotice["title"] = array("type"=>200,"varname"=>"title", "name" => "title");
$dalTablenotice["message"] = array("type"=>200,"varname"=>"message", "name" => "message");
$dalTablenotice["document"] = array("type"=>201,"varname"=>"document", "name" => "document");
	$dalTablenotice["id"]["key"]=true;

$dal_info["hrmanage_at_localhost__notice"] = &$dalTablenotice;
?>