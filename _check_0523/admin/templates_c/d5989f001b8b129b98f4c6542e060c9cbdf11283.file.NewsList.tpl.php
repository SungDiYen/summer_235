<?php /* Smarty version Smarty3-RC3, created on 2014-10-11 21:19:55
         compiled from "C:/xampp/htdocs/koikeya/admin/\templates\NewsList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125854392e7b7f1d26-52325147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5989f001b8b129b98f4c6542e060c9cbdf11283' => 
    array (
      0 => 'C:/xampp/htdocs/koikeya/admin/\\templates\\NewsList.tpl',
      1 => 1413033426,
    ),
  ),
  'nocache_hash' => '125854392e7b7f1d26-52325147',
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
        
        <div class="row">
            <div class="col-lg-12">
            	<div class="pull-right" style="margin-bottom: 10px;">
                    <button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit'"><i class="fa fa-plus"></i> 新增</button>
                    <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('確認刪除?')) $('#ListForm').submit();"><i class="fa fa-trash-o"></i> 刪除</button>
                </div>
                
                <form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=delete" >
                	<div class="table-responsive">
                            
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <tr>
                                <th width="60px"></th>
                                <th>標題</th>
                                <th width="100px">發佈日期</th>
                                <th width="80px">是否顯示</th>
                                <th width="60px">編輯</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            <tr>
                                <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['news_id'];?>
" /></td>
                               
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['obj']->value['news_title'];?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['news_date'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['show_status'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['news_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['news_id'];?>
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