<?php /* Smarty version Smarty3-RC3, created on 2014-05-01 14:28:00
         compiled from "C:/AppServ/www/kttline/admin/\templates\MedicalNewsEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250625361e970ab8847-42408913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f784186291cefd2553558f67e27bb54ee8a9cbd9' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\MedicalNewsEdit.tpl',
      1 => 1398925676,
    ),
  ),
  'nocache_hash' => '250625361e970ab8847-42408913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h1><?php if ($_smarty_tpl->getVariable('ID')->value==''){?>新增<?php }else{ ?>編輯<?php }?>-<?php echo $_smarty_tpl->getVariable('_MedNewsClass')->value[$_smarty_tpl->getVariable('NowType')->value];?>
-<?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h1>
            <ol class="breadcrumb">
              <li><a href="Main.php"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a></li>
              <li class="active"><a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
"><i class="fa fa-edit"></i> <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</a></li>
            </ol>
            
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
			
              <div class="form-group">
                <label>發佈日期</label>
                <input type="text" name="news_date" id="news_date" value="<?php echo $_smarty_tpl->getVariable('Data')->value['medical_news_date'];?>
" class="form-control date_pick"/>
              </div>
              
              <div class="form-group">
                <label>類別</label>
                <select class="form-control" name="class_id" id="class_id">
                	<option value="">請選擇</option>
                	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('NewsClass')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['medical_news_class_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                    <?php }} ?>
                </select>
              </div>
              <div class="form-group">
                <label>標題</label>
                <input type="text" name="news_title" id="news_title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['medical_news_title'];?>
" class="form-control "/>
              </div>
			  
              <div class="form-group">
                <label>內容</label>
                <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

              </div>
              
              <div class="form-group">
                <label>排序</label>
                <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
              </div>
             	
              <div class="form-group">
                <label>是否顯示</label>
                <label class="radio-inline">
                    <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="Y"||$_smarty_tpl->getVariable('Data')->value['medical_news_id']==''){?>checked<?php }?> >是
                </label>
                <label class="radio-inline">
                    <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="N"){?>checked<?php }?> >否
                </label>
              </div>

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="news_type" id="news_type" value="<?php echo $_smarty_tpl->getVariable('NowType')->value;?>
" />
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['medical_news_id'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	$(document).ready(function () {
				
		$(".date_pick").datepick();
		
	});
	function FormCheck(){
		var errorMsg = "";
		
		if($("input[name='news_date']").val()=="")
			errorMsg += "-請輸入發佈日期\n";
		
		if($("select[name='class_id']").val()=="")
			errorMsg += "-請選擇類別\n";
		
		if($("input[name='news_title']").val()=="")
			errorMsg += "-請輸入標題\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>