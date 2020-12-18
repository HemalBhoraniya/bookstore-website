<?php
	session_start();
		require_once "db.php";
		$id=$_REQUEST['id'];
		if(isset($id)) 
		{
			$sql = "SELECT imgname,imgtype FROM offer WHERE bid='$id'";
			$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
			$row = mysqli_fetch_array($result);
			header("Content-type: " . $row["imgtype"]);
			echo $row["imgname"];
		}
		mysqli_close($conn);
?>
