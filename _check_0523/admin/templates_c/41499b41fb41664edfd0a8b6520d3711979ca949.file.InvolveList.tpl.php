<?php /* Smarty version Smarty3-RC3, created on 2016-05-07 23:26:35
         compiled from "C:/xampp/htdocs/taiwan235n/admin/\templates\InvolveList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3908572e092b2adf18-46850368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41499b41fb41664edfd0a8b6520d3711979ca949' => 
    array (
      0 => 'C:/xampp/htdocs/taiwan235n/admin/\\templates\\InvolveList.tpl',
      1 => 1462634791,
    ),
  ),
  'nocache_hash' => '3908572e092b2adf18-46850368',
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
            </div>

        </div>
        <form name="SearchForm" id="SearchForm" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search">
        <div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-12">
                    <div id="dataTables-example_filter" class="dataTables_filter" style="margin-bottom:10px">
                       
                        查詢:
                        <select name="SearchStatus" class="form-control input-sm" >
                            <option value="">是否顯示</option>
                            <option value="Y" <?php if ($_smarty_tpl->getVariable('SearchStatus')->value=="Y"){?>selected<?php }?>>是</option>
                            <option value="N" <?php if ($_smarty_tpl->getVariable('SearchStatus')->value=="N"){?>selected<?php }?>>否</option>
                        </select>       
                        <input type="text" name="SearchName" class="form-control input-sm" aria-controls="dataTables-example" value="<?php echo $_smarty_tpl->getVariable('SearchName')->value;?>
" placeholder="請輸入關鍵字">
                        
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
            	<div class="pull-right" style="margin-bottom: 10px;">
                    <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('確認刪除?')) $('#ListForm').submit();"><i class="fa fa-trash-o"></i> 刪除</button>
                </div>
                
                <form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=delete" >
                	<div class="table-responsive">
                            
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <tr>
                                <th width="60px"></th>
                                <th>姓名</th>
                                <th>聯絡電話</th>
                                <th>email</th>
                                <th>作品名稱</th>
                                <th width="100px">新增日期 <a class="fa <?php if ($_smarty_tpl->getVariable('sortby')->value=='pdate'){?>fa-sort-<?php echo $_smarty_tpl->getVariable('sorticon')->value;?>
<?php }else{ ?>fa-sort<?php }?>" href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=sort&sortby=pdate"></a></th>
                                <th width="80px">是否顯示</th>
                                <th width="60px">編輯</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            <tr>
                                <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['movie_list_id'];?>
" /></td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['obj']->value['involve_name'];?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['involve_tel'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['involve_email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['involve_movie'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['create_time'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['show_status'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['movie_list_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['movie_list_id'];?>
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
                </form>
              
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
   
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>