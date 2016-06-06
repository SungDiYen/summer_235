<?php /* Smarty version Smarty3-RC3, created on 2015-11-28 21:08:08
         compiled from "C:/xampp/htdocs/tekkonjp/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259835659a738a1c6e8-20596628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ebecdd1228e6bc26d90b6d947310dd9a558655f' => 
    array (
      0 => 'C:/xampp/htdocs/tekkonjp/admin/\\templates\\Main.tpl',
      1 => 1415624038,
    ),
  ),
  'nocache_hash' => '259835659a738a1c6e8-20596628',
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