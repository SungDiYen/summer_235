<?php /* Smarty version Smarty3-RC3, created on 2014-04-27 20:45:47
         compiled from "C:/AppServ/www/kttline/admin/\templates\Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13469535cfbfbbf11a3-34921293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a0e23c7342aa4329f155f01220895f298ca9ae7' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\Menu.tpl',
      1 => 1398516051,
    ),
  ),
  'nocache_hash' => '13469535cfbfbbf11a3-34921293',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

       		<div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                    	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('UserAuthMenu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
?>
                            <li>
                                <a class="nav_list box_title <?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
<span class="arrow_down pngbg"></span>
                                <?php if (count($_smarty_tpl->tpl_vars['menu']->value['sub'])>0){?>
                                <span class="fa arrow"></span>
                                <?php }?>
                                </a>
                                <ul class="nav nav-second-level collapse <?php if ($_smarty_tpl->tpl_vars['menu']->value['title']==$_smarty_tpl->getVariable('_Title')->value){?>in<?php }?>" style="height: auto;">
                                    <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['sub']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['sub']->value['hidden']==false){?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['sub']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['sub']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</a></li>
                                        <?php }?>
                                    <?php }} ?>
                                </ul>
                            </li>
                       <?php }} ?>
                        
                       
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>