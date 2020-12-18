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
	</head>
	<body>
		<div class="sidenav" >
			<img src="images/logo.png" alt="logo" style=" border-radius: 50%; height:70px; width:70px;  position: absolute;left: 50px;">
			<br><br><br><h4 style="color:white;">&nbsp;Hidden Treasure</h4>
			<hr noshade>
			<a href="adminIndex.php" ><i class="fa fa-bar-chart"></i><font size="5px;">&nbsp;Dashboard</font></a>
			<a href="adminNoti.php"><i class='far fa-bell'></i><font size="5px;">&nbsp;Notifications</font></a>
			<a href="adminUserProfile.php"><i class='far fa-user'></i><font size="5px;">&nbsp;User Profile</font></a>
			<a href="adminBookDetail.php" style="color: #f1f1f1;"><font size="5px;"><i class='fas fa-book-open'></i>&nbsp;Book Detail</font></a>
			<a href="adminAddBook.php"><font size="5px;"><i class='fas fa-plus'></i>&nbsp;Add Book</font></a>
		</div>
		<div class="topnav" style="font-size: 20px;">
			  <a class="active" href="#home"></a>
			  <a href="#news"></a>
			  <a href="#contact"></a>
			  <a href="adminNoti.php"></a>
		</div>
		<div class="main">
			<br><br>
			<?php include "adminBookDetail1.php"?>
		</div>

	</body>
</html>