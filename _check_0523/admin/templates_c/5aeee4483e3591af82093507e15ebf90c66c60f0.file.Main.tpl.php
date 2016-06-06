<?php /* Smarty version Smarty3-RC3, created on 2014-12-03 22:25:07
         compiled from "C:/xampp/htdocs/longsian/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3533547f1d43cd1d60-90770511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aeee4483e3591af82093507e15ebf90c66c60f0' => 
    array (
      0 => 'C:/xampp/htdocs/longsian/admin/\\templates\\Main.tpl',
      1 => 1415624038,
    ),
  ),
  'nocache_hash' => '3533547f1d43cd1d60-90770511',
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