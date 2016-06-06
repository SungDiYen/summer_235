<?php /* Smarty version Smarty3-RC3, created on 2016-05-07 22:44:14
         compiled from "C:/xampp/htdocs/taiwan235n/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1023572dff3e371ef8-64987365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97bd666ec0653d3668d262d34e009be57296b77e' => 
    array (
      0 => 'C:/xampp/htdocs/taiwan235n/admin/\\templates\\Main.tpl',
      1 => 1452998436,
    ),
  ),
  'nocache_hash' => '1023572dff3e371ef8-64987365',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

   		 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">登入資料</h3>
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