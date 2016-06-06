<?php /* Smarty version Smarty3-RC3, created on 2014-10-12 20:59:53
         compiled from "/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1354836204543a7b49eddcd4-35963995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b09ae6ca527e5cc636da7f99eb84b20bb51c92a1' => 
    array (
      0 => '/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/Main.tpl',
      1 => 1413117553,
    ),
  ),
  'nocache_hash' => '1354836204543a7b49eddcd4-35963995',
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