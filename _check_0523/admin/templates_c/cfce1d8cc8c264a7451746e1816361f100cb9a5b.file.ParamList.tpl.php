<?php /* Smarty version Smarty3-RC3, created on 2014-05-11 15:57:52
         compiled from "C:/AppServ/www/kttline/admin/\templates\ParamList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3327536f2d80231609-67243956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfce1d8cc8c264a7451746e1816361f100cb9a5b' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\ParamList.tpl',
      1 => 1399795068,
    ),
  ),
  'nocache_hash' => '3327536f2d80231609-67243956',
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
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                        <div class="pull-right">
                        	<button type="button" class="btn btn-primary btn-xs" onclick="FormAddCheck()"><i class="fa fa-plus"></i> 新增</button>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <form name="AddForm" id="AddForm" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post">
                    <div class="panel-body">
                        <div class="col-lg-3">
                        	<div class="form-group">
                				<label>名稱</label>
                        		<input type="text" name="param_name" id="param_name"  class="form-control " />
                        	</div>
                        </div>
                        <div class="col-lg-3">
                        	<div class="form-group">
                				<label>排序</label>
                        		<input type="text" name="sortnum" id="sortnum"  class="form-control "  />
                        	</div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('NowType')->value;?>
" /> 
                    <input type="hidden" name="actype" value="add" /> 
                    </form>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
       
       
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                        <div class="pull-right">
                        	<button type="button" class="btn btn-primary btn-xs" onclick=""><i class="fa fa-save"></i> 修改</button>
                          
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <form name="EditForm" id="EditForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" >
                    <div class="panel-body">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                <tr>
                                    <th width="60px"></th>
                                    <th>名稱</th>
                                    <th>排序</th>
                                    <th>管理</th>
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
                                    	<input type="text" name="param_name[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['param_title'];?>
"  class="form-control " />
                                    </td>
                                    <td>
                                    	<input type="text" name="sortnum[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['sortnum'];?>
"  class="form-control " />
                                    </td>
                                    <td>
                                    	<a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['param_id'];?>
'" title="刪除"><i class="fa fa-trash-o"></i></a> 
                                        <input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['param_id'];?>
" />
                                    </td>
                                </tr>
                               <?php }} ?>
                            </table>
                         
                        </div>
                        <!-- /.table-responsive -->
                        
                    </div>
                    <!-- /.panel-body -->
                    <input type="hidden" name="actype" value="update" /> 
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

<script>
	function FormAddCheck(){
		var errorMsg = "";
		
		if($("input[name='param_name']").val()=="")
			errorMsg += "-請輸入名稱\n";
			
	
		if(errorMsg==""){
			$("#AddForm").submit();
		}else{
			alert(errorMsg);
		}
	}
</script>