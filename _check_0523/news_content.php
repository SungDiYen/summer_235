<?php
include("config.php");

$id = intval($_REQUEST['id']);

$sqlstr = "select * from ".Table_News." where DelFlag='' and show_status='Y'  and news_date <='".date("Y-m-d")."' and news_id='".$id."'";
$Data = $g_db->getRow($sqlstr);

echo '<h4 class="popup_title">'.$Data['news_title'].'</h4>
			<div class="popup_para">'.$Data['news_content'].'</div>
			<div class="close-btn"></div>';
?>