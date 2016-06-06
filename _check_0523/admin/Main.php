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
	$_FileName       = "Main.php";                     //本檔案檔名
	$_Title          = "Home";                         //本檔案Title
	$_MainTitleName  = "";                          //本檔案標題
	$_SessionTitle   = "Home";                         //SessionTitle

	$smarty->assign('_FileName',      $_FileName);
	$smarty->assign('_Title',         $_Title);
	$smarty->assign('_MainTitleName', $_MainTitleName);
	
	//參數設定
	$_Now_Time      = date("Y-m-d H:i:s");
	$_PageShowNum   = 20;                               //每頁預設顯示數量
	$_PageNoShowNum = 10;                               //每頁預設顯示項目數量
	
	$smarty->assign('_Now_Time',$_Now_Time);
	
	$smarty->assign("UserNO",$_SESSION[AdminUserNO]);
	$smarty->assign("UserName",$_SESSION[AdminUserName]);
	$smarty->assign("UserUID",$_SESSION[AdminUserUID]);
	
	$id = $_SESSION[AdminUserNO];
	
	$sqlstr = "Select * FROM `".Table_Admin."` WHERE `DelFlag` = '' and `admin_id` = '".$id."'";
	$Data = $g_db->getRow($sqlstr);
	
	$smarty->assign("UserData",$Data);
	//顯示網頁
    $smarty->display($_MainHeaderPage);
	$smarty->display($_MainMenuPage);
    $smarty->display("Main.tpl");
    $smarty->display($_MainFooterPage);



?>