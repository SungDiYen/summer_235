<?php

	define('Usable', true);

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	include_once('include' . DS . 'init.php');

	//權限檢查
	$AdminCheck = new AdminCheck($_SESSION[AdminUserUID],$_SESSION[AdminUserNO],$_SESSION[AdminUserName]);
	$AdminCheck->check("HOME");
	
	$_UserAuthMenu = $AdminCheck->getSysMenu($_SESSION[AdminUserNO]);	
	$smarty->assign('UserAuthMenu',$_UserAuthMenu);

	//網頁框架
	$_MainHeaderPage = "Header.tpl";                   //網頁首頁部分
	$_MainFooterPage = "Footer.tpl";                   //網頁底部部分
	$_MainMenuPage   = "Menu.tpl";                     //網頁選單

	//初始值設定
	$_FileName       = "UserManage.php";              //本檔案檔名
	$_Title          = "System";                       //本檔案Title
	$_MainTitleName  = "系統管理";                      //本檔案標題
	$_SubTitleName   = "帳號資料";
	$_SessionTitle   = "User";                        //SessionTitle

	$smarty->assign('_FileName',      $_FileName);
	$smarty->assign('_Title',         $_Title);
	$smarty->assign('_MainTitleName', $_MainTitleName);
	$smarty->assign('_SubTitleName' ,$_SubTitleName);
	$smarty->assign('header_page',     $_MainHeaderPage);
	$smarty->assign('footer_page',     $_MainFooterPage);
	$smarty->assign('menu_page',       $_MainMenuPage);

	//參數設定
	$_Now_Time      = date("Y-m-d H:i:s");
	$_PageShowNum   = 20;                               //每頁預設顯示數量
	$_PageNoShowNum = 10;                               //每頁預設顯示項目數量


/*------------------------------------------------------------------------------------------------------------*/
//-- 儲存編輯
/*------------------------------------------------------------------------------------------------------------*/
if ($_REQUEST['flag'] == 'editsave')
{

	$id = $_SESSION[AdminUserNO];

	$sqlstr = "SELECT * FROM `".Table_Admin."` WHERE `admin_id` = '".$id."'";

	$data['passwd']      = $_POST['passwd'];
	$data['name']    = $_POST['name'];

	if($id != "" && $g_db->numRows( $g_db->query($sqlstr) ) > 0){
		
		$g_db->update( Table_Admin, $data, "admin_id", $id );

		header("Location: ".$_FileName);

	}
	header("Location: ".$_FileName);

}
/*------------------------------------------------------------------------------------------------------------*/
//-- 商品管理 功能首頁(預設頁)
/*------------------------------------------------------------------------------------------------------------*/
else
{

	$id = $_SESSION[AdminUserNO];

	//搜尋資料
	if($id != ""){

  		$sqlstr = "Select * FROM `".Table_Admin."` WHERE `DelFlag` = '' and `admin_id` = '".$id."'";
		$Data = $g_db->getRow($sqlstr);
	}
	
	
	$smarty->assign('Data',$Data);
	
	
	$smarty->display("UserEdit.tpl");

   

}

?>