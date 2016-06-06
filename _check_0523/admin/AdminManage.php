<?php

	define('Usable', true);

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	include_once('include' . DS . 'init.php');

	//權限檢查
	$AdminCheck = new AdminCheck($_SESSION[AdminUserUID],$_SESSION[AdminUserNO],$_SESSION[AdminUserName]);
	$AdminCheck->check(getFileName($_SERVER['SCRIPT_NAME']));
	
	$_UserAuthMenu = $AdminCheck->getSysMenu($_SESSION[AdminUserNO]);	
	$smarty->assign('UserAuthMenu',$_UserAuthMenu);

	//網頁框架
	$_MainHeaderPage = "Header.tpl";                   //網頁首頁部分
	$_MainFooterPage = "Footer.tpl";                   //網頁底部部分
	$_MainMenuPage   = "Menu.tpl";                     //網頁選單

	//初始值設定
	$_FileName       = "AdminManage.php";              //本檔案檔名
	$_Title          = "System";                       //本檔案Title
	$_MainTitleName  = "系統管理";                      //本檔案標題
	$_SubTitleName  = "帳號管理";
	$_SessionTitle   = "Admin";                        //SessionTitle

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
//-- 編輯
/*------------------------------------------------------------------------------------------------------------*/
if ($_REQUEST['flag'] == 'edit')
{

	$id = $_GET['id'];
	$smarty->assign('ID',$id);

	//搜尋資料
	if($id != ""){

  	$sqlstr = "Select * FROM `".Table_Admin."` WHERE `DelFlag` = '' and `admin_id` = '".$id."'";
		$Data = $g_db->getRow($sqlstr);

	}
	
	//功能選單
	/*第一層*/
	$sqlstr   = "select * from ".Table_Sysmenu." where hidden='' and mainid=0 order by sortnum";
	$menuData = $g_db->getAll($sqlstr);
	for($i=0;$i<count($menuData);$i++){
		/*第二層*/
		$sqlstr  = "select * from ".Table_Sysmenu." where mainid='".$menuData[$i]['sysmenu_id']."' and hidden='' order by sortnum";
		$submenu = $g_db->getAll($sqlstr);
		
		$menuData[$i]['submenu'] = $submenu;
	}
	$smarty->assign("menuData",$menuData);
	
	$authData = json_decode($Data['auth'],true);
	for($i=0;$i<count($authData);$i++){
		$auth[$authData[$i]]="Y";
	}
	$smarty->assign("auth",$auth);
	
	$smarty->assign('Data',$Data);
	
	
	$smarty->display("AdminEdit.tpl");

}

/*------------------------------------------------------------------------------------------------------------*/
//-- 儲存編輯
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'editsave')
{

	$id = $_POST['id'];

	$sqlstr = "SELECT * FROM `".Table_Admin."` WHERE `admin_id` = '".$id."'";

	$data['passwd']      = $_POST['passwd'];
	$data['name']    = $_POST['name'];
	$data['auth']    = mysql_escape_string(json_encode($_POST['auth']));

	if($id != "" && $g_db->numRows( $g_db->query($sqlstr) ) > 0){
		
		$g_db->update( Table_Admin, $data, "admin_id", $id );

		header("Location: ".$_FileName);

	}else{

		$data['uid']      = $_POST['uid'];
		$data['create_time']   = $_Now_Time;

		$g_db->create( Table_Admin, $data );

		header("Location: ".$_FileName);
		
	}


}

/*------------------------------------------------------------------------------------------------------------*/
//-- 刪除
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'delete')
{

	$id = $_GET['id'];
	
	$data['DelFlag'] = "Y";
	
	$g_db->update( Table_Admin, $data, "admin_id", $id );

	header("Location: ".$_FileName);

}

/*------------------------------------------------------------------------------------------------------------*/
//-- 商品管理 功能首頁(預設頁)
/*------------------------------------------------------------------------------------------------------------*/
else
{

	$_SubTitle_Name = "";

	//分頁
	$PageNO = (int)$_GET['pageno'];
	if($PageNO == "")
		$PageNO = 0;
	else
		$PageNO = $_GET['pageno'];

	$smarty->assign('PageNO',$pageno);


	//搜尋資料
    $sqlstr = "Select * FROM `".Table_Admin."` WHERE `DelFlag` = '' ".$WhereStr;
	$DataSum = $g_db->numRows($g_db->query($sqlstr));

    $startuprow = $PageNO * $_PageShowNum;
    $sqlstr .= " ORDER BY ".$OrderStr."`admin_id` desc LIMIT ".$startuprow.",".$_PageShowNum;
    $DataList = $g_db->getAll( $sqlstr );

	//項次
	for($i = 0; $i < sizeof($DataList); $i++){
		$DataList[$i]['no'] = $pageno * $_PageShowNum + $i + 1;
	}

	$smarty->assign('DataSum',$DataSum);
	$smarty->assign('DataList',$DataList);

	//分頁列表
	$Pageshow = new PageShow($DataSum, $_PageShowNum, $PageNO, $_FileName);
	
	$Pageshow->TotalPage(10);
	$PageStr = $Pageshow->PageList('MORE');
  	$smarty->assign('PageStr',$PageStr);
	
	//顯示網頁
    $smarty->display("AdminList.tpl");
   

}

?>