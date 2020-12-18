<?php
	include_once("db.php");
	$email=$_POST['email'];
	$que=$_POST['question'];
	$query="INSERT INTO faq (email_id,question) VALUES ('$email','$que')";
	
	$insert=mysqli_query($con,$query);
	if($insert)
	{?>
		<script>
		alert("Question Sended...");
		window.location="http://localhost/projects/semm%206/faq.php";
		
		</script>
	<?php
	}
	else
	{?>
		<script>
		alert("Enter Proper Data...");
		window.location="http://localhost/projects/semm%206/faq.php";
		</script>
	<?php	
	}
?>
