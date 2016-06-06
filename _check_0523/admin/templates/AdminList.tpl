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

        </div>
        <!--<div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                        <label>
                        	查詢:<input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                        </label>
                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row">
            <div class="col-lg-12">
            	<div class="pull-right" style="margin-bottom: 10px;">
                    <button type="button" class="btn btn-primary btn-xs" onclick="location.href='{$_FileName}?flag=edit'"><i class="fa fa-plus"></i> 新增帳號</button> 
                </div>
                        
                <div class="table-responsive" style="clear:both">                            
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <tr>
                            <th width="60px">編號</th>
                            <th>帳號</th>
                            <th>姓名</th>
                            <th width="60px">編輯</th>
                        </tr>
                        {foreach from = $DataList item = obj name = DataList}
                        <tr>
                            <td>{$obj.no}</td>
                            <td>{$obj.uid}</td>
                            <td>{$obj.name}</td>
                            <td>
                                <a href="{$_FileName}?flag=edit&id={$obj.admin_id}" title="修改"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='{$FileName}?flag=delete&id={$obj.admin_id}'" title="刪除"><i class="fa fa-trash-o"></i></a> 
                            </td>
                        </tr>
                       {/foreach}
                    </table>
                    
                    <div class="pages"> 
                    {$PageStr}  	
                    </div>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
   
{include file=$footer_page}