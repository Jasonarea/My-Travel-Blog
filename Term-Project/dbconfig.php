<?php

	$db = mysql_connect("localhost","root","apmsetup");




	if(!$db) {

		die('�����ͺ��̽� ���ῡ ������ �ֽ��ϴ�.\n�����ڿ��� ���� �ٶ��ϴ�.');

	}




	$db_selected=mysql_select_db("homepage",$db);
	if(!$db_selected)
	{
		die("Can't use database: ".mysql_error());
	}
	mysql_close($con);

?>
