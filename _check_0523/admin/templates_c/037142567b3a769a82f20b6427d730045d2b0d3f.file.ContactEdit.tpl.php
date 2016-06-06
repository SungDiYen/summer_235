<?php /* Smarty version Smarty3-RC3, created on 2014-11-07 15:17:03
         compiled from "/var/www/vhosts/twkoikeya.com.tw/httpdocs/admin//templates/ContactEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1719432301545c71ef462344-23258086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '037142567b3a769a82f20b6427d730045d2b0d3f' => 
    array (
      0 => '/var/www/vhosts/twkoikeya.com.tw/httpdocs/admin//templates/ContactEdit.tpl',
      1 => 1415104921,
    ),
  ),
  'nocache_hash' => '1719432301545c71ef462344-23258086',
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
            <h1><?php if ($_smarty_tpl->getVariable('ID')->value==''){?>新增<?php }else{ ?>編輯<?php }?><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
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
          	  <?php if ($_smarty_tpl->getVariable('Data')->value['member_uid']!=''){?>
			  <div class="form-group">
                <label>會員帳號</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['member_uid'];?>
</p>
              </div>
              <?php }?>
              <div class="form-group">
                <label>姓名</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['contact_name'];?>
</p>
              </div>
			  <div class="form-group">
                <label>聯絡電話</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['contact_tel'];?>
</p>
              </div>
              <div class="form-group">
                <label>手機號碼</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['contact_phone'];?>
</p>
              </div>
              <div class="form-group">
                <label>電子郵件</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['contact_email'];?>
</p>
              </div>
              <div class="form-group">
                <label>聯絡項目</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['contact_item'];?>
</p>
              </div>
              <div class="form-group">
                <label>標題</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['contact_title'];?>
</p>
              </div>
              <div class="form-group">
                <label>內容</label>
                <p class="form-control-static"><?php echo nl2br($_smarty_tpl->getVariable('Data')->value['contact_content']);?>
</p>
              </div>
              <div class="form-group">
                <label>方便聯絡時段</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['contact_time'];?>
</p>
              </div>
              <div class="form-group">
                <label>建立時間</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['create_time'];?>
</p>
              </div>
              <input type="button" class="btn" value="返回" onclick="window.history.go(-1)" />
              <!--<button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>-->

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
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>