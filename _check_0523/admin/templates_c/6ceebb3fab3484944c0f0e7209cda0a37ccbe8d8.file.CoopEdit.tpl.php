<?php /* Smarty version Smarty3-RC3, created on 2014-05-18 20:45:59
         compiled from "C:/AppServ/www/kttline/admin/\templates\CoopEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52575378ab87a70674-89617903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ceebb3fab3484944c0f0e7209cda0a37ccbe8d8' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\CoopEdit.tpl',
      1 => 1399734692,
    ),
  ),
  'nocache_hash' => '52575378ab87a70674-89617903',
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

              <div class="form-group">
                <label>圖片上傳</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['coop_pic']!=''){?>
                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['coop_pic'];?>
" target="_blank">
                    <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['coop_pic'];?>
" width="150" ></img>
                </a>
                <?php }?>
                <input type="file" name="coop_pic" id="coop_pic">
                <?php if ($_smarty_tpl->getVariable('Data')->value['coop_pic']!=''){?>
                <input type="checkbox" name="pic_Del" value="*" />刪除
                <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['coop_pic'];?>
" />
                <?php }?>
              </div>

              <div class="form-group">
                <label>連結</label>
                <div class="form-group input-group">
                    <span class="input-group-addon">http://</span>
                    <input type="text" name="url" value="<?php echo $_smarty_tpl->getVariable('Data')->value['coop_url'];?>
" class="form-control"/>
                </div>
              </div>
			  
              <div class="form-group">
                <label>連結開啟</label>
                <select class="form-control" name="target" id="target">
                	<option value="_self" <?php if ($_smarty_tpl->getVariable('Data')->value['coop_target']=="_self"){?>selected<?php }?>>本頁開啟</option>
                    <option value="_blank" <?php if ($_smarty_tpl->getVariable('Data')->value['coop_target']=="_blank"){?>selected<?php }?>>另開視窗</option>
                </select>
              </div>
              
              <div class="form-group">
                <label>排序</label>
                <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
              </div>
             	
              <div class="form-group">
                <label>是否顯示</label>
                <label class="radio-inline">
                    <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="Y"||$_smarty_tpl->getVariable('Data')->value['coop_id']==''){?>checked<?php }?> >是
                </label>
                <label class="radio-inline">
                    <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="N"){?>checked<?php }?> >否
                </label>
              </div>

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['coop_id'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";

		if($("input[name='coop_pic']").val()=="" && $("input[name='opic']").val()=="")
			errorMsg += "-請選擇圖片\n";

		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>