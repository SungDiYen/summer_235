<?php /* Smarty version Smarty3-RC3, created on 2015-09-17 22:02:00
         compiled from "C:/xampp/htdocs/uminohime/admin/\templates\NewsEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363455fac7d8c725e6-44234185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad465a4edf9f495a6f20adf5d51e6c704e27eef8' => 
    array (
      0 => 'C:/xampp/htdocs/uminohime/admin/\\templates\\NewsEdit.tpl',
      1 => 1442498515,
    ),
  ),
  'nocache_hash' => '1363455fac7d8c725e6-44234185',
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
                            <label>發佈日期</label>
                            <input type="text" name="news_date" id="news_date" value="<?php echo $_smarty_tpl->getVariable('Data')->value['news_date'];?>
" class="form-control date_pick"/>
                          </div>
                          <div class="form-group">
                            <label>標題</label>
                            <input type="text" name="news_title" id="news_title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['news_title'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>圖片上傳</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['news_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['news_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['news_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="news_pic" id="news_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['news_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['news_pic'];?>
" />
                            <?php }?>
                            <br>
                            <span>※建議尺寸260*200</span>
                          </div>
                          <div class="form-group">
                            <label>引文</label>
                            <textarea name="news_quotation" id="news_quotation" class="form-control "><?php echo $_smarty_tpl->getVariable('Data')->value['news_quotation'];?>
</textarea>
                          </div>
                          <div class="form-group">
                            <label>內容</label>
                            <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['news_id'];?>
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
			showLoading();
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	
</script>