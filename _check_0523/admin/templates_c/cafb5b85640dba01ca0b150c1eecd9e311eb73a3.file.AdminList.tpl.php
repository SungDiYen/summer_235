<?php /* Smarty version Smarty3-RC3, created on 2015-09-12 23:00:05
         compiled from "C:/xampp/htdocs/uminohime/admin/\templates\AdminList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3161955f43df577c823-09981532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cafb5b85640dba01ca0b150c1eecd9e311eb73a3' => 
    array (
      0 => 'C:/xampp/htdocs/uminohime/admin/\\templates\\AdminList.tpl',
      1 => 1415624042,
    ),
  ),
  'nocache_hash' => '3161955f43df577c823-09981532',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>
                <!--<ol class="breadcrumb">
                  <li><a href="Main.php"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a></li>
                  <li class="active"><a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
"><i class="fa fa-edit"></i> <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</a></li>
                </ol>-->
            </div>

        </div>
        <!--<div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                        <label>
                        	查詢:<input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                        </label>
                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row">
            <div class="col-lg-12">
            	<div class="pull-right" style="margin-bottom: 10px;">
                    <button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit'"><i class="fa fa-plus"></i> 新增帳號</button> 
                </div>
                        
                <div class="table-responsive" style="clear:both">                            
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <tr>
                            <th width="60px">編號</th>
                            <th>帳號</th>
                            <th>姓名</th>
                            <th width="60px">編輯</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['no'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['uid'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['admin_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['admin_id'];?>
'" title="刪除"><i class="fa fa-trash-o"></i></a> 
                            </td>
                        </tr>
                       <?php }} ?>
                    </table>
                    
                    <div class="pages"> 
                    <?php echo $_smarty_tpl->getVariable('PageStr')->value;?>
  	
                    </div>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
   
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>