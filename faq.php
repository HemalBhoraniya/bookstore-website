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
<style>
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
</head>

<body>
    <header>
        <?php 
			include("header.html");
		?>
    </header>
    <section class="static about-sec">
        <div class="container">
            <h1>FAQ</h1>
			<?php 
				include_once("db.php");
				$result=mysqli_query($con,"SELECT * FROM faq");
				
				while($row=mysqli_fetch_assoc($result))
				{
					$email=$row['email_id'];
					$que=$row['question'];
					$ans=$row['answer'];
				?>
				<h3>BY <?php echo $email;?><br></h3>
				>><?php echo $que;?><br>
				&nbsp;&nbsp;<?php echo $ans;?>
				<br><hr noshade><br>
				<?php
				}
			?>
            <div id="overlay" onsubmit="off()">
				<?php include("faqForm.php"); ?>
			</div>
			<br>
			<div>
			  <button onclick="on()" class="btn black">Ask Your Question Here...</button>
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
	<script>
	function on() {
	  document.getElementById("overlay").style.display = "block";
	}

	function off() {
	  document.getElementById("overlay").style.display = "none";
	}
	window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	</script>
</body>
</html>
