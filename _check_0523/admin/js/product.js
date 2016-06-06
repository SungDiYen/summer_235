//規格
function AddSpec(MainType,SpecType){
	switch(MainType){
		case "single":
			var specStr = "<tr align=\"center\">"+
                          "     <td>"+
						  "			<input type=\"text\" name=\"spec[]\" size=\"5\" maxlength=\"5\" />"+
                          "     </td>"+
                          "     <td>"+
                          "      	<input type=\"text\" name=\"stock[]\" size=\"5\" />"+
                          "     </td>"+
                          "     <td>"+
						  "			<input type=\"hidden\" name=\"specid[]\"  value=\"\" />"+
                          "      	<a href=\"javascript:void(0)\" onclick=\"DelSpec('"+MainType+"','',this)\" class=\"but_del\" title=\"刪除\">刪除</a>"+
                          "     </td>"+
                          "</tr>";
			$(".single_spec > table.spec_table > tbody").append(specStr);
		break;
		case "multi":
			switch(SpecType){
				case "col":
					$(".multi_spec > table.spec_table > thead > tr:eq(0) > td:last").before("<td><input type=\"text\" name=\"spec_col[]\" size=\"5\" maxlength=\"5\" /></td>");
					$(".multi_spec > table.spec_table > tbody > tr").each(function(){
						$(this).find("td").last().before("<td><input type=\"text\" name=\"stock_row[]\" size=\"5\" maxlength=\"5\" /><input type=\"hidden\" name=\"specid_row[]\" size=\"5\" maxlength=\"5\" /></td>");											
					});
					$(".multi_spec > table > tfoot > tr:eq(0) > td:last").before("<td><a  href=\"javascript:void(0)\" onclick=\"DelSpec('"+MainType+"','col',this)\"  class=\"but_del\" title=\"刪除\" style=\"float:none\">刪除</a></td>");	
				break;
				case "row":
					var cols = $(".multi_spec > table.spec_table > thead > tr > td").length - 2;
					var specStr = "<tr align=\"center\">"+
								  "		<td>"+
								  "			<input type=\"text\" name=\"spec_row[]\" size=\"5\" maxlength=\"5\" />"+
								  "		</td>";
					for(i = 0 ; i < cols ; i++){	
						specStr +="		<td>"+
								  "			<input type=\"text\" name=\"stock_row[]\" size=\"5\" maxlength=\"5\" />"+
								  "			<input type=\"hidden\" name=\"specid_row[]\" size=\"5\" maxlength=\"5\" />"+			
								  "		</td>";
					}
								  
					    specStr +="		<td align=\"center\">"+
								  "			<input type=\"hidden\" name=\"specid_row[]\"  value=\"\" />"+
								  "			<a  href=\"javascript:void(0)\" onclick=\"DelSpec('"+MainType+"','row',this)\" class=\"but_del\" title=\"刪除\" style=\"float:none\">刪除</a>"+
								  "		</td>"+
								  "</tr>";
					$(".multi_spec > table.spec_table > tbody").append(specStr);
				break;
			}
		break;
	}

}
function DelSpec(MainType,SpecType,Obj){
	switch(MainType){
		case "single":
			$(Obj).parent().parent().remove();
		break;
		case "multi":
			switch(SpecType){
				case "col":
					var idx =$(".multi_spec > table.spec_table > tfoot > tr:eq(0) > td").index($(Obj).parent());
					$(".multi_spec > table.spec_table > thead > tr:eq(0) > td").eq(idx).remove();
					$(".multi_spec > table.spec_table > tbody > tr").each(function(){
						$(this).children("td").eq(idx).remove();
					});
					$(".multi_spec > table.spec_table > tfoot > tr:eq(0) > td").eq(idx).remove();
				break;
				case "row":
					$(Obj).parent().parent().remove();
				break;
			}
		break;
	}
}
function SpecShow(obj){
	$(".specarea").css('display','none');
	$(obj).css('display','block');
}