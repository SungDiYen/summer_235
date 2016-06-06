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
	$_FileName       = "BlogManage.php";              //本檔案檔名
	$_Title          = "Blog";                    //本檔案Title
	$_MainTitleName  = "論譠管理";                       //本檔案標題
	$_SubTitleName   = "論譠管理";
	$_SessionTitle   = "Blog";                        //SessionTitle

	$smarty->assign('_FileName',      $_FileName);
	$smarty->assign('_Title',         $_Title);
	$smarty->assign('_MainTitleName', $_MainTitleName);
	$smarty->assign('_SubTitleName' ,$_SubTitleName);
	$smarty->assign('header_page',     $_MainHeaderPage);
	$smarty->assign('footer_page',     $_MainFooterPage);
	$smarty->assign('menu_page',       $_MainMenuPage);
	
	$smarty->assign('uploadUrl',Upload_Url."blog/");
	
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

  		$sqlstr = "Select * FROM `".Table_Blog."` WHERE `DelFlag` = '' and `blog_id` = '".$id."'";
		$Data = $g_db->getRow($sqlstr);

	}
	
	// 產品說明
	$initialValue = $Data["blog_content"];
	$inputName = 'blog_content';
	$CKEditor = new CKEditor();
	$CKEditor->basePath = 'include/ckeditor/';
	$CKEditor->returnOutput = true;
	$neweditor=$CKEditor->editor($inputName, $initialValue);
	$smarty->assign('FCK_content', $neweditor);
	
	$smarty->assign('Data',$Data);
	
	
	$smarty->display("BlogEdit.tpl");

}

/*------------------------------------------------------------------------------------------------------------*/
//-- 儲存編輯
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'editsave')
{

	$id = $_POST['id'];

	$sqlstr = "SELECT * FROM `".Table_Blog."` WHERE `blog_id` = '".$id."'";
	
	$data['blog_title']     = mysql_real_escape_string($_POST['blog_title']);
	$data['blog_date']      = mysql_real_escape_string($_POST['blog_date']);
	//$data['blog_quotation'] = mysql_real_escape_string($_POST['blog_quotation']);
	$data['blog_content']   = mysql_real_escape_string($_POST['blog_content']);
	$data['sortnum']        = intval($_POST['sortnum']);
	$data['show_status']    = mysql_real_escape_string($_POST['show_mode']);

	//pic
	if($_FILES["blog_pic"]["name"] != ""){
		$FileType = strtolower(substr($_FILES["blog_pic"]["name"],strrpos($_FILES["blog_pic"]["name"],'.')));
		if($FileType == '.jpg' || $FileType == '.jpeg' || $FileType == '.png' || $FileType == '.gif'){
			$FileName = "blog-".date("ymdHis").$FileType;
			$data["blog_pic"] = $FileName;			
			copy( $_FILES["blog_pic"]['tmp_name'], Upload_Path."/blog/".$FileName );	
			
		}
	}elseif($_POST["pic_Del"]=="*"){
		if($_POST['opic']!=""){
			unlink(Upload_Path."/blog/".$_POST['opic']);
		}
		$data["blog_pic"]="";
	}
	//內文pic
	/*if($_FILES["blog_desc_pic"]["name"] != ""){
		$FileType = strtolower(substr($_FILES["blog_desc_pic"]["name"],strrpos($_FILES["blog_desc_pic"]["name"],'.')));
		if($FileType == '.jpg' || $FileType == '.jpeg' || $FileType == '.png' || $FileType == '.gif'){
			$FileName = "newsd-".date("ymdHis").$FileType;
			$data["blog_desc_pic"] = $FileName;			
			copy( $_FILES["blog_desc_pic"]['tmp_name'], Upload_Path."/news/".$FileName );	
			
		}
	}elseif($_POST["pic_desc_Del"]=="*"){
		if($_POST['opic_desc']!=""){
			unlink(Upload_Path."/news/".$_POST['opic_desc']);
		}
		$data["blog_desc_pic"]="";
	}*/
	
	
	if($id != "" && $g_db->numRows( $g_db->query($sqlstr) ) > 0){
		
		$data['update_admin_id']  = $_SESSION[AdminUserNO];
		$data['update_time']   = $_Now_Time;
		
		$g_db->update( Table_Blog, $data, "blog_id", $id );

		header("Location: ".$_FileName);

	}else{
		$data['blog_type']        = "BLOG";
		$data['create_admin_id']  = $_SESSION[AdminUserNO];
		$data['create_time']   = $_Now_Time;

		$g_db->create( Table_Blog, $data );

		header("Location: ".$_FileName);
		
	}


}

/*------------------------------------------------------------------------------------------------------------*/
//-- 刪除
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'delete')
{

	$ids = (isset($_GET['ids'])) ? $_GET['ids'] : $_POST['ids'];
	
	if(is_array($ids)){
		foreach($ids as $key => $val){
			$data['DelFlag'] = "Y";
	
			$g_db->update( Table_Blog, $data, "blog_id", $val );
		}
	}else{
		$data['DelFlag'] = "Y";
	
		$g_db->update( Table_Blog, $data, "blog_id", $ids );
	}
	header("Location: ".$_FileName);

}
/*------------------------------------------------------------------------------------------------------------*/
//-- 搜尋
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'search')
{

	$_SESSION[$_SessionTitle.'Name']   = $_POST['SearchName'];
	$_SESSION[$_SessionTitle.'Status']  = $_POST['SearchStatus'];
	$_SESSION[$_SessionTitle.'TStatus']  = $_POST['SearchTStatus'];
	
	header("Location: ".$_FileName);

}

/*------------------------------------------------------------------------------------------------------------*/
//-- 清除搜尋
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'search_clear')
{

	$_SESSION[$_SessionTitle.'Name']   = '';
	$_SESSION[$_SessionTitle.'Status']  = "";
	$_SESSION[$_SessionTitle.'TStatus']  = "";
	
	header("Location: ".$_FileName);

}
/*------------------------------------------------------------------------------------------------------------*/
//-- 排序
/*------------------------------------------------------------------------------------------------------------*/
elseif ($_REQUEST['flag'] == 'sort')
{
	$_SESSION[$_SessionTitle.'Sort']   = (($_SESSION[$_SessionTitle.'SortBy']!=$_GET['sortby']) || $_SESSION[$_SessionTitle.'Sort']=="asc") ? "desc" : "asc";
	$_SESSION[$_SessionTitle.'SortBy'] = $_GET['sortby'];
	
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
	
	$WhereStr = "";
	
	if(!empty($_SESSION[$_SessionTitle.'Name'])){
		$WhereStr .= " and (blog_title like '%".mysql_real_escape_string($_SESSION[$_SessionTitle.'Name'])."%' or blog_content like '%".mysql_real_escape_string($_SESSION[$_SessionTitle.'Name'])."%')";
		$smarty->assign("SearchName",$_SESSION[$_SessionTitle.'Name']);
	}
	if(!empty($_SESSION[$_SessionTitle.'Status'])){
		$WhereStr .= " and show_status = '".mysql_real_escape_string($_SESSION[$_SessionTitle.'Status'])."'";
		$smarty->assign("SearchStatus",$_SESSION[$_SessionTitle.'Status']);
	}
	
	$smarty->assign("WhereStr",$WhereStr);
	//排序
	$OrderStr = "";
	$_SESSION[$_SessionTitle.'SortBy'] = ($_SESSION[$_SessionTitle.'SortBy']=="") ? "pdate" : $_SESSION[$_SessionTitle.'SortBy'];
	$_SESSION[$_SessionTitle.'Sort']   = ($_SESSION[$_SessionTitle.'Sort']=="") ? "desc" : $_SESSION[$_SessionTitle.'Sort'];
	
	switch($_SESSION[$_SessionTitle.'SortBy']){
		case "pdate":
			$OrderStr = " blog_date ".$_SESSION[$_SessionTitle.'Sort'].",";
		break;
	}
 
 	$smarty->assign("sortby",$_SESSION[$_SessionTitle.'SortBy']);
	$smarty->assign("sorticon",($_SESSION[$_SessionTitle.'Sort']=="desc"?"down":"up"));
	//搜尋資料
    $sqlstr = "Select * FROM `".Table_Blog."` WHERE `DelFlag` = '' and blog_type='BLOG' ".$WhereStr;
	$DataSum = $g_db->numRows($g_db->query($sqlstr));

    $startuprow = $PageNO * $_PageShowNum;
    $sqlstr .= " ORDER BY ".$OrderStr."`blog_id` desc LIMIT ".$startuprow.",".$_PageShowNum;
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
    $smarty->display("BlogList.tpl");
   

}

?>