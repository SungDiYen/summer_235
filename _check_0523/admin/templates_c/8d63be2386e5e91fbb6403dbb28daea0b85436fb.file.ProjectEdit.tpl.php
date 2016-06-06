<?php /* Smarty version Smarty3-RC3, created on 2014-05-26 23:46:18
         compiled from "C:/AppServ/www/kttline/admin/\templates\ProjectEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6582538361ca889fd6-88436669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d63be2386e5e91fbb6403dbb28daea0b85436fb' => 
    array (
      0 => 'C:/AppServ/www/kttline/admin/\\templates\\ProjectEdit.tpl',
      1 => 1401118691,
    ),
  ),
  'nocache_hash' => '6582538361ca889fd6-88436669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('header_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
	.ProjTable{
		width:100%;
	}
	.ProjTable thead tr td,.ProjTable tbody tr td{
		padding:5px;
		border-collapse:collapse;
	}

	.ProjTable thead{
		background-color:#EEEEEE;
	}
</style>
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
                <label>建立時間</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['bdate'];?>
</p>
              </div>
              <div class="form-group">
                <label>案件編號</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['projectid'];?>
</p>
              </div>
              <div class="form-group">
                <label>開案醫院</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['hospital_name'];?>
</p>
              </div>
              <div class="form-group">
                <label>病歷號碼</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['patientid'];?>
</p>
              </div>

              <div class="form-group">
                <label>病患名稱</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['patientname'];?>
</p>
              </div>
              
              <div class="form-group">
                <label>排程醫生</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['maindoctor'];?>
</p>
              </div>
              <div class="form-group">
                <label>工作時間</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['workstart'];?>
~<?php echo $_smarty_tpl->getVariable('Data')->value['workend'];?>
</p>
              </div>
              
              <div class="form-group">
                <label>麻醉方式</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['mazuitype'];?>
</p>
              </div>
              
              <div class="form-group">
                <label>報到地點</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['location'];?>
</p>
              </div>
              
              <div class="form-group">
                <label>工作地區</label>
                <p><?php echo $_smarty_tpl->getVariable('Data')->value['workarea'];?>
</p>
              </div>
              
              <div class="form-group">
              	<label>派遣醫護人員</label>
                <div>
                	<table class="ProjTable">
                    	<thead>
                    	<tr>
                        	<td>no.</td>
                            <td>人員類別</td>
                            <td>姓名</td>
                            <td>性別</td>
                            <td>主要經歷院所及科別</td>
                            <td>主要經歷職稱</td>
                            <td>派遣情況</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ItemData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ItemData']['index']=-1;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ItemData']['index']++;
?>
                        <tr class="item_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['ItemData']['index'];?>
">
                        	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['ItemData']['index']+1;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['jobtype'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['doctor_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['sex'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['hospitalhistory'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['titlenamehistory'];?>
</td>
                            <td>
                            	<?php if ($_smarty_tpl->tpl_vars['obj']->value['status']=="unset"){?>
                                    <a href="SelDoctor.php?target=item_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['ItemData']['index'];?>
" class="dispatchBtn">選擇派遣人員</a>
                                <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('_DispatchStatus')->value[$_smarty_tpl->tpl_vars['obj']->value['status']];?>

                                <?php }?>
                                <input type="hidden" name="doctor[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['doctorid'];?>
" />
                                <input type="hidden" name="item_id[]" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['serno'];?>
" />
                            </td>
                        </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                </div>
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
	$("a.dispatchBtn").click(function(e){
		 e.preventDefault();
		 var $this = $(this);
		 var horizontalPadding = 30;
		 var verticalPadding = 30;
			
		$('<iframe id="externalSite" class="externalSite" src="' + this.href + '" />').dialog({
                title: ($this.attr('title')) ? $this.attr('title') : 'External Site',
                autoOpen: true,
                width: 800,
                height: 500,
                modal: true,
                resizable: true,
                autoResize: true,
                overlay: {
                    opacity: 0.5
                }
            }).width(800 - horizontalPadding).height(500 - verticalPadding);
	});
	
	function FormCheck(){
		var errorMsg = "";
		
		
		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>