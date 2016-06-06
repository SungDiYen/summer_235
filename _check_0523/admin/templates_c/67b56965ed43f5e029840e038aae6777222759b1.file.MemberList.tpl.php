<?php /* Smarty version Smarty3-RC3, created on 2014-09-14 15:28:13
         compiled from "C:/xampp/htdocs/sakima/admin/\templates\MemberList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107815415438d48a9e3-02768531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b56965ed43f5e029840e038aae6777222759b1' => 
    array (
      0 => 'C:/xampp/htdocs/sakima/admin/\\templates\\MemberList.tpl',
      1 => 1410679690,
    ),
  ),
  'nocache_hash' => '107815415438d48a9e3-02768531',
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
                <h3 class="page-header"><?php echo $_smarty_tpl->getVariable('_SubTitleName')->value;?>
</h3>
            </div>

        </div>
       
        <form name="SearchForm" id="SearchForm" method="post" action="<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search">
        <div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-12">
                    <div id="dataTables-example_filter" class="dataTables_filter" style="margin-bottom:10px">
                       
                        查詢:
                        <select name="SearchGrade" class="form-control input-sm" >
                            <option value="">選擇會員等級</option>
                            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_MebGrade')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['obj']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('SearchGrade')->value==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['obj']->value['title'];?>
</option>
                            <?php }} ?>
                        </select>                      
                        <select name="SearchBYear" class="form-control input-sm" >
                        	<option value="">出生年</option>
                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = (1911 - (2014) < 0) ? -1 : 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 1911+1 - 2014 : 2014-(1911)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 2014, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->getVariable('SearchBYear')->value==$_smarty_tpl->tpl_vars['foo']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                            <?php }} ?>
                        </select>
                        <select name="SearchBMonth" class="form-control input-sm" >
                        	<option value="">出生月</option>
                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = (12 - (01) < 0) ? -1 : 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 12+1 - 01 : 01-(12)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 01, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->getVariable('SearchBMonth')->value==$_smarty_tpl->tpl_vars['foo']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                            <?php }} ?>
                        </select>
                        <select name="SearchBDay" class="form-control input-sm" >
                        	<option value="">出生日</option>
                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = (31 - (01) < 0) ? -1 : 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 31+1 - 01 : 01-(31)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 01, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->getVariable('SearchBDay')->value==$_smarty_tpl->tpl_vars['foo']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                            <?php }} ?>
                        </select>
                        <input type="tel" name="SearchMoney"  class="form-control input-sm" aria-controls="dataTables-example" value="<?php echo $_smarty_tpl->getVariable('SearchMoney')->value;?>
" placeholder="購物金額" size="5" />
                        <input type="text" name="SearchName" class="form-control input-sm" aria-controls="dataTables-example" value="<?php echo $_smarty_tpl->getVariable('SearchName')->value;?>
" placeholder="請輸入會員姓名/帳號">
                        
                        <button type="button" class="btn btn-primary btn-xs" onclick="$('#SearchForm').submit()"><i class="fa fa-search"></i> 搜尋</button>
                        <?php if ($_smarty_tpl->getVariable('WhereStr')->value!=''){?>
                        	<button type="button" class="btn btn-warning btn-xs" onclick="$('#SearchForm').attr('action','<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=search_clear');$('#SearchForm').submit()"><i class="fa fa-times"></i> 清除搜尋</button>
                        <?php }?>
                        <button type="button" class="btn btn-info btn-xs" onclick="ExportMember()"><i class="fa fa-download"></i> 匯出會員資料</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-lg-12">
                	<form name="ListForm" id="ListForm" method="post" action="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=delete" >
                      <div class="table-responsive">
                          
                          <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                              <tr>
                                  <th width="60px"></th>
                                  <th>帳號</th>
                                  <th>姓名</th>
                                  <th>性別</th>
                                  <th>生日 <a class="fa <?php if ($_smarty_tpl->getVariable('sortby')->value=='birthday'){?>fa-sort-<?php echo $_smarty_tpl->getVariable('sorticon')->value;?>
<?php }else{ ?>fa-sort<?php }?>" href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=sort&sortby=birthday"></a></th>
                                  <th>聯絡電話</th>
                                  <th>累積購買金額 <a class="fa <?php if ($_smarty_tpl->getVariable('sortby')->value=='buytotal'){?>fa-sort-<?php echo $_smarty_tpl->getVariable('sorticon')->value;?>
<?php }else{ ?>fa-sort<?php }?>" href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=sort&sortby=buytotal"></a></th>
                                  <th>會員等級</th>
                                  <th width="120px">建檔日 <a class="fa <?php if ($_smarty_tpl->getVariable('sortby')->value=='cdate'){?>fa-sort-<?php echo $_smarty_tpl->getVariable('sorticon')->value;?>
<?php }else{ ?>fa-sort<?php }?>" href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=sort&sortby=cdate"></a></th>
                                  <th width="60px">編輯</th>
                              </tr>
                              <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('DataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
?>
                              <tr>
                                  <td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_id'];?>
" /></td>
                                  <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['member_email'];?>
</td>
                                  <td>
                                      <?php echo $_smarty_tpl->tpl_vars['obj']->value['member_name'];?>

                                  </td>
                                  <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['member_sex'];?>
</td>
                                  <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['member_birthday'];?>
</td>
                                  <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['member_tel'];?>
</td>
                                  <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['buytotal'];?>
</td>
                                  <td><?php echo $_smarty_tpl->getVariable('_MebGrade')->value[$_smarty_tpl->tpl_vars['obj']->value['member_grade']]['title'];?>
</td>
                                  <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['create_time'];?>
</td>
                                  <td>
                                      <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=edit&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_id'];?>
" title="修改"><i class="fa fa-pencil"></i></a>
                                      <a href="<?php echo $_smarty_tpl->getVariable('_FileName')->value;?>
?flag=add_money&id=<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_id'];?>
" title="新增購物金"><i class="fa fa-plus-circle"></i></a>
                                      <!--<a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='<?php echo $_smarty_tpl->getVariable('FileName')->value;?>
?flag=delete&ids=<?php echo $_smarty_tpl->tpl_vars['obj']->value['member_id'];?>
'" title="刪除"><i class="fa fa-trash-o"></i></a> -->
                                  </td>
                              </tr>
                             <?php }} ?>
                          </table>
                          
                          <div class="pages"> 
                          <?php echo $_smarty_tpl->getVariable('PageStr')->value;?>
  	
                          </div>
                      </div>
                      <!-- /.table-responsive -->
                  </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
    <script>
    	function ExportMember(){
			var url = "ExportMember.php";
			
			location.href=url;
			
		}
    </script>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>