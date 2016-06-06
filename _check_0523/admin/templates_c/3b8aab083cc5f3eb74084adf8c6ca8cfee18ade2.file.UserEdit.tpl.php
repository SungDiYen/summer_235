<?php /* Smarty version Smarty3-RC3, created on 2014-08-31 14:46:51
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\UserEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285725402c4db7ec3e7-65255034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8aab083cc5f3eb74084adf8c6ca8cfee18ade2' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\UserEdit.tpl',
      1 => 1409467604,
    ),
  ),
  'nocache_hash' => '285725402c4db7ec3e7-65255034',
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
            <h1>修改<?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
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
        <form name="FormEdit" id="FormEdit" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=editsave" onsubmit="FormCheck();return false;">
        <div class="row">
          <div class="col-lg-12">

              <div class="form-group">
                <label>帳號</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['uid'];?>
</p>
              </div>

              <div class="form-group">
                <label>密碼</label>
                <input type="password" name="passwd" value="<?php echo $_smarty_tpl->getVariable('Data')->value['passwd'];?>
" class="form-control"/>
              </div>
			  
              <div class="form-group">
                <label>姓名</label>
                <input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['name'];?>
" class="form-control"/>
              </div>
              
             

              <button type="submit" class="btn btn-success" >確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('ID')->value;?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";
	
		if($("input[name='passwd']").val()=="")
			errorMsg += "-請輸入密碼\n";
		
		if($("input[name='name']").val()=="")
			errorMsg += "-請輸姓名";
			
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>