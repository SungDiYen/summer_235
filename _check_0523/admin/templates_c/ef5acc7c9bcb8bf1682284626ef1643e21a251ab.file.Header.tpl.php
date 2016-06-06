<?php /* Smarty version Smarty3-RC3, created on 2013-10-17 11:00:53
         compiled from "C:/AppServ/www/hair_finance/\templates\Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13886525f52e5c52f69-57705475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5acc7c9bcb8bf1682284626ef1643e21a251ab' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\Header.tpl',
      1 => 1381978849,
    ),
  ),
  'nocache_hash' => '13886525f52e5c52f69-57705475',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-tw" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>美髮網帳管系統</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="js/datepicker/jquery.datepick.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script type="text/javascript" src="js/datepicker/jquery.datepick.js"></script>
<script type="text/javascript" src="js/web.js"></script>
<script type="text/javascript" src="js/area.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script>
 $(document).ready(function(){
 	$("#nav > .<?php echo $_smarty_tpl->getVariable('_Title')->value;?>
").click();
 });
</script>
</head>

<body>
<div id="container">
  <div id="header">
  	<a id="logo" href="main.php"></a>
    <div id="header_settings">    	
      <a id="header_icon_home" href="main.php"></a>
      <a id="header_icon_logout" href="logout.php"></a>
      <!--<a id="header_icon_sys" href="#"></a> -->
      <!--<a id="header_icon_cfp" href="#"></a>-->          	
    </div>  	
  </div>
  <div id="content">