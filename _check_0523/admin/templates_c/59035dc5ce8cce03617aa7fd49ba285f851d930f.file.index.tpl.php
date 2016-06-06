<?php /* Smarty version Smarty3-RC3, created on 2013-10-17 09:18:00
         compiled from "C:/AppServ/www/hair_finance/\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22415525f3ac82617a4-62889541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59035dc5ce8cce03617aa7fd49ba285f851d930f' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\index.tpl',
      1 => 1380871149,
    ),
  ),
  'nocache_hash' => '22415525f3ac82617a4-62889541',
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
<link href="css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript">

function logingo() {

  if(document.forms["form1"].elements["s_id"].value == ""){
    alert("請填寫管理者帳號"); 
  }else{
    if(document.forms["form1"].elements["s_pwd"].value == ""){
      alert("請填寫管理者密碼");
    }else{
      document.forms["form1"].submit();
    }
  }

}
</script>
</head>


<body id="index_cont" class="login_body">
<div id="container">
  <div id="content">
  	<form method=POST name=form1 action="index.php?flag=login" onsubmit="logingo(); return false;" autocomplete="off">
  	<input type=hidden name=workflag value='first'>
      <table class="index_login_table" cellspacing="0" style=" top:-6px">
        <tr>
          <th></th>
          <td colspan="2"><input name="s_id" type="text" /></td>
        </tr>
        <tr>
          <th></th>
          <td colspan="2"><input name="s_pwd" type="password" id="randomKeyboard" /></td>
        </tr>
        <tr>
          <th></th>
          <td colspan="2"><input name="code" type="text" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><img src="showrandimg.php" id="rand-img" alt="驗證碼" />
				<a href="#" id="reload-img"><img src="images/login_resetbtn.jpg" width="40" height="27" /></a><script src="js/validation.js" type="text/javascript"></script></td>
        </tr>
        <tr>
          <th colspan="3"><table class="login_btn_table" cellspacing="0">
            <tr>
              <th class="verification_code">&nbsp;</th>
              <th><input type="submit" value="" style="background-image:url(images/login_btn.png); width:105px; height:36px; border:0px" /></th>
              </tr>
  </table>
  </th>
        </tr>
  </table>
  </form>
  </div><!--End of content-->
</div><!--End of container-->
</body>
</html>