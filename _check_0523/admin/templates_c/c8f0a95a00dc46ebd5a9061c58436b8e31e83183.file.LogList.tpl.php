<?php /* Smarty version Smarty3-RC3, created on 2014-04-26 22:48:42
         compiled from "C:/AppServ/www/dac/admin/\templates\LogList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607535bc74a8e7986-13094387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f0a95a00dc46ebd5a9061c58436b8e31e83183' => 
    array (
      0 => 'C:/AppServ/www/dac/admin/\\templates\\LogList.tpl',
      1 => 1398523714,
    ),
  ),
  'nocache_hash' => '1607535bc74a8e7986-13094387',
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
        <form name="SearchForm" id="SearchForm" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search">
        <div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-12">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                        <label>
                        	查詢:日期<input type="text" name="start_date" class="form-control input-sm date_pick" aria-controls="dataTables-example" value="<?php echo $_smarty_tpl->getVariable('SearchSDate')->value;?>
">~
                            		<input type="text" name="end_date" class="form-control input-sm date_pick" aria-controls="dataTables-example" value="<?php echo $_smarty_tpl->getVariable('SearchEDate')->value;?>
">
                        </label>
                        <button type="button" class="btn btn-primary btn-xs" onclick="$('#SearchForm').submit()"><i class="fa fa-search"></i> 搜尋</button>
                        <?php if ($_smarty_tpl->getVariable('WhereStr')->value!=''){?>
                        	<button type="button" class="btn btn-warning btn-xs" onclick="$('#SearchForm').attr('action','<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search_clear');$('#SearchForm').submit()"><i class="fa fa-times"></i> 清除搜尋</button>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                <tr>
                                    <th width="60px">編號</th>
                                    <th>類別</th>
                                    <th>會員帳號</th>
                                    <th>內容</th>
                                    <th width="120px">新增時間</th>
                                </tr>
                                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['no'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getVariable('_LogType')->value[$_smarty_tpl->tpl_vars['obj']->value['member_log_type']];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['member_uid'];?>
</td>
                                    <td>
                                    	<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_log_content'];?>

                                    </td>
                                    <td>
                                    	<?php echo $_smarty_tpl->tpl_vars['obj']->value['create_time'];?>

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
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
   
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>