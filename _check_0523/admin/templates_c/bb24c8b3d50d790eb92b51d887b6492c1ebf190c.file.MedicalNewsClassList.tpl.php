<?php /* Smarty version Smarty3-RC3, created on 2014-05-01 14:26:21
         compiled from "C:/AppServ/www/kttline/admin/\templates\MedicalNewsClassList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260295361e90dc9aa73-26422798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb24c8b3d50d790eb92b51d887b6492c1ebf190c' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\MedicalNewsClassList.tpl',
      1 => 1398925573,
    ),
  ),
  'nocache_hash' => '260295361e90dc9aa73-26422798',
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
                <h1 class="page-header"><?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</h1>
            </div>

        </div>
        <div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                    	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MedNewsClass')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                        	<button type="button" class="btn btn-outline btn-info" <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->getVariable('NowType')->value){?>style="background-color:#5bc0de;color:#fff"<?php }?> onclick="location.href='<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=settype&type=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'"><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</button>
                        <?php }} ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
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
                        	<div class="col-lg-6">
                            	<div class="form-group">
                                    <label>類別名稱</label>
                                    <input class="form-control" name="class_name[]" value="" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                            	<div class="form-group">
                                    <label>排序</label>
                                    <input class="form-control" name="sortnum[]" value="" >
                                </div>
                            </div>
                        </div>        
                        
                    </div>
                    <!-- /.panel-body -->
                    	<input type="hidden" name="main_type" value="<?php echo $_smarty_tpl->getVariable('NowType')->value;?>
" />
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
                        	<button type="button" class="btn btn-primary btn-xs" onclick="UpdClass()"><i class="fa fa-save"></i> 修改</button>
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
                                    <th>類別名稱</th>
                                    <th width="80px">排序</th>
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
                                    	<input type="text" class="form-control" name="class_name[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['medical_news_class_title'];?>
" />
                                    </td>
                                    <td>
                                    	<input type="text" class="form-control" name="sortnum[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['sortnum'];?>
" />
                                    </td>
                                    <td>
                                       	<a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['medical_news_class_id'];?>
'" title="刪除"><i class="fa fa-trash-o"></i></a> 
                                        <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['medical_news_class_id'];?>
" />
                                    </td>
                                </tr>
                               <?php }} ?>
                            </table>
                            
                          
                        </div>
                        <!-- /.table-responsive -->
                        
                    </div>
                    <!-- /.panel-body -->
                    <input type="hidden" name="main_type" value="<?php echo $_smarty_tpl->getVariable('NowType')->value;?>
" />
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