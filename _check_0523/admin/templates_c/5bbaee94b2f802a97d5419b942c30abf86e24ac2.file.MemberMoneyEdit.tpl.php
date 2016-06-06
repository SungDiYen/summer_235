<?php /* Smarty version Smarty3-RC3, created on 2014-08-31 14:43:21
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\MemberMoneyEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279045402c409d3ba73-81134262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbaee94b2f802a97d5419b942c30abf86e24ac2' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\MemberMoneyEdit.tpl',
      1 => 1409467347,
    ),
  ),
  'nocache_hash' => '279045402c409d3ba73-81134262',
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
?flag=save_money" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
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
                            <label>帳號</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['member_email'];?>
</p>
                          </div>
                          
                          <div class="form-group">
                            <label>姓名</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['member_name'];?>
</p>
                          </div>
                          
                          <div class="form-group">
                            <label>購物金</label>
                            <input type="text" name="money" id="money" value="" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>備註</label>
                            <textarea name="note" id="note" class="form-control"></textarea>
                          </div>
                         
                          <button type="submit" class="btn btn-success" >確認修改</button>
                    </div>
              </div>      
              

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_id'];?>
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

		if($("input[name='money']").val()=="")
			errorMsg += "-請輸入金額\n";
		
		if($("#note").val()=="")
			errorMsg += "-請輸入備註\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>