<?php /* Smarty version Smarty3-RC3, created on 2016-05-08 10:55:03
         compiled from "/home/taiwannt/public_html/admin//templates/Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1511181951572eaa8705a545-74086309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95abf1ef98268976553311f01d34067c0b10f2f7' => 
    array (
      0 => '/home/taiwannt/public_html/admin//templates/Main.tpl',
      1 => 1462674500,
    ),
  ),
  'nocache_hash' => '1511181951572eaa8705a545-74086309',
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