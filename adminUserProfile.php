<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin Pannel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#03a6f3">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/admin_mainMenu.css">
	<style>
		table {
			border:2px solid #2A0A12;
			border-collapse: collapse;
		  width: 80%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even){background-color: #f9f9f9}
		tr:nth-child(odd){background-color: #f2f2f2}

		th {
		  background-color: #2A0A12;
		  color: white;
		}
	</style>
	</head>
	<body>
		<div class="sidenav" >
			<img src="images/logo.png" alt="logo" style=" border-radius: 50%; height:70px; width:70px;  position: absolute;left: 50px;">
			<br><br><br><h4 style="color:white;">&nbsp;Hidden Treasure</h4>
			<hr noshade>
			<a href="adminIndex.php" ><i class="fa fa-bar-chart"></i><font size="5px;">&nbsp;Dashboard</font></a>
			<a href="adminNoti.php"><i class='far fa-bell'></i><font size="5px;">&nbsp;Notifications</font></a>
			<a href="adminUserProfile.php" style="color: #f1f1f1;"><i class='far fa-user'></i><font size="5px;">&nbsp;User Profile</font></a>
			<a href="adminBookDetail.php"><font size="5px;"><i class='fas fa-book-open'></i>&nbsp;Book Detail</font></a>
			<a href="adminAddBook.php"><font size="5px;"><i class='fas fa-plus'></i>&nbsp;Add Book</font></a>
		</div>
		<div class="topnav" style="font-size: 20px;">
			  <a class="active" href="#home"></a>
			  <a href="#news"></a>
			  <a href="#contact"></a>
			  <a href="adminNoti.php"></a>
		</div>
		
		<div class="main">
			<br><br><br>
			<h1 align="center"><u>Registered User's</u></h1><br>
			<table align="center">
			  <tr>
				<th>Action</th>
				<th>User ID</th>
				<th>Name</th>
				<th>Contact</th>
				<th>Email ID</th>
				<th>Password</th>
			  </tr>
			<?php
				include_once("db.php");
				$q="select * from registration";
				$result=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($result))
				{
					$userid=$row["userid"];
					$name=$row["username"];
					$contact=$row["contact"];
					$email_id=$row["email_id"];
					$pwd=$row["pwd"];
				?>
				<tr>
					<td><a href="adminUserProfile1.php?id=<?php echo $userid?>"><i class="fa fa-trash" style="font-size: 23px; color:#2A0A12;"></i></a></td>
					<td><?php echo $userid;?></td>
					<td><?php echo $name;?></td>
					<td><?php echo $contact;?></td>
					<td><?php echo $email_id;?></td>
					<td><?php echo $pwd;?></td>
				</tr>	
				<?php
				}
			?>
			</table>
		</div>

	</body>
</html>