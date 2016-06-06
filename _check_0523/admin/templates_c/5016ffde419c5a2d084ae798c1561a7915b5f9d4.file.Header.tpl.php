<?php /* Smarty version Smarty3-RC3, created on 2015-04-19 10:50:21
         compiled from "C:/xampp/htdocs/blissfullybali/admin/\templates\Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6734553317ed371185-20540670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5016ffde419c5a2d084ae798c1561a7915b5f9d4' => 
    array (
      0 => 'C:/xampp/htdocs/blissfullybali/admin/\\templates\\Header.tpl',
      1 => 1415624039,
    ),
  ),
  'nocache_hash' => '6734553317ed371185-20540670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-tw" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title><?php echo $_smarty_tpl->getVariable('WebTitle')->value;?>
</title>
<!-- Core CSS - Include with every page -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Page-Level Plugin CSS - Blank -->
<!-- SB Admin CSS - Include with every page -->
<link href="css/sb-admin.css" rel="stylesheet">
<link href="css/pages.css" rel="stylesheet">
<link href="js/datepicker/jquery.datepick.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" media="screen" />
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/sb-admin.js"></script>
<script src="js/datepicker/jquery.plugin.js"></script>
<script type="text/javascript" src="js/datepicker/jquery.datepick.js"></script>
<script type="text/javascript" src="js/jquery.twzipcode.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script>
	$(document).ready(function(){
		$(".date_pick").datepick(); 
	});
</script>
</head>

<body>
<div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Main.php"><?php echo $_smarty_tpl->getVariable('WebTitle')->value;?>
</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-list fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('WebLang')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                        	<li><a href="WebLangSet.php?flag=setlang&type=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="fa <?php if ($_smarty_tpl->getVariable('NowLang')->value==$_smarty_tpl->tpl_vars['key']->value){?>fa-check<?php }?> fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</a></li>
                        <?php }} ?>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="UserManage.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->