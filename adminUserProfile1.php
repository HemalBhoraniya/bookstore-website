<?php
		
		ob_start();
		include_once("db.php");
		
		$id=$_REQUEST['id'];
		
		$res="delete from registration where userid='$id'";
		$result=mysqli_query($con,$res);
		if($result)
		{
		include_once("adminUserProfile.php");
		?>
		<script>alert("User Id '<?php echo $id;?>' Record Was Deleted From Registartion Table.")</script>
		<?php		
		}
		else
		{?>
			<script>alert("User Id '<?php echo $id;?>' Record Was Not Deleted From Registartion Table.")</script>
		<?php
		}
	
?>