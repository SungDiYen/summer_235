<?php /* Smarty version Smarty3-RC3, created on 2014-10-29 17:35:46
         compiled from "/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/BrandEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8931595255450b4f2e87cd6-98894691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd912ee634aeb1174cebfc90ed2717d54d9cf5974' => 
    array (
      0 => '/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/BrandEdit.tpl',
      1 => 1414575338,
    ),
  ),
  'nocache_hash' => '8931595255450b4f2e87cd6-98894691',
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
                            <label>品牌名稱</label>
                            <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['brand_name'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>首頁用圖片 (尺寸寬170px*高320px, PNG透明圖檔)</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['brand_index_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['brand_index_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['brand_index_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="brand_index_pic" id="brand_index_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['brand_index_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['brand_index_pic'];?>
" />
                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>產品介紹頁用圖片 (尺寸寬160px*高90px, PNG透明圖檔)</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['brand_main_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['brand_main_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['brand_main_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="brand_main_pic" id="brand_main_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['brand_main_pic']!=''){?>
                            <input type="checkbox" name="pic_main_Del" value="*" />刪除
                            <input type="hidden" name="opic_main" value="<?php echo $_smarty_tpl->getVariable('Data')->value['brand_main_pic'];?>
" />
                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>品牌介紹 (120字以內)</label>
                            <textarea name="content" class="form-control" rows="4"><?php echo $_smarty_tpl->getVariable('Data')->value['brand_content'];?>
</textarea>
                          </div>
                          
                         
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['brand_id']==''){?>checked<?php }?> >是
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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['brand_id'];?>
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
		
		if($("input[name='name']").val()=="")
			errorMsg += "-請輸入品牌名稱\n";
		
		if($("input[name='brand_index_pic']").val()=="" && $("input[name='opic']").val()=="")
			errorMsg += "-請選擇首頁圖片\n";
		if($("input[name='brand_main_pic']").val()=="" && $("input[name='opic_main']").val()=="")
			errorMsg += "-請選擇產品介紹圖片\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>