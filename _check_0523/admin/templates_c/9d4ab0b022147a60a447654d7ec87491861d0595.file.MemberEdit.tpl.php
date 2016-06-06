<?php /* Smarty version Smarty3-RC3, created on 2014-11-04 15:46:07
         compiled from "/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/MemberEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2562952945458843f2e31d6-03197704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4ab0b022147a60a447654d7ec87491861d0595' => 
    array (
      0 => '/var/www/vhosts/ecmd.com.tw/subdomains/case2/httpdocs/admin//templates/MemberEdit.tpl',
      1 => 1413554780,
    ),
  ),
  'nocache_hash' => '2562952945458843f2e31d6-03197704',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
.check_group label{
	font-weight:normal;
}
</style>
<script type="text/javascript" src="include/jquery.twzipcode.js"></script>
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
?flag=editsave" method="post"  enctype="multipart/form-data">
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
                    	  <div class="col-lg-12">
                              <div class="form-group">
                                <label>帳號</label>
                                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['member_uid'];?>
</p>
                              </div>
                              <div class="form-group">
                                <label>密碼</label>
                                <input type="text" name="member_passwd" id="member_passwd" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_passwd'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>姓名</label>
                                <input type="text" name="member_name" id="member_name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_name'];?>
" class="form-control "/>
                              </div>                            
                              <div class="form-group">
                                <label>性別</label>
                                <input type="radio" name="member_sex" id="member_sex1" value="男" <?php if ($_smarty_tpl->getVariable('Data')->value['member_sex']=="男"){?>checked<?php }?>/>男
                                <input type="radio" name="member_sex" id="member_sex2" value="女" <?php if ($_smarty_tpl->getVariable('Data')->value['member_sex']=="女"){?>checked<?php }?>/>女
                              </div>
                              <div class="form-group">
                                <label>EMail</label>
                                <input type="text" name="member_email" id="member_email" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_email'];?>
" class="form-control"/>
                              </div>
                              <div class="form-group">
                                <label>生日</label>
                                <input type="text" name="member_birthday" id="member_birthday" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_birthday'];?>
" class="form-control date_pick"/>
                              </div>
                              <div class="form-group">
                                <label>行動電話</label><br>
                                <input type="text" name="mobile1" id="mobile1" value="<?php echo $_smarty_tpl->getVariable('mobile')->value[0];?>
" class="form-control " style="width:100px; display:inline-block" maxlength="4"/>
                                -
                                <input type="text" name="mobile2" id="mobile2" value="<?php echo $_smarty_tpl->getVariable('mobile')->value[1];?>
" class="form-control " style="width:100px; display:inline-block" maxlength="4"/>
                              	-
                                <input type="text" name="mobile3" id="mobile3" value="<?php echo $_smarty_tpl->getVariable('mobile')->value[2];?>
" class="form-control " style="width:100px; display:inline-block" maxlength="4"/>
                              </div>
                              <div class="form-group">
                                <label>聯絡電話</label><br>
                                <input type="text" name="tel1" id="tel1" value="<?php echo $_smarty_tpl->getVariable('tel')->value[0];?>
" class="form-control " style="width:100px; display:inline-block" maxlength="2"/>
                                -
                                <input type="text" name="tel2" id="tel2" value="<?php echo $_smarty_tpl->getVariable('tel')->value[1];?>
" class="form-control " style="width:100px; display:inline-block" maxlength="4"/>
                              	-
                                <input type="text" name="tel3" id="tel3" value="<?php echo $_smarty_tpl->getVariable('tel')->value[2];?>
" class="form-control " style="width:100px; display:inline-block" maxlength="4"/>
                              </div>
                              <div class="form-group">
                                <label>地址</label>
                                <div id="twzipcode">
                                    <div data-role="county" data-value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_county'];?>
"></div> 
                                    <div data-role="district" data-value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_district'];?>
"></div> 
                                    <div data-role="zipcode"  data-style="zipcode" style="display:none" data-value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_zipcode'];?>
"></div>
                                    <div> <input type="text" name="member_address" id="member_address" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_address'];?>
" class="form-control "/></div>
                                </div> 
                               
                              </div>
                              <div class="form-group">
                                <label>訂閱電子報</label>
                                <input type="radio" name="member_epaper" id="member_epaper1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['member_epaper']=="Y"){?>checked<?php }?>/>是
                                <input type="radio" name="member_epaper" id="member_epaper2" value="N" <?php if ($_smarty_tpl->getVariable('Data')->value['member_epaper']=="N"){?>checked<?php }?>/>否
                              </div>
                              
                          </div>
                          
                          <div class="col-lg-12">
                          	   <div class="form-group">
                                <label>會員狀態</label>
                                <select name="member_status" id="member_status" class="form-control" style="width:150px">
                                	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MebStatus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                    	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['member_status']==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                                    <?php }} ?>
                                </select>
                              </div>
                               <button type="submit" class="btn btn-success">確認修改</button>
                          </div>
                          
                         
                    </div>
              </div>      
              

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_id'];?>
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

		if($("input[name='member_name']").val()=="")
			errorMsg += "-請輸入姓名\n";
		
		if($("input[name='member_passwd']").val()=="")
			errorMsg += "-請輸入密碼\n";
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>