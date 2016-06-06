<?php /* Smarty version Smarty3-RC3, created on 2014-10-14 23:38:33
         compiled from "C:/xampp/htdocs/koikeya/admin/\templates\EpaperEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2665543d437971f8f6-09418208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b0049f029a1b83c593396a2da5c4fed6583cdd' => 
    array (
      0 => 'C:/xampp/htdocs/koikeya/admin/\\templates\\EpaperEdit.tpl',
      1 => 1413300736,
    ),
  ),
  'nocache_hash' => '2665543d437971f8f6-09418208',
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
                            <label>標題</label>
                            <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['epaper_title'];?>
" class="form-control "/>
                          </div>
                        
                          <div class="form-group">
                            <label>內容</label>
                            <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

                          </div>
                          
                          <!--<div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>-->
                        
            			  
                          <button type="submit" class="btn btn-success" >確認修改</button>
                          
                          <button type="button" onclick="sendEpaper()" class="btn btn-info" >發送電子報</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
			
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['epaper_id'];?>
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
			errorMsg += "-請輸入標題\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	
	function sendEpaper(){
		if(confirm("是否確認發送電子報?")){
			$("#FormEdit").attr("action","<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=send");
			$("#FormEdit").submit();
		}else{
			$("#FormEdit").attr("action","<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave");
		}
			
	}
</script>