<?php /* Smarty version Smarty3-RC3, created on 2014-08-30 20:21:50
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\ProdQuesList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289705401c1de5e53b3-72888461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75be60d026c71fabf8df277d25a5237ffa01eddb' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\ProdQuesList.tpl',
      1 => 1409400987,
    ),
  ),
  'nocache_hash' => '289705401c1de5e53b3-72888461',
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
                    <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('確認刪除?')) $('#ListForm').submit();"><i class="fa fa-trash-o"></i> 刪除</button>
                </div>
                <form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=delete" >
                    <div class="table-responsive">
                        
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <tr>
                                <th width="60px"></th>
                                <th width="200px">商品名稱</th>
                                <th>問題</th>
                                <th width="100px">回覆狀態</th>
                                <th width="80px">是否顯示</th>
                                <th width="60px">編輯</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            <tr>
                                <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['question_id'];?>
" /></td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['obj']->value['product_name'];?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['question_content'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['obj']->value['question_reply']==''){?>未回覆<?php }else{ ?>已回覆<?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['show_status'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['question_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['question_id'];?>
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