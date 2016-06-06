<?php
set_time_limit(0);
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
require_once '../config.php';
extract($_POST);

$NowDate = date("Y-m-d");
if(!($NowDate >= '2016-05-09' && $NowDate <= '2016-07-10')){
	echo "<script>";
	echo "	alert('已過報名時間');";
	echo "	location.href='involve.html'";
	echo "</script>";
	exit;
}

$sqlstr = "select max(eatting_list_no) no from ".Table_Eat;
$NO     = $g_db->getOne($sqlstr);
$NO     = intval($NO);
if(empty($NO)){
	$NO = 1;
}else{
	$NO += 1;
}


if(!empty($user_name) && !empty($user_email)){

	$data = array();
	$data['eatting_list_no']    = str_pad($NO,3,0,STR_PAD_LEFT); 
	$data['involve_name']        = StrFilter($user_name);
	$data['involve_gender']      = StrFilter($user_gender);
	$data['involve_birthday']    = StrFilter($user_birth);
	$data['involve_tel']         = StrFilter($user_phone);
	$data['involve_cellphone']   = StrFilter($user_mobile);
	$data['involve_email']       = StrFilter($user_email);
	$data['involve_zip']         = StrFilter($zipcode);
	$data['involve_county']      = StrFilter($county);
	$data['involve_district']    = StrFilter($district);
	$data['involve_address']     = StrFilter($user_address);
	$data['involve_contact']     = StrFilter($emergency_name);
	$data['involve_contact_tel'] = StrFilter($emergency_phone);
	$data['involve_game']        = StrFilter(json_encode($game));
	$data['involve_speakout']        = StrFilter($speakout);
	$data['create_time']         = date("Y-m-d H:i:s");
	$id = $g_db->create(Table_Eat,$data,'');
	
	$errMsg = "已成功報名";
}else{
	$errMsg = "報名失敗";
}
	echo "<script>";
	echo "	alert('".$errMsg."');";
	echo "	location.href='involve.html'";
	echo "</script>";

?>