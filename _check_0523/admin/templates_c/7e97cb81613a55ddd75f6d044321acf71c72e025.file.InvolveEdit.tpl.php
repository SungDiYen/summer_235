<?php /* Smarty version Smarty3-RC3, created on 2016-05-12 07:23:54
         compiled from "/home/taiwannt/public_html/admin//templates/InvolveEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20076311755733bf0a2060e8-62413487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e97cb81613a55ddd75f6d044321acf71c72e025' => 
    array (
      0 => '/home/taiwannt/public_html/admin//templates/InvolveEdit.tpl',
      1 => 1463008895,
    ),
  ),
  'nocache_hash' => '20076311755733bf0a2060e8-62413487',
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
                            <label>作品編號</label>
                            <span><?php echo $_smarty_tpl->getVariable('Data')->value['involve_name'];?>
</span>
                          </div>
            			  <div class="form-group">
                            <label>報名者姓名</label>
                            <input type="text" class="form-control" name="involve_name" id="involve_name" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_name'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>聯絡電話</label>
                            <input type="text" class="form-control" name="involve_tel" id="involve_tel" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_tel'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>email</label>
                            <input type="text" class="form-control" name="involve_email" id="involve_email" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_email'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>學校名稱</label>
                            <input type="text" class="form-control" name="involve_school" id="involve_school" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_school'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>科系</label>
                            <input type="text" class="form-control" name="involve_department" id="involve_department" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_department'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>年級</label>
                            <input type="text" class="form-control" name="involve_grade" id="involve_grade" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_grade'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>作品名稱</label>
                            <input type="text" class="form-control" name="involve_movie" id="involve_movie" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_movie'];?>
" />
                          </div>
                          <div class="form-group">
                            <label>聯絡地址</label>
                              <div id="twzipcode">
                                <div class="col-lg-2" data-role="county" data-style="form-control"  data-value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_county'];?>
"></div>
                                <div class="col-lg-2" data-role="district" data-style="form-control" data-value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_district'];?>
"></div>
                                <div class="col-lg-2" data-role="zipcode" data-style="form-control"  data-value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_zip'];?>
"></div>
                                <input type="text" class="form-control" name="address" style="width:400px" value="<?php echo $_smarty_tpl->getVariable('Data')->value['involve_address'];?>
" >
                              </div>
                             
                          </div>
                    	  <div class="form-group">
                            <label>作品檔案</label>
                            <?php if ($_smarty_tpl->getVariable('Data')->value['involve_filename']!=''){?>
                           		<!-- <video src="http://ftp.uniplan.com.tw/<?php echo $_smarty_tpl->getVariable('Data')->value['involve_filename'];?>
" controls></video>-->
                                <?php echo $_smarty_tpl->getVariable('Data')->value['involve_filename'];?>

                            <?php }?>
                          </div>
                          <div class="form-group">
                            <label>作品簡介</label>
                            <textarea class="form-control" name="involve_intro" id="involve_intro" rows="8"><?php echo $_smarty_tpl->getVariable('Data')->value['involve_intro'];?>
</textarea>
                          </div>
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="<?php echo $_smarty_tpl->getVariable('Data')->value['sortnum'];?>
" />
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" <?php if ($_smarty_tpl->getVariable('Data')->value['show_status']=="Y"||$_smarty_tpl->getVariable('Data')->value['movie_list_id']==''){?>checked<?php }?> >是
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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('Data')->value['movie_list_id'];?>
" />
        </form>
    </div>

<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footer_page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script src="js/jquery.twzipcode.min.js"></script>
<script>
	function FormCheck(){
		var errorMsg = "";


		
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
	
	$(document).ready(function(e) {
		$('#twzipcode').twzipcode({
			'readonly': true
		});
	});
</script>