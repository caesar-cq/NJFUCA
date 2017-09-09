<?php
	error_reporting(0);
    header("Content-Type:text/html;charset=utf8"); 
	DEFINE('DB_USER','root');
	DEFINE('DB_PASSWORD','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_NAME','newmember');

	$table_name ="user";

	$mysql = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	$db_selected = mysql_select_db(DB_NAME);
	
	if (!$db_selected)
	{
	  	die ("Can't use warehousedb : " . mysql_error());
	}
	mysql_query("set names 'utf8'");
?>