<?php /* Smarty version Smarty3-RC3, created on 2014-10-05 12:24:05
         compiled from "C:/xampp/htdocs/psoator/admin/\templates\QAEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138095430c7e5c2aa77-47669255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7118c2e454ac990a417e938471f0c00fc084d91' => 
    array (
      0 => 'C:/xampp/htdocs/psoator/admin/\\templates\\QAEdit.tpl',
      1 => 1412483038,
    ),
  ),
  'nocache_hash' => '138095430c7e5c2aa77-47669255',
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
                            <label>發問時間</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['create_time'];?>
</p>
                          </div>
                          <div class="form-group">
                            <label>會員姓名</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['member_name'];?>
</p>
                          </div>
                    	  <div class="form-group">
                            <label>主旨</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['qa_title'];?>
</p>
                          </div>
                          <div class="form-group">
                            <label>問題內容</label>
                            <p class="form-control-static"><?php echo nl2br($_smarty_tpl->getVariable('Data')->value['qa_content']);?>
</p>
                          </div>
                          <div class="form-group">
                            <label>回覆</label>
                            <textarea class="form-control" name="content" id="content" rows="3"><?php echo $_smarty_tpl->getVariable('Data')->value['qa_reply'];?>
</textarea>
                          </div>
                          <div class="form-group">
                            <label>回覆時間</label>
                            <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('Data')->value['qa_reply_time'];?>
</p>
                          </div>
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['qa_id']==''){?>checked<?php }?> >是
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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['qa_id'];?>
" />
        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('_Type')->value;?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function FormCheck(){
		var errorMsg = "";

		if($("#content").val()=="")
			errorMsg += "-請輸入回覆\n";

		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>