<?php
define('Usable', true);
include("admin/include/init.php");

ini_set("post_max_size",'400M');
ini_set("max_input_time",'300');
ini_set("upload_max_filesize",'100M');

function getPageName($url){
	$temp = explode("/",$url);
	
	return end($temp);
}


?>