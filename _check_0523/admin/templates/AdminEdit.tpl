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
        <form name="FormEdit" id="FormEdit" method="post" action="{$FileName}?flag=editsave" onsubmit="FormCheck();return false;">
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
                            <label>帳號</label>
                            {if $ID == ""}
                            <input type="text" name="uid" value="" class="form-control" />
                            {else}
                            <p class="form-control-static">{$Data.uid}</p>
                            
                            {/if}
                          </div>
            
                          <div class="form-group">
                            <label>密碼</label>
                            <input type="password" name="passwd" value="{$Data.passwd}" class="form-control"/>
                          </div>
                          
                          <div class="form-group">
                            <label>姓名</label>
                            <input type="text" name="name" value="{$Data.name}" class="form-control"/>
                          </div>
                          
                          <div class="form-group">
                            <label>權限設定</label>
                            {foreach from=$menuData item=obj name=menu}
                                <p class="form-control-static">
                                {if $obj.submenu|count > 0}
                                <i class="fa fa-folder-open fa-fw"></i>
                                {else}
                                <input type="checkbox" name="auth[]" id="auth[]" value="{$obj.sysmenu_id}" {if $auth[$obj.sysmenu_id]=='Y'}checked{/if} />
                                {/if}
                                {$obj.menu_name}</p>
                                {foreach from=$obj.submenu item=sub name=submenu}
                                    <input type="checkbox" name="auth[]" id="auth[]" value="{$sub.sysmenu_id}" {if $auth[$sub.sysmenu_id]=='Y'}checked{/if} />
                                    {$sub.menu_name}
                                    {$authData[$sub.serno]}
                                {/foreach}
                                <br><br>
                            {/foreach}
                          </div>
                         
            
                          <button type="submit" class="btn btn-success" >確認修改</button>
					</div>
               </div>
          </div>
          
        </div><!-- /.row -->
        <input type="hidden" name="id" value="{$ID}" />
        </form>
    </div>

{include file=$footer_page}
<script>
	function FormCheck(){
		var errorMsg = "";
		{if $ID == ""}
			if($("input[name='uid']").val()=="")
				errorMsg += "-請輸入帳號\n";
		{/if}
		
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