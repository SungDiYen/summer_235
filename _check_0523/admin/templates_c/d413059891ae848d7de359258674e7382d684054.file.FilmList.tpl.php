<?php /* Smarty version Smarty3-RC3, created on 2014-10-04 22:19:32
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\FilmList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32613543001f441dd24-94450815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd413059891ae848d7de359258674e7382d684054' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\FilmList.tpl',
      1 => 1412432147,
    ),
  ),
  'nocache_hash' => '32613543001f441dd24-94450815',
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
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                    	
                        <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_FilmType')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                        	<button type="button" class="btn btn-outline btn-info  btn-sm" <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->getVariable('_Type')->value){?>style="background-color:#5bc0de;color:#fff"<?php }?> onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=settype&type=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'"><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</button>
                        <?php }} ?>
                        
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
                            <th>圖片</th>
                            <th width="80px">排序</th>
                            <th width="80px">是否顯示</th>
                            <th width="60px">編輯</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['film_id'];?>
" /></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['film_title'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['obj']->value['film_pic']!=''){?>
                                    <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['obj']->value['film_pic'];?>
" width="300" ></img>
                                <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sortnum'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['show_status'];?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['film_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['film_id'];?>
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