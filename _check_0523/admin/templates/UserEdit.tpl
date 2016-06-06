{include file=$header_page}
{include file=$menu_page}
	<div id="page-wrapper">
    	<div class="row">
          <div class="col-lg-12">
            <h1>修改{$_SubTitleName}</h1>
            <ol class="breadcrumb">
              <li><a href="Main.php"><i class="fa fa-dashboard"></i> {$_MainTitleName}</a></li>
              <li class="active"><a href="{$_FileName}"><i class="fa fa-edit"></i> {$_SubTitleName}</a></li>
            </ol>
            
          </div>
        </div><!-- /.row -->
        <form name="FormEdit" id="FormEdit" method="post" action="{$FileName}?flag=editsave" onsubmit="FormCheck();return false;">
        <div class="row">
          <div class="col-lg-12">

              <div class="form-group">
                <label>帳號</label>
                <p class="form-control-static">{$Data.uid}</p>
              </div>

              <div class="form-group">
                <label>密碼</label>
                <input type="password" name="passwd" value="{$Data.passwd}" class="form-control"/>
              </div>
			  
              <div class="form-group">
                <label>姓名</label>
                <input type="text" name="name" value="{$Data.name}" class="form-control"/>
              </div>
              
             

              <button type="submit" class="btn btn-success" >確認修改</button>

          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="{$ID}" />
        </form>
    </div>

{include file=$footer_page}
<script>
	function FormCheck(){
		var errorMsg = "";
	
		if($("input[name='passwd']").val()=="")
			errorMsg += "-請輸入密碼\n";
		
		if($("input[name='name']").val()=="")
			errorMsg += "-請輸姓名";
			
		if(errorMsg==""){
			$("#FormEdit").submit();
		}else{
			alert(errorMsg);
		}
		
	}
</script>