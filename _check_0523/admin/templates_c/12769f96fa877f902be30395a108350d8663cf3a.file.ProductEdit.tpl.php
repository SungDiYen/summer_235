<?php /* Smarty version Smarty3-RC3, created on 2014-11-06 18:36:12
         compiled from "/var/www/vhosts/twkoikeya.com.tw/httpdocs/admin//templates/ProductEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:711437301545b4f1c849af7-97725941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12769f96fa877f902be30395a108350d8663cf3a' => 
    array (
      0 => '/var/www/vhosts/twkoikeya.com.tw/httpdocs/admin//templates/ProductEdit.tpl',
      1 => 1415104925,
    ),
  ),
  'nocache_hash' => '711437301545b4f1c849af7-97725941',
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
                            <label>產品品牌</label>
                            <select name="brand" id="brand" class="form-control ">
                            	<option value="">請選擇</option>
                                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['bkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_Brand')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['bkey']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                	<option value="<?php echo $_smarty_tpl->tpl_vars['bkey']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['bkey']->value==$_smarty_tpl->getVariable('Data')->value['brand_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                                <?php }} ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>產品名稱</label>
                            <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_name'];?>
" class="form-control "/>
                          </div>
                          <div class="form-group">
                            <label>上傳圖片（圖片尺寸：寬440px * 高440px）</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['product_pic']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['product_pic'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['product_pic'];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="product_pic" id="product_pic">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['product_pic']!=''){?>
                            <input type="checkbox" name="pic_Del" value="*" />刪除
                            <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_pic'];?>
" />
                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>產品口味</label>
                            <textarea name="tastes" id="tastes" role="3" class="form-control" ><?php echo $_smarty_tpl->getVariable('Data')->value['product_tastes'];?>
</textarea>
                          </div>
                          <div class="form-group">
                            <label>產品原料</label>
                            <textarea name="stuff" id="stuff" role="3" class="form-control" ><?php echo $_smarty_tpl->getVariable('Data')->value['product_stuff'];?>
</textarea>
                            <p>備註</p>
                            <input type="text" name="stuff_note" id="stuff_note" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_stuff_note'];?>
">
                            <span>例如：植物五辛素</span>
                          </div>
                          <div class="form-group">
                            <label>注意事項</label>
                            <textarea name="notice" id="notice" role="3" class="form-control" ><?php echo $_smarty_tpl->getVariable('Data')->value['product_notice'];?>
</textarea>
                            <p>備註</p>
                            <input type="text" name="notice_note" id="notice_note" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_notice_note'];?>
">
                            <span>例如：苯酮尿症患者不宜食用</span>
                          </div>
                          <div class="form-group">
                            <label>營養成份</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['product_element']!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['product_element'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['product_element'];?>
" height="80" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="product_pic2" id="product_pic2">
                            <?php if ($_smarty_tpl->getVariable('Data')->value['product_element']!=''){?>
                            <input type="checkbox" name="pic2_Del" value="*" />刪除
                            <input type="hidden" name="opic2" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_element'];?>
" />
                            <?php }?>
                          </div>
                          <!--<div class="form-group">
                            <label>內容</label>
                            <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

                          </div>-->
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['product_id']==''){?>checked<?php }?> >是
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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_id'];?>
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
			errorMsg += "-請輸入產品名稱\n";
		
		if($("select[name='brand']").val()=="")
			errorMsg += "-請選擇產品品牌\n";
		if($("input[name='product_pic']").val()=="" && $("input[name='opic']").val()=="")
			errorMsg += "-請選擇圖片\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>