<?php

	define('Usable', true);

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	include_once('include' . DS . 'init.php');

	
/*------------------------------------------------------------------------------------------------------------*/
//-- 登入
/*------------------------------------------------------------------------------------------------------------*/
if ($_REQUEST['flag'] == 'login')
{

	$s_id = $_POST["s_id"];
	$s_pwd = $_POST["s_pwd"];
	
	$checkcode = $_POST['code'];
	$num = $_SESSION["Checknum"];
	
	//login check
	if($checkcode == $num && $num != ""){
			$sql = "SELECT * FROM `".Table_Admin."` WHERE uid='{$s_id}' and passwd='{$s_pwd}'";
      		$num = $g_db->numRows($g_db->query($sql));
			if($num > 0){
				$userdata = $g_db->getRow($sql);
				
				$_SESSION[AdminUserNO]   = $userdata["admin_id"];
				$_SESSION[AdminUserName] = $userdata["name"];
				$_SESSION[AdminUserUID]  = $userdata["uid"];
				
				//最近登入時間
				$updsql="update ".Table_Admin." set lastlogin=logintime,logintime=now() where admin_id='".$userdata["admin_id"]."'";
				$g_db->query($updsql);
				//----------------------------------------------------------------------------
				
				
				header("Location: Main.php");
			   
			   
			}else{ 
				echo "<script>alert('您的帳號密碼不符.');</script>";
				echo "<script>window.open('index.php','_self');</script>";
			}	
	}else{
		echo "<script>alert('驗證碼錯誤.');</script>";
		echo "<script>window.open('index.php','_self');</script>";
	}	
}

/*------------------------------------------------------------------------------------------------------------*/
//-- 首頁
/*------------------------------------------------------------------------------------------------------------*/
else
{


    $smarty->display("index.tpl");


}


?>