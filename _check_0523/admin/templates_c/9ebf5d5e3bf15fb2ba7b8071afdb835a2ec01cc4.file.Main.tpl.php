<?php /* Smarty version Smarty3-RC3, created on 2014-04-27 20:45:47
         compiled from "C:/AppServ/www/kttline/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27922535cfbfbcd20f4-99834661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ebf5d5e3bf15fb2ba7b8071afdb835a2ec01cc4' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\Main.tpl',
      1 => 1398589169,
    ),
  ),
  'nocache_hash' => '27922535cfbfbcd20f4-99834661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

   		 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">登入資料</h1>
                    <p>帳號：<?php echo $_smarty_tpl->getVariable('UserUID')->value;?>
</p>
                    <p>姓名：<?php echo $_smarty_tpl->getVariable('UserName')->value;?>
</p>
                    <p>登入時間：<?php echo $_smarty_tpl->getVariable('UserData')->value['lastlogin'];?>
</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->