<?php /* Smarty version Smarty3-RC3, created on 2014-04-22 06:21:57
         compiled from "C:/AppServ/www/dac/admin/\templates\FileEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1861953559a058fc4d6-06793082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84dd5fd10ca5824f6438814c3992872ae06d1ee0' => 
    array (
      0 => 'C:/AppServ/www/dac/admin/\\templates\\FileEdit.tpl',
      1 => 1398118913,
    ),
  ),
  'nocache_hash' => '1861953559a058fc4d6-06793082',
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

              <div class="form-group">
                <label>檔案位置</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['member_file_id']!=''){?>
                <p class="form-control-static">upload/mebfile/<?php echo $_smarty_tpl->getVariable('Data')->value['member_file_name'];?>

                </p>
                <p class="form-control-static" style="color:#FF0000">[<?php echo $_smarty_tpl->getVariable('Data')->value['member_file_ori_name'];?>
]
                </p>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('Data')->value['member_file_id']==''||$_smarty_tpl->getVariable('Data')->value['member_id']==0){?>
                <input type="file" name="file" id="file">
                <?php }?>
              </div>
              
              <div class="form-group">
                <label>檔案簡述</label>
                <input type="text" name="member_file_desc" id="member_file_desc" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_file_desc'];?>
" class="form-control "/>
              </div>
              
              <div class="form-group">
                <label>備註</label>
                <textarea name="member_file_note" id="member_file_note" class="form-control"><?php echo $_smarty_tpl->getVariable('Data')->value['member_file_note'];?>
</textarea>
              </div>
              <div class="form-group">
                <label>下載對象</label>
                <textarea name="member_file_auth" id="member_file_auth" class="form-control"><?php echo $_smarty_tpl->getVariable('Data')->value['member_file_auth_str'];?>
</textarea>
                <p class="form-control-static">※請用逗號隔開</p>
              </div>
              <div class="form-group">
                <label>上傳日期</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['create_time'];?>
</p>
              </div>

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_file_id'];?>
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