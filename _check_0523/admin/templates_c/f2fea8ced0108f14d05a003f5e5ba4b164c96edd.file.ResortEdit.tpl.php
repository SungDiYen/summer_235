<?php /* Smarty version Smarty3-RC3, created on 2015-04-26 21:47:08
         compiled from "C:/xampp/htdocs/blissfullybali/admin/\templates\ResortEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9181553cec5ccf9502-44863780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2fea8ced0108f14d05a003f5e5ba4b164c96edd' => 
    array (
      0 => 'C:/xampp/htdocs/blissfullybali/admin/\\templates\\ResortEdit.tpl',
      1 => 1430056022,
    ),
  ),
  'nocache_hash' => '9181553cec5ccf9502-44863780',
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
            <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>
            <!--<ol class="breadcrumb">
              <li><a href="Main.php"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a></li>
              <li class="active"><a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
"><i class="fa fa-edit"></i> <?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</a></li>
            </ol>-->
            
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
                            <label>名稱</label>
                            <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['resort_name'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>名稱(英)</label>
                            <input type="text" name="title_en" id="title_en" value="<?php echo $_smarty_tpl->getVariable('Data')->value['resort_name_en'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>網址</label>
                            <input type="text" name="url" id="url" value="<?php echo $_smarty_tpl->getVariable('Data')->value['resort_url'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>酒店區域</label>
                            <input type="text" name="location" id="location" value="<?php echo $_smarty_tpl->getVariable('Data')->value['resort_location'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>適合對象</label>
                            <input type="text" name="applicable" id="applicable" value="<?php echo $_smarty_tpl->getVariable('Data')->value['resort_applicable'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>Kids Club</label>
                            <input type="checkbox" name="kidclub" id="kidclub" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['resort_kidclub']=="Yes"){?>checked<?php }?>/>Yes
                          </div>
                          
                          <div class="form-group">
                            <label>圖片上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['resort_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['resort_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['resort_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="resort_pic" id="resort_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['resort_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['resort_pic'];?>
" />
                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>概況</label>
                            <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

                          </div>
                          <div class="form-group">
                            <label>公共設施</label><br>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_Infrastructure')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                            	<input type="checkbox" name="structure[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->getVariable('Data')->value['infrastructure'])){?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>

                            <?php }} ?>
                          </div>
                          <div class="form-group">
                            <label>運動休閒設施</label><br>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_Sport')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                            	<input type="checkbox" name="sport[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->getVariable('Data')->value['sport'])){?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>

                            <?php }} ?>
                          </div>
                          <div class="form-group">
                            <label>網路設施</label><br>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_NetWork')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                            	<input type="checkbox" name="network[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->getVariable('Data')->value['network'])){?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>

                            <?php }} ?>
                          </div>
                          <div class="form-group">
                            <label>停車設施</label><br>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_Parking')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                            	<input type="checkbox" name="parking[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->getVariable('Data')->value['parking'])){?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>

                            <?php }} ?>
                          </div>
                          <div class="form-group">
                            <label>客房設施</label><br>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_Room')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                            	<input type="checkbox" name="room[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->getVariable('Data')->value['room'])){?>checked<?php }?>/><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>

                            <?php }} ?>
                          </div>
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                          
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['news_id']==''){?>checked<?php }?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="N"){?>checked<?php }?> >否
                            </label>
                          </div>
            
                          <button type="submit" class="btn btn-success" >確認修改</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
			
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['resort_id'];?>
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
		
		if($("input[name='title']").val()=="")
			errorMsg += "-請輸入名稱\n";
		
		if(errorMsg==""){
			showLoading();
			//$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	
	function showLoading(){
		$("BODY").append(
			  '<div id="loadingDiv">'+
			  '<img src="images/loading51.gif">'+
			  '</div>');
			
			// IE6 Fix
			//var pos = ($.browser.msie && parseInt($.browser.version) <= 6 ) ? 'absolute' : 'fixed'; 
			var pos = "fixed";
			$("#loadingDiv").css({
				position: pos,
				zIndex: 99999
			});
			
			$("BODY").append('<div id="popup_overlay"></div>');
			$("#popup_overlay").css({
				position: 'absolute',
				zIndex: 99998,
				top: '0px',
				left: '0px',
				width: '100%',
				height: $(document).height(),
				background: '#000',
				opacity: 0.4
			});
			
			var top = ($(window).height() / 2)-62;
			var left = ($(window).width() / 2)-62;
			if( top < 0 ) top = 0;
			if( left < 0 ) left = 0;
			
			// IE6 fix
			//if( $.browser.msie && parseInt($.browser.version) <= 6 ) top = top + $(window).scrollTop();
			
			$("#loadingDiv").css({
				top: top + 'px',
				left: left + 'px'
			});
			$("#popup_overlay").height( $(document).height() );
	
	}
	
	function closeLoading(){
		$("#popup_overlay").remove();
		$("#loadingDiv").remove();
	}
</script>