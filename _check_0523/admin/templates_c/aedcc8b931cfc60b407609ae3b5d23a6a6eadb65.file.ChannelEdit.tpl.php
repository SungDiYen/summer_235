<?php /* Smarty version Smarty3-RC3, created on 2013-10-23 18:27:54
         compiled from "C:/AppServ/www/hair_finance/\templates\ChannelEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214775267a4aa38e0c3-43192416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aedcc8b931cfc60b407609ae3b5d23a6a6eadb65' => 
    array (
      0 => 'C:/AppServ/www/hair_finance/\\templates\\ChannelEdit.tpl',
      1 => 1380700157,
    ),
  ),
  'nocache_hash' => '214775267a4aa38e0c3-43192416',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('menu_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <div id="primary">
      <a id="contral_width_btn" class="pngbg" href="javascript:void(0)"></a>
      <div class="title_link"> <a href="main.php">返回首頁</a> / <a href="javascript:void(0)"><?php echo $_smarty_tpl->getVariable('_MainTitleName')->value;?>
</a> / <a href="javascript:void(0)" class="here"><?php echo $_smarty_tpl->getVariable('_SubTitle_Name')->value;?>
</a></div>
      <div class="pri_cont">
      	    <div class="box">
        		<div class="box_title">新增<?php echo $_smarty_tpl->getVariable('_SubTitle_Name')->value;?>
</div>
                	<form name="FormEdit" id="FormEdit" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=editsave">
                    <table class="table_style" width="100%" cellspacing="0">
                      <tr>
                        <th width="25%">通路名稱</th>
                        <td>
                        	<input type="text" name="channel_name" value="" />
                            <input type="hidden" name="type" value="Channel" />
                        </td>
                        <th width="25%">排序</th>
                        <td>
                        	<input type="text" name="sortnum" value="" />
                        </td>
                      </tr>
                    </table>
                    </form>
             </div>
             <div class="btn_area"><a href="javascript:FormCheck()">確認</a></div>      	
             
             <div class="box">
        		<div class="box_title">編輯<?php echo $_smarty_tpl->getVariable('_SubTitle_Name')->value;?>
</div>
                	<form name="FormEdit2" id="FormEdit2" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=editsave">
                    <table class="table_style" id="DataList" width="100%" cellspacing="0">
                      <tr>
                        <th width="10%" style="text-align:center">項次</th>
                        <th style="text-align:center">通路名稱</th>
                        <th width="20%" style="text-align:center">排序</th>
                        <th width="20%" style="text-align:center">管理</th>
                      </tr>
                      <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataList']['index']++;
?>
                         <tr>
                         	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataList']['index']+1;?>
</td>
                            <td><input type="text" name="channel_name[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['config_name'];?>
" /></td>
                            <td><input type="text" name="sortnum[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['sortnum'];?>
" size="5" /></td>
                            <td>
                            	<input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" />
                                <a href="javascript:DeleteCheck($('.delBtn').index($(this)))" class="delBtn"><img src="images/del_icon.png" width="25" height="25" /></a>
                            </td>
                         </tr>
                      <?php }} ?>
                    </table>
                    </form>
             </div>
             <div class="btn_area"><a href="javascript:FormCheck2()">確認</a></div>      	
 
      </div><!--pri_cont -->          	
    </div><!--primary --> 
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";
		
		if($("input[name='channel_name']").val()=="")
			errorMsg += "-請輸入通路名稱\n";
			
		if(errorMsg==""){
			$.ajax({
			    url: "<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=editsave",
				type: 'POST',
				data: $("#FormEdit").serialize(),
				dataType: "json",
				success: function(jdata) {
					alert(jdata.msg);
					var newLine = "<tr>"+
									"<td>"+parseInt($("#DataList").find("tr").length)+"</td>"+
									"<td><input type=\"text\" name=\"channel_name[]\" value=\""+jdata.name+"\" /></td>"+
									"<td><input type=\"text\" name=\"sortnum[]\" value=\""+jdata.sortnum+"\" size=\"5\"/></td>"+
									"<td><input type=\"hidden\" name=\"id[]\" value=\""+jdata.id+"\" />"+
									"	 <a href=\"javascript:DeleteCheck($('.delBtn').index($(this)))\" class=\"delBtn\" ><img src=\"images/del_icon.png\" width=\"25\" height=\"25\" /></a>"+
									"</td>"+
					              "</tr>";
					
					$("#DataList").append(newLine).find("tr:last").hide().fadeIn("1000");
					$("#FormEdit")[0].reset();
					return false;
				},
				error:function(xhr){
					alert(xhr.responseText);
				}
			});
			
		}else{
			alert(errorMsg);
		}
		
	}
	
	function FormCheck2(){
		var errorMsg = "";
		
		$("input[name='channel_name[]']").each(function(){
			if($(this).val()==""){
				errorMsg += "-請輸入通路名稱\n";
				return false; 
			}
		});
			
		if(errorMsg==""){
			$.ajax({
			    url: "<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=editsave",
				type: 'POST',
				data: $("#FormEdit2").serialize(),
				dataType: "json",
				success: function(jdata) {
					alert(jdata.msg);
					window.history.go(0);
					return false;
				},
				error:function(xhr){
					alert(xhr.responseText);
				}
			});
			
		}else{
			alert(errorMsg);
		}
		
	}
	
	function DeleteCheck(idx){
		
		if(confirm("確認刪除["+$("input[name='channel_name[]']").eq(idx).val()+"]")){
			$.ajax({
			    url: "<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete",
				type: 'GET',
				data: "id="+$("input[name='id[]']").eq(idx).val(),
				dataType: "json",
				success: function(jdata) {
					alert(jdata.msg);
					$(".delBtn").eq(idx).parents("tr").remove();
					return false;
				},
				error:function(xhr){
					alert(xhr.responseText);
				}
			});
			
		}else{
			alert(errorMsg);
		}
		
	}
	
	
</script>