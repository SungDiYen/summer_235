<?php /* Smarty version Smarty3-RC3, created on 2014-09-14 19:44:43
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\ProductClassList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:969254157fab895867-96266805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3b14279cfa68e3285cd58b07388ea6359406d3' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\ProductClassList.tpl',
      1 => 1409478561,
    ),
  ),
  'nocache_hash' => '969254157fab895867-96266805',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function AddClass(){
		var errMsg = "";
		var $input  = $("#EditForm").find("input[name='class_name[]']");
		if($input.val()==""){
			errMsg += "請輸入類別名稱";
		}
		if(errMsg!=""){
			alert(errMsg);
		}else{
			$("#EditForm").submit();
		}

	}
	function UpdClass(){
		var errMsg = "";
		
		$("#ListForm").find("input[name='class_name[]']").each(function(v){
			if($(this).val()==""){
				errMsg = "請輸入類別名稱";
			}
		});
		
		
		if(errMsg!=""){
			alert(errMsg);
		}else{
			$("#ListForm").submit();
		}
	}
</script>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</h3>
            </div>

        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        新增<?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                        <div class="pull-right">
                        	<button type="button" class="btn btn-primary btn-xs" onclick="AddClass()"><i class="fa fa-plus"></i> 新增</button>
                          
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <form name="EditForm" id="EditForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" >
                    <div class="panel-body">
                        <div class="row">
                        	<div class="col-lg-3">
                            	<div class="form-group">
                                    <label>類別名稱</label>
                                    <input class="form-control" name="class_name[]" value="" >
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	<div class="form-group">
                                    <label>類別名稱(英)</label>
                                    <input class="form-control" name="class_name_en[]" value="" >
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	<div class="form-group">
                                    <label>排序</label>
                                    <input class="form-control" name="sortnum[]" value="" >
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	<div class="form-group">
                                    <label>是否顯示</label>
                                    <input  type="radio" name="status_0" value="Y" checked="checked" >是
                                    <input  type="radio" name="status_0" value="N" >否
                                </div>
                            </div>
                        </div>        
                        
                    </div>
                    <!-- /.panel-body -->
                    	<input type="hidden" name="ids[]" value="" />
                    </form>
                </div>
                <!-- /.panel -->
            </div>

        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
列表
                        <div class="pull-right">
                        	<button type="button" class="btn btn-primary btn-xs" onclick="UpdClass()"><i class="fa fa-plus"></i> 修改</button>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" >
                    <div class="panel-body">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                <tr>
                                    <th width="60px">項目</th>
                                    <th>名稱</th>
                                    <th>名稱(英)</th>
                                    <th width="80px">排序</th>
                                    <th width="80px">是否顯示</th>
                                    <th width="60px">管理</th>
                                </tr>
                                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']++;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataList']['index']+1;?>
</td>
                                    <td>
                                    	<input type="text" class="form-control" name="class_name[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['catalog_title'];?>
" />
                                    </td>
                                    <td>
                                    	<input type="text" class="form-control" name="class_name_en[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['catalog_subtitle'];?>
" />
                                    </td>
                                    <td>
                                    	<input type="text" class="form-control" name="sortnum[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['sortnum'];?>
" />
                                    </td>
                                    <td>
                                    	<input  type="radio" name="status_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataList']['index'];?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['obj']->value['show_status']=="Y"){?>checked<?php }?> >是
                                        <input  type="radio" name="status_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataList']['index'];?>
" value="N" <?php if ($_smarty_tpl->tpl_vars['obj']->value['show_status']=="N"){?>checked<?php }?>>否
                                    </td>
                                    <td>
                                       	<a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['catalog_id'];?>
'" title="刪除"><i class="fa fa-trash-o"></i></a> 
                                        <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['catalog_id'];?>
" />
                                    </td>
                                </tr>
                               <?php }} ?>
                            </table>
                            
                          
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