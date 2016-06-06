<?php /* Smarty version Smarty3-RC3, created on 2014-08-30 20:22:58
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\StoreEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188955401c222325a20-51996089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae8f328826d126ec98767a811c95b65d6ad8c8d' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\StoreEdit.tpl',
      1 => 1409401368,
    ),
  ),
  'nocache_hash' => '188955401c222325a20-51996089',
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
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
			  <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php if ($_smarty_tpl->getVariable('ID')->value==''){?>新增<?php }else{ ?>編輯<?php }?><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                        <div class="pull-right">
                        	
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    	  <div class="form-group">
                            <label>門市名稱</label>
                            <div class="form-group">
                                <input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['store_name'];?>
" class="form-control"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>門市電話</label>
                            <div class="form-group">
                                <input type="text" name="tel" value="<?php echo $_smarty_tpl->getVariable('Data')->value['store_tel'];?>
" class="form-control"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>門市地址</label>
                            <div class="form-group">
                                <input type="text" name="address" value="<?php echo $_smarty_tpl->getVariable('Data')->value['store_address'];?>
" class="form-control"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>營業時間</label>
                            <div class="form-group">
                                <input type="text" name="time" value="<?php echo $_smarty_tpl->getVariable('Data')->value['store_time'];?>
" class="form-control"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>圖片上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['store_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['store_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['store_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="store_pic" id="store_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['store_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['store_pic'];?>
" />
                            <?php }?>
                          </div>
                          
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="Y"||$_smarty_tpl->getVariable('Data')->value['store_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            
                          <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>      
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
              

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['store_id'];?>
" />
        <input type="hidden" name="pos" value="<?php echo $_smarty_tpl->getVariable('_POS')->value;?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";

		if($("input[name='name']").val()=="")
			errorMsg += "-請輸入門市名稱\n";
		if($("input[name='address']").val()=="")
			errorMsg += "-請輸入門市地址\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>