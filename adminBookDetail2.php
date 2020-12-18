<?php
		
		ob_start();
		include_once("db.php");
		
		$id=$_REQUEST['id'];
		
		$res="delete from book where bid='$id'";
		$result=mysqli_query($con,$res);
		if($result)
		{
		include_once("adminBookDetail.php");
		?>
		<script>alert("'<?php echo $id;?>' Record Was Deleted From Books Category.")</script>
		<?php		
		}
		else
		{?>
			<script>alert("'<?php echo $id;?>' Record Was Not Deleted From Books Category.")</script>
		<?php
		}
	
?>