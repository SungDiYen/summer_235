<?php /* Smarty version Smarty3-RC3, created on 2015-04-19 10:50:21
         compiled from "C:/xampp/htdocs/blissfullybali/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19580553317ed4d87e1-22902942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8fd8bd92da1f8c2a142002a2a245022b07c857' => 
    array (
      0 => 'C:/xampp/htdocs/blissfullybali/admin/\\templates\\Main.tpl',
      1 => 1415624038,
    ),
  ),
  'nocache_hash' => '19580553317ed4d87e1-22902942',
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