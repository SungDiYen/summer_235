<?php /* Smarty version Smarty3-RC3, created on 2015-04-19 21:08:47
         compiled from "C:/xampp/htdocs/blissfullybali/admin/\templates\ContactEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61915533a8df25d122-38566949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f989a1dc63413896eeb2e65c502a5331ddb68a9b' => 
    array (
      0 => 'C:/xampp/htdocs/blissfullybali/admin/\\templates\\ContactEdit.tpl',
      1 => 1429435158,
    ),
  ),
  'nocache_hash' => '61915533a8df25d122-38566949',
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
                            <label>聯絡人姓名</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_name'];?>

                          </div>
                          <div class="form-group">
                            <label>聯絡人電話</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_mobile'];?>

                          </div>
                          <div class="form-group">
                            <label>電子郵件</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_email'];?>

                          </div>
                          <div class="form-group">
                            <label>成人人數</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_adult'];?>

                          </div>
                          <div class="form-group">
                            <label>小孩人數</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_kid'];?>

                          </div>
                          <div class="form-group">
                            <label>成員關系</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_relationship'];?>

                          </div>
                          <div class="form-group">
                            <label>第幾次去峇里島</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_times'];?>

                          </div>
                          <div class="form-group">
                            <label>喜歡水上活動</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_water'];?>

                          </div>
                          <div class="form-group">
                            <label>預算/一位旅客</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_burget'];?>

                          </div>
                          <div class="form-group">
                            <label>出發、回程日期</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_startdate'];?>

                            ~
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_enddate'];?>

                          </div>
                          <div class="form-group">
                            <label>出發地點</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_departure'];?>

                          </div>
                          <div class="form-group">
                            <label>特殊需求</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_special'];?>

                          </div>
                          <div class="form-group">
                            <label>補充事項</label>
                            <?php echo $_smarty_tpl->getVariable('Data')->value['contact_remarks'];?>

                          </div>
                          <div class="form-group">
                            <label>狀態</label>
                            <select name="status" >
                            	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_ContactStatus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                               		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['contact_statsu']==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                                <?php }} ?>
                            </select>
                          </div>
            
                          <button type="submit" class="btn btn-success" >確認修改</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
			
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['contact_id'];?>
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
		
		if($("input[name='news_title']").val()=="")
			errorMsg += "-請輸入標題\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>