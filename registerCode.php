<?php
		ob_start();
		include("db.php");
		
			$username=$_POST['nm1'];
			$contact=$_POST['cont'];
			$email=$_POST['mail'];
			$pass=$_POST['pwd'];
			$conf=$_POST['cpwd'];
			$captcha=$_POST['vercode'];
			$select=mysqli_query($con,"SELECT * FROM registration");
			
			while($row=mysqli_fetch_array($select,MYSQLI_ASSOC))
			{
				$remail=$row['email_id'];
				$rpassword=$row['pwd'];
				
				if($email==$remail or $pass==$rpassword)
				{?>
					<script>alert("Email Id Already Exist. Please Enter New Email Id & Password.");
					window.location="http://localhost/projects/semm%206/register.php";
					</script>
				<?php
					
				}
			}
			if($pass==$conf and $_SESSION["vercode"]==$captcha)
			{
				$update=mysqli_query($con,"INSERT INTO registration (username,contact,email_id,pwd) VALUES('$username','$contact','$email','$pass')");
		
		
				if($update)
				{	
					$_SESSION['user']=$email;
					header('location:shop.php');
				}
				else
				{?>
					<script>alert("Please Enter Vaild Email-Id & Password.");
					window.location="http://localhost/projects/semm%206/register.php";</script>
				<?php
				}
			}
			else
			{?>
					<script>alert("Enter Proper Data");
					window.location="http://localhost/projects/semm%206/register.php";</script>
				<?php
			}
	
?>