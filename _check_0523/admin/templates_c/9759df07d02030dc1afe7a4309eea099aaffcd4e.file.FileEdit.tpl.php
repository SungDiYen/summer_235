<?php /* Smarty version Smarty3-RC3, created on 2014-10-06 20:28:05
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\FileEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123654328ad5151cd9-39686939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9759df07d02030dc1afe7a4309eea099aaffcd4e' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\FileEdit.tpl',
      1 => 1412430315,
    ),
  ),
  'nocache_hash' => '123654328ad5151cd9-39686939',
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
                    	  <!--<div class="form-group">
                            <label>標題</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['file_title'];?>
" />
                          </div>-->
                          <div class="form-group">
                            <label>圖片上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['file_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['file_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['file_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="file_pic" id="file_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['file_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['file_pic'];?>
" />
                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>檔案上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['file_name']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['file_name'];?>
" target="_blank">
                                檔案
                            </a>
                            <?php }?>
                            <input type="file" name="file_name" id="file_name">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['file_name']!=''){?>
                            <input type="checkbox" name="file_Del" value="*" />刪除
                            <input type="hidden" name="ofile" value="<?php echo $_smarty_tpl->getVariable('Data')->value['file_name'];?>
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
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['file_id']==''){?>checked<?php }?> >是
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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['file_id'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";

		if($("input[name='file_pic']").val()=="" && $("input[name='opic']").val()=="")
			errorMsg += "-請選擇圖片\n";
		if($("input[name='file_name']").val()=="" && $("input[name='ofile']").val()=="")
			errorMsg += "-請選擇檔案\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>