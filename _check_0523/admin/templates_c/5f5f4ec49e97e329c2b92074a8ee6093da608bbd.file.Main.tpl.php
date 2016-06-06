<?php /* Smarty version Smarty3-RC3, created on 2014-08-27 22:17:15
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1529653fde86b60e197-58089971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5f4ec49e97e329c2b92074a8ee6093da608bbd' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\Main.tpl',
      1 => 1409046735,
    ),
  ),
  'nocache_hash' => '1529653fde86b60e197-58089971',
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