<?php /* Smarty version Smarty3-RC3, created on 2014-05-10 23:07:33
         compiled from "C:/AppServ/www/kttline/admin/\templates\AdEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14785536e40b5949db4-60323919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66c846fc61d5bc229663dc4966f3fc6d21a2e07' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\AdEdit.tpl',
      1 => 1399734449,
    ),
  ),
  'nocache_hash' => '14785536e40b5949db4-60323919',
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
                <label>標題</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->getVariable('Data')->value['ad_title'];?>
" />
              </div>
              <div class="form-group">
                <label>圖片上傳</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['ad_pic']!=''){?>
                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['ad_pic'];?>
" target="_blank">
                    <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['ad_pic'];?>
" width="150" ></img>
                </a>
                <?php }?>
                <input type="file" name="ad_pic" id="ad_pic">
                <?php if ($_smarty_tpl->getVariable('Data')->value['ad_pic']!=''){?>
                <input type="checkbox" name="pic_Del" value="*" />刪除
                <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['ad_pic'];?>
" />
                <?php }?>
              </div>
			  <div class="form-group">
                <label>內容</label>
                <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

              </div>
              
              
              <div class="form-group">
                <label>排序</label>
                <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
              </div>
             	
              <div class="form-group">
                <label>是否顯示</label>
                <label class="radio-inline">
                    <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="Y"||$_smarty_tpl->getVariable('Data')->value['ad_id']==''){?>checked<?php }?> >是
                </label>
                <label class="radio-inline">
                    <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="N"){?>checked<?php }?> >否
                </label>
              </div>

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['ad_id'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
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
</script>