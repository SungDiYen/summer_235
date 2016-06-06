<?php /* Smarty version Smarty3-RC3, created on 2014-10-04 15:53:53
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\MemberEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4910542fa791ebec75-71302940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01937651a23d072b4595cda7cb74bc9b0b9f9a1' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\MemberEdit.tpl',
      1 => 1412409231,
    ),
  ),
  'nocache_hash' => '4910542fa791ebec75-71302940',
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
                    	  <div class="col-lg-4">
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
                                <input type="radio" name="member_sex" id="member_sex1" value="male" <?php if ($_smarty_tpl->getVariable('Data')->value['member_sex']=="male"){?>checked<?php }?>/>男
                                <input type="radio" name="member_sex" id="member_sex2" value="female" <?php if ($_smarty_tpl->getVariable('Data')->value['member_sex']=="female"){?>checked<?php }?>/>女
                              </div>
                              <div class="form-group">
                                <label>生日</label>
                                <input type="text" name="member_birthday" id="member_birthday" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_birthday'];?>
" class="form-control date_pick"/>
                              </div>
                              <div class="form-group">
                                <label>身份證字號</label>
                                <input type="text" name="member_idno" id="member_idno" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_idno'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>行動電話</label>
                                <input type="text" name="member_mobile" id="member_mobile" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_mobile'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>聯絡電話</label>
                                <input type="text" name="member_tel" id="member_tel" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_tel'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>地址</label>
                                <input type="text" name="member_address" id="member_address" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_address'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>經歷</label>
                                <input type="text" name="member_exp" id="member_exp" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_exp'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>現職</label>
                                <input type="text" name="member_job" id="member_job" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_job'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>照片</label>
                                <?php if ($_smarty_tpl->getVariable('Data')->value['member_photo']!=''){?>
                                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['member_photo'];?>
" target="_blank">
                                    <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['member_photo'];?>
" width="150" ></img>
                                </a>
                                <?php }?>
                                <input type="file" name="member_pic" id="member_pic">
                                <?php if ($_smarty_tpl->getVariable('Data')->value['member_photo']!=''){?>
                                <input type="checkbox" name="pic_Del" value="*" />刪除
                                <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_photo'];?>
" />
                                <?php }?>
                              </div>
                          </div>
                          <div class="col-lg-8">
                          	  
                          	  <div class="form-group">
                                <label>身份</label>
                                <div class="check_group">
                                <input type="checkbox" name="identity[]" value="乾癬患者" id="m_identity1" <?php if (in_array("乾癬患者",$_smarty_tpl->getVariable('identity')->value['items'])){?>checked<?php }?>>
                                <label for="m_identity1">乾癬患者</label>
                                <input type="checkbox" name="m_identity[]" id="m_identity2" value="乾癬性關節炎" <?php if (in_array("乾癬性關節炎",$_smarty_tpl->getVariable('identity')->value['items'])){?>checked<?php }?>>
                                <label for="m_identity2">乾癬性關節炎</label>
                                <input type="checkbox" name="m_identity[]" id="m_identity3" value="乾癬及乾癬性關節炎" <?php if (in_array("乾癬及乾癬性關節炎",$_smarty_tpl->getVariable('identity')->value['items'])){?>checked<?php }?>>
                                <label for="m_identity3">乾癬及乾癬性關節炎</label><br>
                                <input type="checkbox" name="m_identity[]" id="m_identity4" value="患者家屬" <?php if (in_array("患者家屬",$_smarty_tpl->getVariable('identity')->value['items'])){?>checked<?php }?>>
                                <label for="m_identity4">患者家屬</label>
                                <input type="checkbox" name="m_identity[]" id="m_identity5" value="醫護人員" <?php if (in_array("醫護人員",$_smarty_tpl->getVariable('identity')->value['items'])){?>checked<?php }?>>
                                <label for="m_identity5">醫護人員</label>
                                <input type="checkbox" name="m_identity[]" id="m_identity6" value="其他" <?php if (in_array("其他",$_smarty_tpl->getVariable('identity')->value['items'])){?>checked<?php }?>>
                                <label for="m_identity6">其他</label><input type="text" name="m_identity6Txt" id="m_identity6Txt" value="<?php echo $_smarty_tpl->getVariable('identity')->value['other'];?>
">
                                </div>
                              </div>
                              <div class="form-group">
                                <label>在何處得知本會消息</label>
                                <div class="check_group">
                                <input type="checkbox" name="m_whereLearn[]" id="m_whereLearn1" value="醫院" <?php if (in_array("醫院",$_smarty_tpl->getVariable('know')->value['items'])){?>checked<?php }?>>
                                <label for="m_whereLearn1">醫院</label>
                                <input type="checkbox" name="m_whereLearn[]" id="m_whereLearn2" value="網站" <?php if (in_array("網站",$_smarty_tpl->getVariable('know')->value['items'])){?>checked<?php }?> >
                                <label for="m_whereLearn2">網站</label>
                                <input type="checkbox" name="m_whereLearn[]" id="m_whereLearn3" value="報章雜誌" <?php if (in_array("報章雜誌",$_smarty_tpl->getVariable('know')->value['items'])){?>checked<?php }?>>
                                <label for="m_whereLearn3">報章雜誌</label>
                                <input type="checkbox" name="m_whereLearn[]" id="m_whereLearn4" value="親友介紹" <?php if (in_array("親友介紹",$_smarty_tpl->getVariable('know')->value['items'])){?>checked<?php }?>>
                                <label for="m_whereLearn4">親友介紹</label>
                                <input type="checkbox" name="m_whereLearn[]" id="m_whereLearn5" value="其他" <?php if (in_array("其他",$_smarty_tpl->getVariable('know')->value['items'])){?>checked<?php }?>>
                                <label for="m_whereLearn5">其他</label><input type="text" name="m_whereLearn5Txt" id="m_whereLearn5Txt" value="<?php echo $_smarty_tpl->getVariable('know')->value['other'];?>
">
                                </div>
                              </div>
                              <div class="form-group">
                              	 <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('Record')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                              	 <div class="col-lg-3">
                                 	<label>主治醫師</label>
                                	<input type="text" name="doctor[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_record_doctor'];?>
" class="form-control "/>
                                    <input type="hidden" name="record_id[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_record_id'];?>
" />
                                 </div>
                              	 <div class="col-lg-4">
                                 	<label>醫院名稱</label>
                                	<input type="text" name="hospital[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_record_hospital'];?>
" class="form-control "/>
                                 </div>
                                 <div class="col-lg-4">
                                 	<label>科別</label>
                                	<input type="text" name="department[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_record_department'];?>
" class="form-control "/>
                                 </div>
                                 <?php }} ?>
                              </div>
                              <div class="form-group">
                                <label>發病的時間</label>
                                <input type="text" name="fallTime" id="fallTime" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_fallTime'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>發病的過程</label>
                                <textarea name="fallProcess" id="fallProcess" class="form-control " rows="5"><?php echo $_smarty_tpl->getVariable('Data')->value['member_fallProcess'];?>
</textarea>
                              </div>
                              <div class="form-group">
                                <label>目前的症狀</label>
                                <input type="text" name="currentlySym" id="currentlySym" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_currentlySym'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>目前的就醫情形</label>
                                <input type="text" name="currentlySitu" id="currentlySitu" value="<?php echo $_smarty_tpl->getVariable('Data')->value['member_currentlySitu'];?>
" class="form-control "/>
                              </div>
                              <div class="form-group">
                                <label>如果我們想邀請您加入志工行列，您的意願是</label>
                                <br>
                                <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MebJoinOption')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                	<input type="radio" name="joinOption" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['member_joinstatus']==$_smarty_tpl->tpl_vars['key']->value){?>checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>

                                <?php }} ?>
                              </div>
                          </div>
                          <div class="col-lg-12">
                          	   <div class="form-group">
                                <label>審核狀態</label>
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