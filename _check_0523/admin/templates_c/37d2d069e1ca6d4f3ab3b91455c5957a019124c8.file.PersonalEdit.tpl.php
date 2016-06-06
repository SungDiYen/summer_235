<?php /* Smarty version Smarty3-RC3, created on 2014-05-17 23:19:20
         compiled from "C:/AppServ/www/kttline/admin/\templates\PersonalEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1832753777df8463895-01578366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d2d069e1ca6d4f3ab3b91455c5957a019124c8' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\PersonalEdit.tpl',
      1 => 1400339948,
    ),
  ),
  'nocache_hash' => '1832753777df8463895-01578366',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\AppServ\www\kttline\admin\include\smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
        
          <div class="col-lg-6">
          	   <div class="form-group">
                <label>身分證編號</label>
                <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['idnumber'];?>
</p>
              </div>
              
          </div>
          <div class="col-lg-6">
          	   <div class="form-group">
                <label>登入密碼</label>
                
                <input type="password" name="passwd" value="<?php echo $_smarty_tpl->getVariable('Data')->value['passwd'];?>
" class="form-control"/>
              </div>
              
          </div>
          <div class="col-lg-6">
          	  <div class="form-group">
                <label>姓名</label>
                
                <input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['name'];?>
" class="form-control"/>
              </div>
              <div class="form-group">
                <label>暱稱</label>
                
                <input type="text" name="nickname" value="<?php echo $_smarty_tpl->getVariable('Data')->value['nickname'];?>
" class="form-control"/>
              </div>
              
              
          </div>
          <div class="col-lg-6">
          	  <div class="form-group">
                <label>聯絡電話</label>
                <input type="text" name="tel" id="tel" value="<?php echo $_smarty_tpl->getVariable('Data')->value['tel'];?>
" class="form-control"/>
              </div>
          	  <div class="form-group">
                <label>電子郵件</label>
                <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->getVariable('Data')->value['email'];?>
" class="form-control"/>
              </div>
          </div>
          
          <div class="col-lg-12">
          	  <div class="form-group">
                <label>聯絡地址</label>
                <br>
                <div id="twzipcode">
                    <div data-role="county" data-style="form-control twzip_county"></div>
                    <div data-role="district" data-style="form-control twzip_district"></div>
                    <div data-role="zipcode" data-style="form-control twzip_code"></div>
                </div>
                <input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->getVariable('Data')->value['address'];?>
" class="form-control" style="width:250px; display:inline-block"/>
              </div>
          	
          </div>
          <div class="col-lg-4">
          	  <div class="form-group">
                <label>性別</label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex_m" value="男" <?php if ($_smarty_tpl->getVariable('Data')->value['sex']=="男"){?>checked<?php }?>>男
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex_f" value="女" <?php if ($_smarty_tpl->getVariable('Data')->value['sex']=="女"){?>checked<?php }?>>女
                </label>
              </div>
          	  <div class="form-group" style="height:34px">
                <label>婚姻</label>
                <label class="radio-inline">
                    <input type="radio" name="marry"  value="已婚" <?php if ($_smarty_tpl->getVariable('Data')->value['marry']=="已婚"){?>checked<?php }?>>已婚
                </label>
                <label class="radio-inline">
                    <input type="radio" name="marry"  value="未婚" <?php if ($_smarty_tpl->getVariable('Data')->value['marry']=="未婚"){?>checked<?php }?>>未婚
                </label>
              </div>
              <div class="form-group">
                <label>身高</label>
                <input type="text" name="bodylength" id="bodylength" value="<?php echo $_smarty_tpl->getVariable('Data')->value['bodylength'];?>
" class="form-control" style="width:150px;display:inline"/>
              </div>
              <div class="form-group">
                <label>體重</label>
                <input type="text" name="bodyweight" id="bodyweight" value="<?php echo $_smarty_tpl->getVariable('Data')->value['bodyweight'];?>
" class="form-control" style="width:150px;display:inline"/>
              </div>
              <div class="form-group">
                <label>生日</label>
                <input type="text" name="birthday" id="birthday" value="<?php echo $_smarty_tpl->getVariable('Data')->value['birthday'];?>
" class="form-control date_pick" style="width:150px;display:inline"/>
              </div>
          </div>
      
          
          <div class="col-lg-6"> 
          	  <div class="form-group">
                <label>醫療人員類別</label>
                <select name="doctortype" class="form-control" style="width:150px;display:inline">
                     <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DoctorType')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                     	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->getVariable('Data')->value['doctortype']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                     <?php }} ?>
                 </select>
              </div>
          	  <div class="form-group">
                <label>學&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;歷</label>
                <select name="school" class="form-control" style="width:150px;display:inline">
                     <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_EducType')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                     	<option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['obj']->value==$_smarty_tpl->getVariable('Data')->value['eductype']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                     <?php }} ?>
                 </select>
                 <input type="text" name="studyrecord1" id="studyrecord1" value="<?php echo $_smarty_tpl->getVariable('Data')->value['studyrecord1'];?>
" class="form-control" style="width:200px;display:inline"/>
              </div>
              <div class="form-group">
                <label>訓練醫療院所</label>
                 <input type="text" name="studyrecord2" id="studyrecord2" value="<?php echo $_smarty_tpl->getVariable('Data')->value['studyrecord2'];?>
" class="form-control" style="width:200px;display:inline"/>
              </div>
              <div class="form-group">
                <label>聯&nbsp;&nbsp;&nbsp;絡&nbsp;&nbsp;時&nbsp;&nbsp;&nbsp;間</label>
                <select name="contacttime" id="contacttime"  class="form-control"  style="width:200px;display:inline">
                    <option value="隨時">隨時</option>
                    <option value="上午">上午</option>
                    <option value="下午">下午</option>
                    <option value="晚上">晚上</option>
                </select>
              </div>
              <div class="form-group">
                <label>希望工作地點</label>
                <select name="city1" class="form-control"  style="width:130px;display:inline">
                    <option value="">地點1</option>
                    <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_TWCity')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['goodplace1']==$_smarty_tpl->tpl_vars['obj']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                    <?php }} ?>
                </select>
                
                <select name="city2" class="form-control"  style="width:130px;display:inline">
                    <option value="">地點2</option>
                    <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_TWCity')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['goodplace2']==$_smarty_tpl->tpl_vars['obj']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                    <?php }} ?>
                </select>
                
                <select name="city3" class="form-control"  style="width:130px;display:inline">
                    <option value="">地點3</option>
                    <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_TWCity')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['goodplace3']==$_smarty_tpl->tpl_vars['obj']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                    <?php }} ?>
                </select>
                
              </div>
          </div>
          
          
          
          <div class="col-lg-3"> 
          	  <div class="form-group">
                <label>院所及科別名稱</label>
                <input type="text" name="hospitalhistory" id="hospitalhistory" value="<?php echo $_smarty_tpl->getVariable('Data')->value['hospitalhistory'];?>
" class="form-control"/>
              </div>
          
          </div>
          <div class="col-lg-3"> 
          	  <div class="form-group">
                <label>職稱</label>
                <input type="text" name="titlenamehistory" id="titlenamehistory" value="<?php echo $_smarty_tpl->getVariable('Data')->value['titlenamehistory'];?>
" class="form-control"/>
              </div>
          
          </div>
          <div class="col-lg-6"> 
          	  <div class="form-group">
                <label>服務期間</label>
                <br>
                <select name="expert_start_year" class="form-control" style="width:100px;display:inline">
                	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['name'] = 'year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = (int)1911;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] = is_array($_loop=smarty_modifier_date_format($_smarty_tpl->getVariable('_Now_Time')->value,"%Y")+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total']);
?>
                    	<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['year']['index']==$_smarty_tpl->getVariable('Data')->value['expert_start_year']){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
</option>
                    <?php endfor; endif; ?>
                   
                </select>
                <select name="expert_start_month" class="form-control" style="width:80px;display:inline">
                	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['name'] = 'month';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total']);
?>
                    	<option value="<?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['month']['index'],2,"0",@STR_PAD_LEFT);?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month']['index']==$_smarty_tpl->getVariable('Data')->value['expert_start_month']){?>selected<?php }?>><?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['month']['index'],2,"0",@STR_PAD_LEFT);?>
</option>
                    <?php endfor; endif; ?>
                   
                </select>
                ～
                <select name="expert_end_year" class="form-control" style="width:100px;display:inline">
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['name'] = 'year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = (int)1911;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] = is_array($_loop=smarty_modifier_date_format($_smarty_tpl->getVariable('_Now_Time')->value,"%Y")+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total']);
?>
                    	<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['year']['index']==$_smarty_tpl->getVariable('Data')->value['expert_end_year']){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['year']['index'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
                <select name="expert_end_month" class="form-control" style="width:80px;display:inline">
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['name'] = 'month';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total']);
?>
                    	<option value="<?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['month']['index'],2,"0",@STR_PAD_LEFT);?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month']['index']==$_smarty_tpl->getVariable('Data')->value['expert_end_month']){?>selected<?php }?>><?php echo str_pad($_smarty_tpl->getVariable('smarty')->value['section']['month']['index'],2,"0",@STR_PAD_LEFT);?>
</option>
                    <?php endfor; endif; ?>
                </select>
              </div>
          
          </div>
          
          <div class="col-lg-3"> 
          	  <div class="form-group">
                <label>照片</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['pictureimg']!=''){?>
                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['pictureimg'];?>
" target="_blank">
                    <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['pictureimg'];?>
" width="150" ></img>
                </a>
                <?php }?>
                <input type="file" name="pictureimg" id="pictureimg">
                <?php if ($_smarty_tpl->getVariable('Data')->value['pictureimg']!=''){?>
                <input type="checkbox" name="pic_Del" value="*" />刪除
                <input type="hidden" name="opic" value="<?php echo $_smarty_tpl->getVariable('Data')->value['pictureimg'];?>
" />
                <?php }?>
              </div>
          
          </div>
          
          <div class="col-lg-3"> 
          	  <div class="form-group">
                <label>證照</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['licenseimg']!=''){?>
                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['licenseimg'];?>
" target="_blank">
                    <img src="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['licenseimg'];?>
" width="150" ></img>
                </a>
                <?php }?>
                <input type="file" name="licenseimg" id="licenseimg">
                <?php if ($_smarty_tpl->getVariable('Data')->value['licenseimg']!=''){?>
                <input type="checkbox" name="license_Del" value="*" />刪除
                <input type="hidden" name="olicenseimg" value="<?php echo $_smarty_tpl->getVariable('Data')->value['licenseimg'];?>
" />
                <?php }?>
              </div>
          
          </div>
          
          <div class="col-lg-3"> 
          	  <div class="form-group">
                <label>自傳</label>
                <?php if ($_smarty_tpl->getVariable('Data')->value['autobiography']!=''){?>
                <a href="<?php echo $_smarty_tpl->getVariable('uploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('Data')->value['autobiography'];?>
" target="_blank">
                    檔案
                </a>
                <?php }?>
                <input type="file" name="autobiography" id="autobiography">
                <?php if ($_smarty_tpl->getVariable('Data')->value['autobiography']!=''){?>
                <input type="checkbox" name="auto_Del" value="*" />刪除
                <input type="hidden" name="oautobiography" value="<?php echo $_smarty_tpl->getVariable('Data')->value['autobiography'];?>
" />
                <?php }?>
              </div>
          
          </div>
          
          
          <div class="col-lg-12">    
 	
              <div class="form-group">
                <label>狀態</label>
                <select name="status" id="status" class="form-control" style="width:100px; ">
                	<?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MebStatus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('Data')->value['meb_status']==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value;?>
</option>
                    <?php }} ?>
                </select>
              </div>

              <button type="submit" class="btn btn-success" onclick="FormCheck()">確認修改</button>

          </div>
        </div><!-- /.row -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['serno'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";
		
		if($("input[name='name']").val()=="")
			errorMsg += "-請輸入名稱\n";
		
		if($("input[name='passwd']").val()=="")
			errorMsg += "-請輸入密碼\n";
			
		if($("input[name='tel']").val()=="")
			errorMsg += "-請輸入聯絡電話\n";
			
		if($("input[name='email']").val()=="")
			errorMsg += "-請輸入EMAIL\n";
			
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	$(document).ready(function(){
		$('#twzipcode').twzipcode({
			'countySel': '<?php echo $_smarty_tpl->getVariable('Data')->value['addrcity'];?>
',
			'districtSel': '<?php echo $_smarty_tpl->getVariable('Data')->value['addrarea'];?>
',
			'zipcodeSel':'<?php echo $_smarty_tpl->getVariable('Data')->value['zipcode'];?>
'
		});
	});
</script>