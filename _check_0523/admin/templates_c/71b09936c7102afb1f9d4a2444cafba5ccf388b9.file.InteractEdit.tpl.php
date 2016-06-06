<?php /* Smarty version Smarty3-RC3, created on 2014-10-14 16:43:38
         compiled from "/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/InteractEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2020662385543ce23aa29002-14808584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b09936c7102afb1f9d4a2444cafba5ccf388b9' => 
    array (
      0 => '/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/InteractEdit.tpl',
      1 => 1413276216,
    ),
  ),
  'nocache_hash' => '2020662385543ce23aa29002-14808584',
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
                            <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['interactive_title'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>發佈日期</label>
                            <input type="text" class="form-control date_pick" name="post_date" id="post_date" value="<?php echo $_smarty_tpl->getVariable('Data')->value['interactive_date'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>上傳圖片 (尺寸325*325px以上)</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['interactive_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['interactive_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['interactive_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="interactive_pic" id="interactive_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['interactive_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['interactive_pic'];?>
" />
                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>網址連結</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">http://</span>
                                <input type="text" name="url" value="<?php echo $_smarty_tpl->getVariable('Data')->value['interactive_url'];?>
" class="form-control"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>內容</label>
                            <textarea name="content" class="form-control" rows="4"><?php echo $_smarty_tpl->getVariable('Data')->value['interactive_content'];?>
</textarea>
                          </div>
                          
                         
                          <!--<div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>-->
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['interactive_id']==''){?>checked<?php }?> >是
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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['interactive_id'];?>
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
		
		/*if($("input[name='interactive_pic']").val()=="" && $("input[name='opic']").val()=="")
			errorMsg += "-請選擇首頁圖片\n";*/
		
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>