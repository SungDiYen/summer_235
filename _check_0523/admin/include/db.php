<?php

	if (!defined('Usable'))
	{
	    die('');
	}

	//資料庫設定
	$mysql_server   = "localhost";
	$mysql_user     = "taiwannt_root";
	$mysql_password = "pM59l5^DTo6(";
	$mysql_table    = "taiwannt_summer2016";

	if (!defined('DB_Ignore'))
	{

		//DB connect
		$g_db = new Mysql( $mysql_server,$mysql_table,$mysql_user,$mysql_password,true );
		$g_db->connectDB();

	}

?>