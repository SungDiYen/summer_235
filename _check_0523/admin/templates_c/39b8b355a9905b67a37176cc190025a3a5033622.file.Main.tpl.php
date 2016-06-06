<?php /* Smarty version Smarty3-RC3, created on 2014-11-06 18:23:55
         compiled from "/var/www/vhosts/twkoikeya.com.tw/httpdocs/admin//templates/Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526430417545b4c3b330313-46568444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39b8b355a9905b67a37176cc190025a3a5033622' => 
    array (
      0 => '/var/www/vhosts/twkoikeya.com.tw/httpdocs/admin//templates/Main.tpl',
      1 => 1415104924,
    ),
  ),
  'nocache_hash' => '1526430417545b4c3b330313-46568444',
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