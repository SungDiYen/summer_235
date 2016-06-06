<?php /* Smarty version Smarty3-RC3, created on 2015-04-19 10:50:12
         compiled from "C:/xampp/htdocs/blissfullybali/admin/\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8521553317e4b10527-28624964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b4c69dfd2e8981a8f663ef47aff5f601edf4632' => 
    array (
      0 => 'C:/xampp/htdocs/blissfullybali/admin/\\templates\\index.tpl',
      1 => 1415624034,
    ),
  ),
  'nocache_hash' => '8521553317e4b10527-28624964',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-tw" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title><?php echo $_smarty_tpl->getVariable('WebTitle')->value;?>
</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript">

function logingo() {

  if($("#s_id").val() == "" || $("#s_id")=="Account"){
    alert("請填寫管理者帳號"); 
  }else{
    if($("#s_pwd").val() == "" || $("#s_pwd").val()=="Password"){
      alert("請填寫管理者密碼");
    }else{
      document.forms["form1"].submit();
    }
  }

}
</script>
</head>
<body id="index_cont" class="login_body">
	<form method="POST" name="form1" action="index.php?flag=login" onsubmit="logingo(); return false;" autocomplete="off">
	<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<h2>Login</h2>

			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">

					<input type="text" name="s_id" id="s_id" value="Account" onclick="this.value = ''" class="user">
					<img class="user_user" src="./images/mailicon.png" alt="">

				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">

					<input type="password" name="s_pwd" id="s_pwd" value="Password" onclick="this.value = ''" class="user">
					<img class="user_password" src="./images/passicon.png" alt="">

				</div>

				<div id="password_inputright"></div>

			</div>
            
            <div id="code_input">

				<div id="code_inputleft"></div>

				<div id="code_inputmiddle">

					<input type="text" name="code" id="code" value="驗證碼" onclick="this.value = ''" class="user">
					<img src="showrandimg.php" id="rand-img" alt="驗證碼" class="user_code" />
					<a href="#" id="reload-img" class="user_reload"><img src="images/login_resetbtn.jpg" width="40" height="27" /></a><script src="js/validation.js" type="text/javascript"></script>

				</div>

				<div id="code_inputright"></div>

			</div>

			<div id="submit">

				<input type="submit" id="submit1" value="">

			</div>


			

		</div>

		<div id="wrapperbottom"></div>
		
		<div id="powered">
		
		</div>
	</div>
    </form>

</body>
</html>