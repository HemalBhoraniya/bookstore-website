<?php
		
		ob_start();
		include_once("db.php");
		
		$id=$_REQUEST['id'];
		
		$res="delete  from  faq where question='$id'";
		$result=mysqli_query($con,$res);
		if($result)
		{
		include_once("adminNoti.php");
		?>
		<script>alert("'<?php echo $id;?>' Question Was Deleted From FAQ.")</script>
		<?php		
		}
		else
		{?>
			<script>alert("'<?php echo $id;?>' Question Was Not Deleted From FAQ.")</script>
		<?php
		}
	
?>