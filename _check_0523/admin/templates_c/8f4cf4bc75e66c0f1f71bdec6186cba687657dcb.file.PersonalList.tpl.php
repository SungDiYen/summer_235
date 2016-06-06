<?php /* Smarty version Smarty3-RC3, created on 2014-05-11 20:54:45
         compiled from "C:/AppServ/www/kttline/admin/\templates\PersonalList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18933536f7315a6c065-56202058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f4cf4bc75e66c0f1f71bdec6186cba687657dcb' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\PersonalList.tpl',
      1 => 1399812879,
    ),
  ),
  'nocache_hash' => '18933536f7315a6c065-56202058',
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
                <h1 class="page-header"><?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</h1>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                        <div class="pull-right">
                        	<!--<button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit'"><i class="fa fa-plus"></i> 新增</button>-->
                            <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('確認停權?')) $('#ListForm').submit();"><i class="fa fa-trash-o"></i> 停權</button>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=delete" >
                    <div class="panel-body">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                <tr>
                                    <th width="60px"></th>
                                    <th>身分證編號</th>
                                    <th>姓名</th>
                                    <th>性別</th>
                                    <th>醫療類別</th>
                                    <th>聯絡電話</th>
                                    <th width="80px">狀態</th>
                                    <th width="60px">編輯</th>
                                </tr>
                                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                                <tr>
                                    <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" /></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['idnumber'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
                                    <td>
                                    	<?php echo $_smarty_tpl->tpl_vars['obj']->value['sex'];?>

                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['doctortype'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['tel'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getVariable('_MebStatus')->value[$_smarty_tpl->tpl_vars['obj']->value['meb_status']];?>
</td>
                                    <td>
                                    	<a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
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
                    <!-- /.panel-body -->
                    </form>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
   
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>