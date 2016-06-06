<?php /* Smarty version Smarty3-RC3, created on 2014-04-27 17:09:09
         compiled from "C:/AppServ/www/dac/admin/\templates\MemberList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22150535cc935be2199-90766875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd10cdcd991e478f8012eb96afd8241e7a4be9165' => 
    array (
      0 => 'C:/AppServ/www/dac/admin/\\templates\\MemberList.tpl',
      1 => 1398589369,
    ),
  ),
  'nocache_hash' => '22150535cc935be2199-90766875',
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
                        	查詢:會員名稱/帳號<input type="text" name="SearchName" class="form-control input-sm" aria-controls="dataTables-example" value="<?php echo $_smarty_tpl->getVariable('SearchName')->value;?>
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

                        <div class="pull-right">
                            <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('確認刪除?')) $('#ListForm').submit();"><i class="fa fa-trash-o"></i> 刪除</button>
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
                                    <th>帳號</th>
                                    <th>姓名</th>
                                    <th>註銷</th>
                                    <th width="120px">建檔日</th>
                                    <th width="60px">編輯</th>
                                </tr>
                                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                                <tr>
                                    <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_id'];?>
" /></td>
                                    <td>
                                    	<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_uid'];?>

                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['member_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getVariable('MebStatus')->value[$_smarty_tpl->tpl_vars['obj']->value['member_status']];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['create_time'];?>
</td>
                                    <td>
                                    	<a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                       	<a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_id'];?>
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