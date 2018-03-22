<?php

	$db = mysql_connect("localhost","root","apmsetup");




	if(!$db) {

		die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');

	}




	$db_selected=mysql_select_db("homepage",$db);
	if(!$db_selected)
	{
		die("Can't use database: ".mysql_error());
	}
	mysql_close($con);

?>
