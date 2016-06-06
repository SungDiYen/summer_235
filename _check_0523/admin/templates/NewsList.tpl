{include file=$header_page}
{include file=$menu_page}
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">{$_SubTitleName}</h3>
            </div>

        </div>
        <form name="SearchForm" id="SearchForm" method="post" action="{$FileName}?flag=search">
        <div class="row">
        	<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            	
                <div class="col-sm-12">
                    <div id="dataTables-example_filter" class="dataTables_filter" style="margin-bottom:10px">
                       
                        查詢:
                        <select name="SearchStatus" class="form-control input-sm" >
                            <option value="">是否顯示</option>
                            <option value="Y" {if $SearchStatus=="Y"}selected{/if}>是</option>
                            <option value="N" {if $SearchStatus=="N"}selected{/if}>否</option>
                        </select>       
                        <input type="text" name="SearchName" class="form-control input-sm" aria-controls="dataTables-example" value="{$SearchName}" placeholder="請輸入關鍵字">
                        
                        <button type="button" class="btn btn-primary btn-xs" onclick="$('#SearchForm').submit()"><i class="fa fa-search"></i> 搜尋</button>
                        {if $WhereStr !=""}
                        	<button type="button" class="btn btn-warning btn-xs" onclick="$('#SearchForm').attr('action','{$FileName}?flag=search_clear');$('#SearchForm').submit()"><i class="fa fa-times"></i> 清除搜尋</button>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-lg-12">
            	<div class="pull-right" style="margin-bottom: 10px;">
                    <button type="button" class="btn btn-primary btn-xs" onclick="location.href='{$_FileName}?flag=edit'"><i class="fa fa-plus"></i> 新增</button>
                    <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('確認刪除?')) $('#ListForm').submit();"><i class="fa fa-trash-o"></i> 刪除</button>
                </div>
                
                <form name="ListForm" id="ListForm" method="post" action="{$_FileName}?flag=delete" >
                	<div class="table-responsive">
                            
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <tr>
                                <th width="60px"></th>
                                <!--<th>類別</th>-->
                                <th>標題</th>
                                <th width="100px">發佈日期 <a class="fa {if $sortby==pdate}fa-sort-{$sorticon}{else}fa-sort{/if}" href="{$_FileName}?flag=sort&sortby=pdate"></a></th>
                                <th width="80px">是否顯示</th>
                                <th width="60px">編輯</th>
                            </tr>
                            {foreach from = $DataList item = obj name = DataList}
                            <tr>
                                <td><input type="checkbox" name="ids[]" value="{$obj.news_id}" /></td>
                                <!--<td>
                                    {$_NewsType[$obj.news_type]}
                                </td>-->
                                <td>
                                    {$obj.news_title}
                                </td>
                                <td>{$obj.news_date}</td>
                                <td>{$obj.show_status}</td>
                                <td>
                                    <a href="{$_FileName}?flag=edit&id={$obj.news_id}" title="修改"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="if(confirm('確認刪除?'))location.href='{$FileName}?flag=delete&ids={$obj.news_id}'" title="刪除"><i class="fa fa-trash-o"></i></a> 
                                </td>
                            </tr>
                           {/foreach}
                        </table>
                        
                        <div class="pages"> 
                        {$PageStr}  	
                        </div>
                    </div>
                    <!-- /.table-responsive -->
                </form>
              
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
   
{include file=$footer_page}