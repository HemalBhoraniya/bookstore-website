<?php
 ob_start();
 include_once("db.php");
 
 $fnm=$_POST['fname'];
 $feid=$_POST['femail'];
 $fmsg=$_POST['fmess'];
 $result=mysqli_query($con,"INSERT INTO feedback (name,email,mess) VALUES('$fnm','$feid','$fmsg')");
 
 if(!$result)
 {?>
	<script>
		alert("Some Error Occured...");
		window.location="http://localhost/projects/semm%206/index.php";
	</script>
  <?php
  }
 else
 {?>
	<script>
		alert("Feedback Sended...");
		window.location="http://localhost/projects/semm%206/index.php";
	</script>
  <?php
  }
?>