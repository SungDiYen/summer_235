<?php
	
	define('AdminUserNO'       , 'KoikeyaUserNO');
	define('AdminUserName'     , 'KoikeyaUserName');
	define('AdminUserUID'      , 'KoikeyaUserUID');
	define('AdminSessTitle'    , 'KoikeyaSys');
	define('WebSessTitle'      , 'KoikeyaWeb');
	/////資料庫//////////////////////////////////////////////////
	define('Table_Admin'              , 'admin');  

	// 網站設定
	define('Table_Sysmenu'              , 'web_sysmenu');            //系統選單
	define('Table_News'                 , 'web_news');               //News
	define('Table_Movie'                , 'movie_list');              

	
	define('Table_Config'               , 'web_config');             //Config
	
	
    //使用者資料
	/*$sqlstr = "select admin_id,name from ".Table_Admin." where DelFlag='' order by admin_id desc";
	$usertemp = $g_db->getAll($sqlstr); 
	$_UserData = array();
	foreach($usertemp as $key => $val){
		$_UserData[$val['admin_id']]['name'] = $val['name'];
	} */
	
	//config
	/*$sqlstr = "select * from ".Table_Config." where config_type='company'";
	$CTemp  = $g_db->getAll($sqlstr);
	$StoreInfo = array();
	foreach($CTemp as $ctkey => $ctval){
		$StoreInfo[$ctval['config_name']] = $ctval['config_text'];
	}*/
	
	function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
	}	
	//mail
	function SendMail($Subject,$MailContent,$WebTitle,$UserName,$Passwd,$SendMail){
		$mailer     = new PHPMailer();
		//信件寄出
		$mailer->SMTPAuth =true;	
		$mailer->SMTPSecure = "ssl";	
	
		$mailer->Port     = 465;	
		$mailer->Username = $UserName;
		$mailer->Password = $Passwd;
			
		$mailer->CharSet  ='UTF-8';
		$mailer->IsSMTP(); 
		$mailer->Host     = "jp.g-dns.com";
		$mailer->From     = $UserName;
		$mailer->FromName = $WebTitle;
		$mailer->Subject  = $mailer->EncodeHeader($Subject);
		$mailer->MsgHTML($MailContent);	
	
		$mailer->addAddress($SendMail);	
		$mailer->IsHTML(true);
		$mailer->Send();
	}
?>