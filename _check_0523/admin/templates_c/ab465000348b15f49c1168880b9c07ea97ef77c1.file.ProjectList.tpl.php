<?php /* Smarty version Smarty3-RC3, created on 2014-07-12 22:54:35
         compiled from "C:/AppServ/www/kttline/admin/\templates\ProjectList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2170453c14c2bb42d23-31790318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab465000348b15f49c1168880b9c07ea97ef77c1' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\ProjectList.tpl',
      1 => 1402498977,
    ),
  ),
  'nocache_hash' => '2170453c14c2bb42d23-31790318',
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
        <div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                    	<button type="button" class="btn btn-outline btn-info" <?php if ("all"==$_smarty_tpl->getVariable('_PStatus')->value){?>style="background-color:#5bc0de;color:#fff"<?php }?> onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=settype&type=all'">全部</button>
                        <button type="button" class="btn btn-outline btn-info" <?php if ("process"==$_smarty_tpl->getVariable('_PStatus')->value){?>style="background-color:#5bc0de;color:#fff"<?php }?> onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=settype&type=process'">派遣中</button>
                        <button type="button" class="btn btn-outline btn-info" <?php if ("dispatched"==$_smarty_tpl->getVariable('_PStatus')->value){?>style="background-color:#5bc0de;color:#fff"<?php }?> onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=settype&type=dispatched'">已完成派遣</button>
                        <button type="button" class="btn btn-outline btn-info" <?php if ("complete"==$_smarty_tpl->getVariable('_PStatus')->value){?>style="background-color:#5bc0de;color:#fff"<?php }?> onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=settype&type=complete'">已完成案件</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
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
                        	
                            <!--<button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('確認刪除?')) $('#ListForm').submit();"><i class="fa fa-trash-o"></i> 刪除</button>-->
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
                                    <th>案件編號</th>
                                    <th>案件名稱</th>
                                    <th>時間</th>
                                    <th>工作地點</th>
                                    <th>總人數</th>
                                    <th>待確認人數</th>
                                    <th>未派遣人數</th>
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
                                    <td>
                                    	<?php echo $_smarty_tpl->tpl_vars['obj']->value['projectid'];?>

                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['projname'];?>
</td>
                                    <td>起<?php echo $_smarty_tpl->tpl_vars['obj']->value['workstart'];?>
<br>迄<?php echo $_smarty_tpl->tpl_vars['obj']->value['workend'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['workarea'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['totalnum'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['dispatch'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['unpatch'];?>
</td>
                                    <td>
                                    	<a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                        <!--<a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
'" title="刪除"><i class="fa fa-trash-o"></i></a> -->
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