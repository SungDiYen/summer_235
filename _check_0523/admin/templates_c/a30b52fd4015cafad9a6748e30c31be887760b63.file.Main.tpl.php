<?php /* Smarty version Smarty3-RC3, created on 2014-04-27 16:59:35
         compiled from "C:/AppServ/www/dac/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12720535cc6f7bc5418-22003383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a30b52fd4015cafad9a6748e30c31be887760b63' => 
    array (
      0 => 'C:/AppServ/www/dac/admin/\\templates\\Main.tpl',
      1 => 1398589169,
    ),
  ),
  'nocache_hash' => '12720535cc6f7bc5418-22003383',
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