<?php /* Smarty version Smarty3-RC3, created on 2014-09-14 22:02:49
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\ProductEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277215415a009c42b84-22282731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8196f2388f20188a838906da4d4ef7c9d8102fbc' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\ProductEdit.tpl',
      1 => 1410703366,
    ),
  ),
  'nocache_hash' => '277215415a009c42b84-22282731',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/product.js"></script>
<script>
$(document).ready(function(){
	$("input[name='spec_type']:checked").trigger("click");	
});
</script>
<style>
.rowspec,.rowspec tr td{
	border:0px #FFFFFF solid;
}
.specarea table{
	border-collapse: collapse;
	margin-bottom: 20px;
	border: #CCC 1px solid;
	font-size:10px;
}
.specarea table thead tr{
	background-color: #F0F0F0;
	border: #e1e1e1 1px solid;
}
.specarea table td{
	padding:5px;
}
</style>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>
           
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <?php if ($_smarty_tpl->getVariable('ID')->value==''){?>新增<?php }else{ ?>編輯<?php }?><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>

                  <div class="pull-right">
                      
                  </div>
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              	   <div class="col-lg-12">
                      <div class="form-group">
                        <label>是否上架</label>
                        <label class="radio-inline">
                            <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="Y"||$_smarty_tpl->getVariable('Data')->value['news_id']==''){?>checked<?php }?> >是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="show_mode" id="show_mode2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['show_mode']=="N"){?>checked<?php }?> >否
                        </label>
                      </div>
                      
                  </div>
                  
                  <div class="col-lg-4">
                      <div class="form-group">
                        <label>商品類別</label>
                        <select class="form-control" name="class_id" id="class_id">
                            <option value="">請選擇</option>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ProdClass')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->getVariable('Data')->value['catalog_id']){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['obj']->value['catalog_title'];?>
</option>
                          <?php }} ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>商品名稱</label>
                        <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_name'];?>
" class="form-control "/>
                      </div>
                      <div class="form-group">
                        <label>商品編號</label>
                        <input type="text" name="pno" id="pno" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_no'];?>
" class="form-control "/>
                      </div>
                      <div class="form-group">
                        <label>商品售價</label>
                        <input type="text" name="price" id="price" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_price'];?>
" class="form-control "/>
                      </div>
                      <div class="form-group">
                        <label>是否特賣</label>
                        <label class="radio-inline">
                            <input type="radio" name="special" id="special1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['product_special']=="Y"){?>checked<?php }?> >是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="special" id="special2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['product_special']=="N"||$_smarty_tpl->getVariable('Data')->value['news_id']==''){?>checked<?php }?> >否
                        </label>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label>上架時間</label><br>
                        <label class="form-inline">
                        <input type="text" class="form-control" name="sdate" id="sdate" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_sdate'];?>
" size="10"/>
                        ~
                        <input type="text" class="form-control" name="edate" id="edate" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_edate'];?>
" size="10" />
                        </label>
                      </div>          	 
                      <div class="form-group">
                        <label>簡介</label>
                        <textarea class="form-control" name="intro" id="intro" style="height:100px"><?php echo $_smarty_tpl->getVariable('Data')->value['product_intro'];?>
</textarea>
                      </div>
                      <div class="form-group">
                        <label>排序</label>
                        <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-inline">
                        <label>圖片上傳</label><br>
                        <?php  $_smarty_tpl->tpl_vars['pobj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['pkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('picData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pobj']->key => $_smarty_tpl->tpl_vars['pobj']->value){
 $_smarty_tpl->tpl_vars['pkey']->value = $_smarty_tpl->tpl_vars['pobj']->key;
?>
                            <?php if ($_smarty_tpl->getVariable('Data')->value[$_smarty_tpl->getVariable('pkey')->value]!=''){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value[$_smarty_tpl->getVariable('pkey')->value];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value[$_smarty_tpl->getVariable('pkey')->value];?>
" width="150" ></img>
                            </a>
                            <?php }?>
                            <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['pkey']->value;?>
" size=20>
                            <?php if ($_smarty_tpl->getVariable('Data')->value[$_smarty_tpl->getVariable('pkey')->value]!=''){?>
                            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['pkey']->value;?>
_Del" value="*" />刪除
                            <?php }?>
                        <?php }} ?>
                      </div> 
                      <h4 class="page-header">產品規格</h4>	 
                      <div class="form-group">
                       
                        <input type="radio" name="spec_type" id="spec_type2" value="single" onclick="SpecShow('.single_spec')" <?php if ($_smarty_tpl->getVariable('id')->value==''||$_smarty_tpl->getVariable('spec')->value['spec_type']=="single"){?>checked<?php }?> />單一規格
                        <input type="radio" name="spec_type" id="spec_type3" value="multi" onclick="SpecShow('.multi_spec')" <?php if ($_smarty_tpl->getVariable('spec')->value['spec_type']=="multi"){?>checked<?php }?>/>雙規格
                        
                        <div class="single_spec specarea" style="display:none">
                            <table class="form2" style="width:300px">
                                <tr >
                                    <td style="width:130px; background-color:#EFEFEF">商品規格名稱</td>
                                    <td><input type="text" name="spec_name" size="15" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_row_name'];?>
" /></td>
                                </tr>
                            </table>
                            <table class="form2 spec_table" style="width:300px">
                                <thead>
                                    <tr class="form_t" align="center">
                                        <td width="110px">規格</td>
                                        <td width="110px">庫存</td>
                                        <td><a href="javascript:AddSpec('single','')"  id="add_spec" class="but_add">新增</a></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($_smarty_tpl->getVariable('spec')->value['spec_type']=="single"){?>
                                        <?php  $_smarty_tpl->tpl_vars['srval'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['srkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('spec')->value['spec_row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['srval']->key => $_smarty_tpl->tpl_vars['srval']->value){
 $_smarty_tpl->tpl_vars['srkey']->value = $_smarty_tpl->tpl_vars['srval']->key;
?>
                                        <tr align="center">
                                            <td>
                                                <input type="text" name="spec[]" size="5" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['srval']->value;?>
" />
                                            </td>
                                            <td>
                                                <input type="text" name="stock[]" size="5" value="<?php echo $_smarty_tpl->getVariable('spec')->value['stock'][$_smarty_tpl->tpl_vars['srval']->value]['']['amount'];?>
" />
                                            </td>
                                            <td>
                                                <input type="hidden" name="specid[]"  value="<?php echo $_smarty_tpl->getVariable('spec')->value['stock'][$_smarty_tpl->tpl_vars['srval']->value]['']['id'];?>
" />
                                                <a href="javascript:void(0)" onclick="DelSpec('single','',this)" data-key="<?php echo $_smarty_tpl->getVariable('spec')->value['stock'][$_smarty_tpl->tpl_vars['srval']->value]['']['amount'];?>
" class="but_del" title="刪除">刪除</a>
                                            </td>
                                        </tr>
                                        <?php }} ?>
                                    <?php }else{ ?>
                                    <tr align="center">
                                        <td>
                                            <input type="text" name="spec[]" size="5" maxlength="5" />
                                        </td>
                                        <td>
                                            <input type="text" name="stock[]" size="5" />
                                        </td>
                                        <td>
                                            <input type="hidden" name="specid[]"  value="" />
                                            <a href="javascript:void(0)" onclick="DelSpec('single','',this)" class="but_del" title="刪除">刪除</a>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <input type="text" name="spec[]" size="5" maxlength="5" />
                                        </td>
                                        <td>
                                            <input type="text" name="stock[]" size="5" />
                                        </td>
                                        <td>
                                            <input type="hidden" name="specid[]"  value="" />
                                            <a href="javascript:void(0)" onclick="DelSpec('single','',this)" class="but_del" title="刪除">刪除</a>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <input type="text" name="spec[]" size="5" maxlength="5" />
                                        </td>
                                        <td>
                                            <input type="text" name="stock[]" size="5" />
                                        </td>
                                        <td>
                                            <input type="hidden" name="specid[]"  value="" />
                                            <a href="javascript:void(0)" onclick="DelSpec('single','',this)" class="but_del" title="刪除">刪除</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="multi_spec specarea" style="display:none">
                            <table class="form2" style="width:auto">
                                <tr >
                                    <td style="width:130px; background-color:#EFEFEF">商品規格名稱</td>
                                    <td>行名 <input type="text" name="spec_col_name" size="15" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_col_name'];?>
" onkeyup="$('.spec_col_title').text($(this).val())" /></td>
                                    <td>列名 <input type="text" name="spec_row_name" size="15" value="<?php echo $_smarty_tpl->getVariable('Data')->value['product_row_name'];?>
" onkeyup="$('.spec_row_title').text($(this).val())"/></td>
                                </tr>
                            </table>  
                            <table class="form2 spec_table" style="width:auto">
                                <thead>
                                    <tr class="form_t" align="center">
                                        <td style="width:110px">
                                           <span class="spec_row_title"></span>/<span class="spec_col_title"></span>
                                        </td>
                                        <?php if ($_smarty_tpl->getVariable('spec')->value['spec_type']=="multi"){?>
                                            <?php  $_smarty_tpl->tpl_vars['scval'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sckey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('spec')->value['spec_col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scval']->key => $_smarty_tpl->tpl_vars['scval']->value){
 $_smarty_tpl->tpl_vars['sckey']->value = $_smarty_tpl->tpl_vars['scval']->key;
?>
                                                <td>
                                                    <input type="text" name="spec_col[]" size="5" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['scval']->value;?>
" />
                                                </td>
                                            <?php }} ?>
                                        <?php }else{ ?>
                                        <td>
                                            <input type="text" name="spec_col[]" size="5" maxlength="5" />
                                        </td>
                                        <td>
                                            <input type="text" name="spec_col[]" size="5" maxlength="5" />
                                        </td>
                                        <?php }?>
                                        <td><a href="javascript:AddSpec('multi','col')" id="add_spec" class="but_add">新增</a></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php if ($_smarty_tpl->getVariable('spec')->value['spec_type']=="multi"){?>
                                        <?php  $_smarty_tpl->tpl_vars['srval'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['srkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('spec')->value['spec_row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['srval']->key => $_smarty_tpl->tpl_vars['srval']->value){
 $_smarty_tpl->tpl_vars['srkey']->value = $_smarty_tpl->tpl_vars['srval']->key;
?>
                                            <tr align="center">
                                                <td>
                                                    <input type="text" name="spec_row[]" size="5" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['srval']->value;?>
" />
                                                </td>
                                                <?php  $_smarty_tpl->tpl_vars['scval'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sckey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('spec')->value['spec_col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scval']->key => $_smarty_tpl->tpl_vars['scval']->value){
 $_smarty_tpl->tpl_vars['sckey']->value = $_smarty_tpl->tpl_vars['scval']->key;
?>
                                                <td>
                                                    <input type="text" name="stock_row[]" size="5" maxlength="5" value="<?php echo $_smarty_tpl->getVariable('spec')->value['stock'][$_smarty_tpl->tpl_vars['srval']->value][$_smarty_tpl->tpl_vars['scval']->value]['amount'];?>
" />
                                                    <input type="hidden" name="specid_row[]"  value="<?php echo $_smarty_tpl->getVariable('spec')->value['stock'][$_smarty_tpl->tpl_vars['srval']->value][$_smarty_tpl->tpl_vars['scval']->value]['id'];?>
" />
                                                </td>
                                                <?php }} ?>
                                                <td align="center">
                                                    
                                                    <a href="javascript:void(0)" onclick="DelSpec('multi','row',this)" class="but_del" data-key="<?php echo $_smarty_tpl->tpl_vars['srval']->value;?>
" title="刪除" style="float:none">刪除</a>
                                                </td>
                                            </tr>
                                        <?php }} ?>
                                    <?php }else{ ?>
                                    <tr align="center">
                                        <td>
                                            <input type="text" name="spec_row[]" size="5" maxlength="5" />
                                           
                                        </td>
                                        <td>
                                            <input type="text" name="stock_row[]" size="5" maxlength="5" />
                                        </td>
                                        <td>
                                            <input type="text" name="stock_row[]" size="5" maxlength="5" />
                                        </td>
                                        <td align="center">
                                            <input type="hidden" name="specid_row[]"  value="" />
                                            <a href="javascript:void(0)" onclick="DelSpec('multi','row',this)" class="but_del" title="刪除" style="float:none">刪除</a>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <input type="text" name="spec_row[]" size="5" maxlength="5" />
                                           
                                        </td>
                                        <td>
                                            <input type="text" name="stock_row[]" size="5" maxlength="5" />
                                        </td>
                                        <td>
                                            <input type="text" name="stock_row[]" size="5" maxlength="5" />
                                        </td>
                                        <td align="center">
                                            <input type="hidden" name="specid_row[]"  value="" />
                                            <a href="javascript:void(0)" onclick="DelSpec('multi','row',this)" class="but_del" title="刪除" style="float:none">刪除</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr class="form_t" >
                                        <td><a href="javascript:AddSpec('multi','row')" id="add_spec" class="but_add">新增</a></td>
                                        <?php if ($_smarty_tpl->getVariable('spec')->value['spec_type']=="multi"){?>
                                            <?php  $_smarty_tpl->tpl_vars['scval'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sckey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('spec')->value['spec_col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scval']->key => $_smarty_tpl->tpl_vars['scval']->value){
 $_smarty_tpl->tpl_vars['sckey']->value = $_smarty_tpl->tpl_vars['scval']->key;
?>
                                            <td align="center">
                                                <a href="javascript:void(0)" onclick="DelSpec('multi','col',this)" class="but_del" data-key="<?php echo $_smarty_tpl->tpl_vars['scval']->value;?>
" title="刪除" style="float:none">刪除</a>
                                            </td>
                                            <?php }} ?>
                                        <?php }else{ ?>
                                        <td align="center">
                                            <a href="javascript:void(0)" onclick="DelSpec('multi','col',this)" class="but_del" title="刪除" style="float:none">刪除</a>
                                        </td>
                                        <td align="center">
                                            <a href="javascript:void(0)" onclick="DelSpec('multi','col',this)" class="but_del" title="刪除" style="float:none">刪除</a>
                                        </td>
                                        <?php }?>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                      </div>	
                      <div class="form-group">
                        <label>內容</label>
                        <?php echo $_smarty_tpl->getVariable('FCK_content')->value;?>

                      </div>
                      
                      <div class="form-group">
                        <label>Model</label>
                        <?php echo $_smarty_tpl->getVariable('FCK_model')->value;?>

                      </div>
                      
                      <div class="form-group">
                        <label>尺寸測量</label>
                        <?php echo $_smarty_tpl->getVariable('FCK_sizetable')->value;?>

                      </div>
                      
                      <button type="submit" class="btn btn-success">確認修改</button>
                  </div>
              </div>
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
		
		if($("select[name='class_id']").val()=="")
			errorMsg += "-請選擇類別\n";
		
		if($("input[name='name']").val()=="")
			errorMsg += "-請輸入標題\n";
		
		if($("input[name='price']").val()=="")
			errorMsg += "-請輸入售價\n";
		
		if($("input[name='spec_type']:checked").val()=="single"){
			$("input[name='spec[]']").each(function(){
				if($(this).val()==""){
					errorMsg += "-請輸入規格名稱\n";
					return false;
				}
			});
		}else{
			$("input[name='spec_row[]']").each(function(){
				if($(this).val()==""){
					errorMsg += "-請輸入規格名稱\n";
					return false;
				}
			});
			$("input[name='spec_col[]']").each(function(){
				if($(this).val()==""){
					errorMsg += "-請輸入規格名稱\n";
					return false;
				}
			});
		}
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>