<?

	session_start();
	header("Content-type: text/html; charset=utf-8"); 

	if (!defined('Usable'))
	{
	    die('');
	}

	//Tome Zone
	if (version_compare( phpversion() , '5.1.0', '>=')){
		date_default_timezone_set('Asia/Taipei'); //PHP5
	} else {
		putenv("TZ=Asia/Taipei"); //PHP4
	}

	//Debug Mode
	if (!defined('DebugMode')) {
    define('DebugMode', false);
	}

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	//Path
	define('Root_Path',         $_SERVER['DOCUMENT_ROOT'].'/admin/');
	define('Upload_Path',       $_SERVER['DOCUMENT_ROOT'].'/upload/');
	define('Root_Url',          'http://www.taiwan235n.tw/');
	define('Upload_Url',        'http://www.taiwan235n.tw/upload/');
	define('Https_Url',         'https://www.taiwan235n.tw');

	//Include Tools
	include_once(Root_Path . 'include' . DS . 'smarty' . DS . 'Smarty.class.php');   //smarty
	include_once(Root_Path . 'include' . DS . 'ckeditor' . DS . 'ckeditor.php');   //fckeditor
	include_once(Root_Path . 'include' . DS . 'phpmailer' . DS . 'class.phpmailer.php');  
	include_once(Root_Path . 'include' . DS . 'phpmailer' . DS . 'class.smtp.php');   
	//Include Class
	include_once(Root_Path . 'include' . DS . 'class' . DS . 'MySql.php');           //MySQL
	include_once(Root_Path . 'include' . DS . 'class' . DS . 'Page.php');            //Page Function
	include_once(Root_Path . 'include' . DS . 'class' . DS . 'PageShow.php');        //Page Function
	include_once(Root_Path . 'include' . DS . 'class' . DS . 'AdminCheck.php');      //
	

	//Database
	include_once(Root_Path . 'include' . DS . 'db.php');
	
	//Vars	
	include_once(Root_Path . 'include' . DS . 'var.php');
	
	//Smarty
	$smarty = new Smarty();
	$smarty->template_dir = Root_Path . DS . "templates";
	$smarty->compile_dir  = Root_Path . DS . "templates_c";
	$smarty->cache_dir    = Root_Path . DS . "cache";
	$smarty->config_dir   = Root_Path . DS . "configs";
	
	//web config
	$_WebInfo['title'] = "臺灣夏至235後台管理";
	
	
	$smarty->assign("WebTitle",$_WebInfo['title']);
	
	
	function MaskSubStr($str,$type,$len){
	  $name = iconv_strlen($str,"utf-8");
	  if(!empty($name)){
		  switch($type){
			  case "mid":
				  $name1 = iconv_substr( $str ,0, 1, "utf-8");
				  $name2 = iconv_substr( $str ,$name-1, 1, "utf-8");
				  $name = $name1."***".$name2;
			  break;
			  case "right":
				  $name1 = iconv_substr( $str ,0, $name-$len, "utf-8");
				  $name = $name1."*******";
			  break;
			  
		  }
		  return $name;
	  }
   }
   
   //function
	function getFileName($file){
		$udata = explode("/",$file);
		return array_pop($udata);
	}
	
	
	//中文字截字串
	function utf8_substr($StrInput,$strStart,$strLen){
		//對字串做URL Eecode
		$StrInput = mb_substr($StrInput,$strStart,mb_strlen($StrInput));
		$iString = urlencode($StrInput);
		$lstrResult="";
		$istrLen = 0;
		$k = 0;
		do{
			$lstrChar = substr($iString, $k, 1);
			if($lstrChar == "%"){
				$ThisChr = hexdec(substr($iString, $k+1, 2));
				if($ThisChr >= 128){
					if($istrLen+3 < $strLen){
						$lstrResult .= urldecode(substr($iString, $k, 9));
						$k = $k + 9;
						$istrLen+=3;
					}else{
						$k = $k + 9;
						$istrLen+=3;
					}
				}else{
					$lstrResult .= urldecode(substr($iString, $k, 3));
					$k = $k + 3;
					$istrLen+=2;
				}
				}else{
				$lstrResult .= urldecode(substr($iString, $k, 1));
				$k = $k + 1;
				$istrLen++;
			}
		}while ($k < strlen($iString) && $istrLen < $strLen);
		return $lstrResult;
	}
	
	//
	function StrFilter($v){
		$v = strip_tags(mysql_real_escape_string(trim($v)));
		return $v;
	}
?>
