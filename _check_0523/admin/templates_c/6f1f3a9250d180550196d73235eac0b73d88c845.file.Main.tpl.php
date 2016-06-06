<?php /* Smarty version Smarty3-RC3, created on 2014-09-27 21:35:29
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269235426bd2121c1e0-22810807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f1f3a9250d180550196d73235eac0b73d88c845' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\Main.tpl',
      1 => 1409046735,
    ),
  ),
  'nocache_hash' => '269235426bd2121c1e0-22810807',
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