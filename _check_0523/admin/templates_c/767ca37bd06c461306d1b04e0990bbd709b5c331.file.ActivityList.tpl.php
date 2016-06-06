<?php /* Smarty version Smarty3-RC3, created on 2014-09-28 12:42:24
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\ActivityList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11580542791b0d87679-84760569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767ca37bd06c461306d1b04e0990bbd709b5c331' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\ActivityList.tpl',
      1 => 1411879024,
    ),
  ),
  'nocache_hash' => '11580542791b0d87679-84760569',
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
                            <option value="Y" <?php if ($_smarty_tpl->getVariable('SearchStatus')->value=='Y'){?>selected<?php }?>>是</option>
                            <option value="N" <?php if ($_smarty_tpl->getVariable('SearchStatus')->value=='N'){?>selected<?php }?>>否</option>
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
                                <th width="200px">活動日期</th>
                                <th width="100px">報名人數</th>
                                <th width="80px">是否顯示</th>
                                <th width="60px">編輯</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                            <tr>
                                <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['activity_id'];?>
" /></td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['obj']->value['activity_title'];?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['activity_date'];?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=sign_list&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['activity_id'];?>
&pageno=<?php echo $_smarty_tpl->getVariable('PageNO')->value;?>
" class="signWin"><?php echo $_smarty_tpl->tpl_vars['obj']->value['sign_num'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['show_status'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['activity_id'];?>
&pageno=<?php echo $_smarty_tpl->getVariable('PageNO')->value;?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['activity_id'];?>
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
<script type="text/javascript">
$(function() {
	$('a.signWin').click(function(e) {
		e.preventDefault();
		var $this = $(this);
		var horizontalPadding = 30;
		var verticalPadding = 30;
		$('<iframe id="externalSite" class="externalSite" src="' + this.href + '" />').dialog({
			title: ($this.attr('title')) ? $this.attr('title') : '活動報名名單',
			autoOpen: true,
			width: 900,
			height: 500,
			modal: true,
			resizable: true,
			autoResize: true,
			overlay: {
				opacity: 0.5,
				background: "black"
			}
		}).width(800 - horizontalPadding).height(500 - verticalPadding);            
	});
});
</script>