<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
body {
  background-image: url("images/login.jpg");
  background-repeat: no-repeat;
  background-size: 1600px 800px;
  background-attachment: fixed;
  margin: 0px;
  padding: 3px;
  font-family: 'MV Boli', sans-serif;
  color: #000;
  float: left;
  width: 100%;
  font-size: 20px;
  }
</style>
<body>
    <header>
	<?php
		include("header.html");
	?>
    </header>
    
    <section class="static about-sec">
        <div class="container">
            <h1>My Account / REgister</h1>
            <p><font size="4px;">A login is a set of credentials used to authenticate a user. To login into Hidden Treasure Bookstore you must need to enter Username & your unique password. If you are a new user then you need to register into Hidden Treasure Bookstore by inputting specified details.</font></p>
            <div class="form">
                <form action="registerCode.php" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <input placeholder="Enter User Name" name="nm1" required autocomplete="off" pattern="[A-Za-z]">
                            <span class="required-star">*</span>
                        </div>
						<div class="col-md-4">
							<input type="text" placeholder="Enter Contact"  pattern="[0-9]{10}" name="cont" required autocomplete="off">
                            <span class="required-star">*</span>
                        </div>
					</div>
					 <div class="row">
                        <div class="col-md-4">
                            <input type="email" placeholder="Enter Email Id" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required style="width:209%;" autocomplete="off">
                            <span class="required-star" style="right: -375px;">*</span>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-4">
                            <input type="password" placeholder="Enter Password"  name="pwd" required autocomplete="off">
                            <span class="required-star">*</span>
                        </div>
						<div class="col-md-4">
                           <input type="Password" placeholder="Enter Conformation Password" name="cpwd" required autocomplete="off">
                            <span class="required-star">*</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<input type="text"  name="vercode" placeholder="Enter Captcha Code" maxlength="5" autocomplete="off" required  />
							<span class="required-star">*</span>
						</div>
						<div class="col-md-4">
							<img src="captcha.php" height="48px">
						</div>
					</div>
					<div class="row">
                            &nbsp;&nbsp;<button type="submit" class="btn black">Register</button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="reset" class="btn">&nbsp;Reset&nbsp;&nbsp;</button>
                            <h5>Registered? <a href="login.php">Login here</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
	<?php
		include("footer.html");
	?>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>