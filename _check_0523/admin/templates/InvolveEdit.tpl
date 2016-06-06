{include file=$header_page}
{include file=$menu_page}
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">{$_SubTitleName}</h3>
            <!--<ol class="breadcrumb">
              <li><a href="Main.php"><i class="fa fa-dashboard"></i> {$_MainTitleName}</a></li>
              <li class="active"><a href="{$_FileName}"><i class="fa fa-edit"></i> {$_SubTitleName}</a></li>
            </ol>-->
            
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" action="{$_FileName}?flag=editsave" method="post" onsubmit="FormCheck();return false;"  enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12">
			  <div class="panel panel-default">
                    <div class="panel-heading">
                        {if $ID == ""}新增{else}編輯{/if}{$_SubTitleName}
                        <div class="pull-right">
                        	
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    	  <div class="form-group">
                            <label>作品編號</label>
                            <span>{$Data.involve_name}</span>
                          </div>
            			  <div class="form-group">
                            <label>報名者姓名</label>
                            <input type="text" class="form-control" name="involve_name" id="involve_name" value="{$Data.involve_name}" />
                          </div>
                          <div class="form-group">
                            <label>聯絡電話</label>
                            <input type="text" class="form-control" name="involve_tel" id="involve_tel" value="{$Data.involve_tel}" />
                          </div>
                          <div class="form-group">
                            <label>email</label>
                            <input type="text" class="form-control" name="involve_email" id="involve_email" value="{$Data.involve_email}" />
                          </div>
                          <div class="form-group">
                            <label>學校名稱</label>
                            <input type="text" class="form-control" name="involve_school" id="involve_school" value="{$Data.involve_school}" />
                          </div>
                          <div class="form-group">
                            <label>科系</label>
                            <input type="text" class="form-control" name="involve_department" id="involve_department" value="{$Data.involve_department}" />
                          </div>
                          <div class="form-group">
                            <label>年級</label>
                            <input type="text" class="form-control" name="involve_grade" id="involve_grade" value="{$Data.involve_grade}" />
                          </div>
                          <div class="form-group">
                            <label>作品名稱</label>
                            <input type="text" class="form-control" name="involve_movie" id="involve_movie" value="{$Data.involve_movie}" />
                          </div>
                          <div class="form-group">
                            <label>聯絡地址</label>
                              <div id="twzipcode">
                                <div class="col-lg-2" data-role="county" data-style="form-control"  data-value="{$Data.involve_county}"></div>
                                <div class="col-lg-2" data-role="district" data-style="form-control" data-value="{$Data.involve_district}"></div>
                                <div class="col-lg-2" data-role="zipcode" data-style="form-control"  data-value="{$Data.involve_zip}"></div>
                                <input type="text" class="form-control" name="address" style="width:400px" value="{$Data.involve_address}" >
                              </div>
                             
                          </div>
                    	  <div class="form-group">
                            <label>作品檔案</label>
                            {if $Data.involve_filename!=""}
                           		<!-- <video src="http://ftp.uniplan.com.tw/{$Data.involve_filename}" controls></video>-->
                                {$Data.involve_filename}
                            {/if}
                          </div>
                          <div class="form-group">
                            <label>作品簡介</label>
                            <textarea class="form-control" name="involve_intro" id="involve_intro" rows="8">{$Data.involve_intro}</textarea>
                          </div>
                          <div class="form-group">
                            <label>排序</label>
                            <input type="text" class="form-control" name="sortnum" id="sortnum" value="{$Data.sortnum}" />
                          </div>
                            
                          <div class="form-group">
                            <label>是否顯示</label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode1" value="Y" {if $Data.show_status=="Y" || $Data.movie_list_id==""}checked{/if} >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="show_mode" id="show_mode2" value="N" {if $Data.show_status=="N"}checked{/if} >否
                            </label>
                          </div>
            
                          <button type="submit" class="btn btn-success" >確認修改</button>
					</div>
                    <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
               
              

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="{$Data.movie_list_id}" />
        </form>
    </div>

{include file=$footer_page}
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