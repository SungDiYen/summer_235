<?php /* Smarty version Smarty3-RC3, created on 2014-11-12 22:24:46
         compiled from "C:/xampp/htdocs/koikeya/admin/\templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2879054392e5cb520a2-41694911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da5ce09e06ab3c54a985919befd63fb43253bc41' => 
    array (
      0 => 'C:/xampp/htdocs/koikeya/admin/\\templates\\Main.tpl',
      1 => 1415624038,
    ),
  ),
  'nocache_hash' => '2879054392e5cb520a2-41694911',
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