<?php
	session_start();

		ob_start();
		include("db.php");
		$_SESSION['login']="FALSE";
		$email="";
		$found=0;
		$select=mysqli_query($con,"SELECT * FROM admin_pass");
		
		
		while($row=mysqli_fetch_assoc($select))
		{
			$email=$row['email'];
			$password=$row['pass'];
		}
		if($_POST['id']==$email and $_POST['psw']==$password)
		{
			$_SESSION['user']=$email;
			$_SESSION['login']="TRUE";
			header('location:adminIndex.php');
		}
		else if($query=mysqli_query($con,"SELECT * FROM registration"))
		{
			while($data=mysqli_fetch_array($query,MYSQLI_ASSOC))
			{
				$gemail=$data['email_id'];
				$pwd=$data['pwd'];
				
				
				if($_POST['id']==$gemail and $_POST['psw']==$pwd)
				{
					$_SESSION['user']=$gemail;
					$_SESSION['login']="TRUE";
					header('location:shop.php');
				}
				else if($_POST['id']==$gemail and $_POST['psw']!=$pwd)
				{
				?>
					<script>alert("Invalid Password...");
						window.location="http://localhost/projects/semm%206/login.php";
					</script>
				<?php
				}
				else if($_POST['id']!=$gemail and $_POST['psw']==$pwd)
				{?>
					<script>alert("Invalid Email Id...");
					window.location="http://localhost/projects/semm%206/login.php";
					</script>
						
				<?php
				}
				else if($_POST['id']!=$gemail and $_POST['psw']!=$pwd)
				{?>
					<script>alert("Invalid Login. Please SignUp Yourself...");
					window.location="http://localhost/projects/semm%206/register.php";
					</script>
				<?php	
				}
			}
		}
?>