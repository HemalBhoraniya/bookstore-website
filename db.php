<?php
	ob_start();
	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_DATABASE','project');

	if(!($con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD)))
	{
		echo "not connected";
	}
	else
	{
		if(!($database=mysqli_select_db($con,DB_DATABASE)))
		{
			echo "not conncted....";
		}
		else
		{
			echo "";
		}
		
	}
?>