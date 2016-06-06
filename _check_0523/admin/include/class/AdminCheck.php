<?php

class AdminCheck {
	
	var $_UserID;
	var $_UserNO;
	var $_UserName;
	var $_UserLev;
	var $_SessionTitle;
	
	function AdminCheck($USERID,$USERNO,$USERNAME) {
		
		$this->_UserID   = $USERID;
		$this->_UserNO   = $USERNO;
		$this->_UserName = $USERNAME;
		
	}
	
	function login($PWD,$cookie){
		global $g_db;
		$sql = "SELECT * FROM `admin` WHERE uid='".$this->_UserID."' AND DelFlag=''";
      	$num = $g_db->numRows($g_db->query($sql));
		$userdata = $g_db->getRow($sql);
		if($num > 0 && $userdata['passwd'] == $PWD){
			
			$auth = ($userdata["auth"]!='')?json_decode($userdata["auth"],true):"";
			if(is_array($auth)){
				$_SESSION[AdminUserNO]   = $userdata["admin_id"];
				$_SESSION[AdminUserUID]  = $userdata["uid"];
				$_SESSION[AdminUserName] = $userdata["name"];
				//cookie
				if($cookie){
					setcookie("AdminUserNO",$_SESSION[AdminUserNO],time()+3600*24,'/');	
					setcookie("AdminUserUID",$_SESSION[AdminUserUID],time()+3600*24,'/');
					setcookie("AdminUserName",$_SESSION[AdminUserName],time()+3600*24,'/');	
				}
				//最近登入時間
				$updsql="update admin set lastlogin=logintime,logintime=now() where admin_id='".$userdata["admin_id"]."'";
				$g_db->query($updsql);
				//----------------------------------------------------------------------------
				$result['auth'] = true;
				$reault['msg']  = "";
			}else{
				$result['auth'] = false;
				$reault['msg']  = "尚未開通權限";
			}
			
		}else{
			$result['auth'] = false;
			$reault['msg']  = "您的帳號密碼不符";
		}
		
		return $result;
	}
	
	function check($filename){
		
		if(empty($_SESSION[AdminUserNO])){
			
			if(!empty($_COOKIE[AdminUserNO])){
				$_SESSION[AdminUserNO]   = $_COOKIE[AdminUserNO];
				$_SESSION[AdminUserUID]  = $_COOKIE[AdminUserUID];
				$_SESSION[AdminUserName] = $_COOKIE[AdminUserName];
				
				$this->check_auth($filename);
				
				echo "<script>history.go(0)</script>";
				
			}else{
				header("Location: logout.php");
			}
			
		}else{
			$this->check_auth($filename);
		}
		
	}
	
	function getSysMenu(){
		global $g_db;
		
		$menu = array();
		//帳號資料
		$sqlstr  = "select * from admin where admin_id = '".$this->_UserNO."'";
		$UData   = $g_db->getRow($sqlstr);
		
		$auth    = json_decode($UData['auth'],true);
		$authStr = (is_array($auth))?implode("','",$auth):"";
		//選單資料
		$sqlstr   = "select * from web_sysmenu where mainid=0 and hidden=''  order by sortnum";
		$mainData = $g_db->getAll($sqlstr);
		for($i=0;$i<count($mainData);$i++){
			$menu[$mainData[$i]['sysmenu_id']]['name']   = $mainData[$i]['menu_name'];
			$menu[$mainData[$i]['sysmenu_id']]['title']  = $mainData[$i]['menu_title'];
			$menu[$mainData[$i]['sysmenu_id']]['link']   = ($mainData[$i]['menu_link']=="") ? "javascript:void(0)" : $mainData[$i]['menu_link'];
			$menu[$mainData[$i]['sysmenu_id']]['target'] = $mainData[$i]['menu_target'];
		}
		$sqlstr  = "select * from web_sysmenu where sysmenu_id in ('".$authStr."') and mainid!=0 and hidden='' order by sortnum";
		$subData = $g_db->getAll($sqlstr);
		for($i=0;$i<count($subData);$i++){
			$menu[$subData[$i]['mainid']]['sub'][$i]['name']   = $subData[$i]['menu_name'];
			$menu[$subData[$i]['mainid']]['sub'][$i]['link']   = $subData[$i]['menu_link'];
			$menu[$subData[$i]['mainid']]['sub'][$i]['target'] = $subData[$i]['menu_target'];
		}
		if(is_array($menu)){
			foreach($menu as $key => $val){
				if(count($val['sub'])==0){
					//unset($menu[$key]);
				}
			}
		}
		return $menu;
	}
	
	function check_auth($filename){
		
		global $g_db;
		//帳號資料
		$sqlstr  = "select * from admin where admin_id = '".$this->_UserNO."'";
		$UData   = $g_db->getRow($sqlstr);
		
		$auth    = json_decode($UData['auth'],true);
		$authStr = (is_array($auth))?implode("','",$auth):"";
		//選單資料
		$sqlstr  = "select * from web_sysmenu where sysmenu_id in ('".$authStr."') and hidden='' and menu_link='".$filename."'";
		$num = $g_db->numRows($g_db->query($sqlstr));
		if($num<=0 && $filename !="HOME"){
			echo "<script>location.href='Main.php'</script>";
		}
		
	}

}

?>