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

$sqlstr = "select max(movie_list_no) no from ".Table_Movie;
$NO     = $g_db->getOne($sqlstr);
$NO     = intval($NO);
if(empty($NO)){
	$NO = 1;
}else{
	$NO += 1;
}
echo $NO;
/*$checkcode = $PicPAss;
$num = $_SESSION["Checknum"];

if($checkcode != $num || empty($num)){
	echo json_encode(array('status'=>false,"msg"=>"驗證碼錯誤"));	
	exit;
}*/
//MOV MPEG4 AVI WMV MPEGPS FLV
$_UFileType = array('mov','mpeg4','avi','wmv','mpegps','flv','mp4');
$tmp = explode(".",$_FILES["vedio"]["name"]);
$FileType = array_pop($tmp);

if(!in_array(strtolower($FileType),$_UFileType)){
	echo "<script>";
	echo "	alert('檔案格式有誤');";
	echo "	location.href='involve.html'";
	echo "</script>";
	exit;
}

if(!empty($user_name) && !empty($user_email) && !empty($_FILES['vedio']['name'])){
	$filename = $_FILES["vedio"]["name"];

	$data = array();
	$data['movie_list_no']    = str_pad($NO,3,0,STR_PAD_LEFT); 
	$data['involve_name']     = StrFilter($user_name);
	$data['involve_tel']      = StrFilter($user_phone);
	$data['involve_email']    = StrFilter($user_email);
	$data['involve_school']  = StrFilter($user_school);
	$data['involve_department']  = StrFilter($user_department);
	$data['involve_grade']   = StrFilter($user_grade);
	$data['involve_movie']    = StrFilter($vedio_name);
	$data['involve_zip']      = StrFilter($zipcode);
	$data['involve_county']   = StrFilter($county);
	$data['involve_district'] = StrFilter($district);
	$data['involve_address']  = StrFilter($user_address);
	$data['involve_filename'] = StrFilter($filename);
	$data['involve_intro']    = StrFilter($vedio_intro);
	$data['show_status']      = "Y";
	$data['create_time']      = date("Y-m-d H:i:s");
	$id = $g_db->create(Table_Movie,$data,'');
	
	$filename = str_pad($id,3,0,STR_PAD_LEFT).".".$FileType;
	
	$data = array();
	$data['involve_filename'] = $filename;
	$g_db->update(Table_Movie,$data,'movie_list_id',$id);
	
 	//上傳
	### 連接的 FTP 伺服器是 localhost
	$conn_id = ftp_connect("ftp.uniplan.com.tw");

	# ftp_connect若成功，回傳一個連線識別，若失敗，則false
	if($conn_id){
		### 登入 FTP, 帳號是 USERNAME, 密碼是 PASSWORD
		$login_result = ftp_login($conn_id, '2016taiwan235', '2016235');
		ftp_pasv ( $conn_id, true );
		ftp_chdir($conn_id,'');

		if (ftp_put($conn_id, $filename, $_FILES["vedio"]["tmp_name"], FTP_BINARY)) {
			$errMsg = "已成功報名，作品編號為".str_pad($NO,3,0,STR_PAD_LEFT);
		} else {
			$errMsg = "上傳檔案失敗";
		}

		ftp_close($conn_id);
	}else{
		echo 'FTP got some problem...';
	}
	
}else{
	$errMsg = "上傳檔案失敗";
}
	echo "<script>";
	echo "	alert('".$errMsg."');";
	echo "	location.href='involve.html'";
	echo "</script>";

?>