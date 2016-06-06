<?php /* Smarty version Smarty3-RC3, created on 2015-09-12 17:51:26
         compiled from "C:/xampp/htdocs/uminohime/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35255f3f59eaeef79-75583165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd42bfcf6f79fb25f037cb7e95f8de30c31a998' => 
    array (
      0 => 'C:/xampp/htdocs/uminohime/admin/\\templates\\Main.tpl',
      1 => 1415624038,
    ),
  ),
  'nocache_hash' => '35255f3f59eaeef79-75583165',
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