<?php session_start();?><!DOCTYPE html>
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
	<link rel="stylesheet" href="css/newnav.css">
<style>
.text {
  background-color: black;
  color: black;
  font-size: 3vw; 
  font-weight: bold;
  margin-left:134px;
  margin-top:44px;
  padding: 9px;
  text-align: center;
  position: absolute;
  left: 30%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}
.glow {
  font-family:Segoe Print;
  color: black;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
     text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 0px #F4F6F7, 0 0 0px #F4F6F7, 0 0 0px #F4F6F7, 0 0 0px #F4F6F7, 0 0 0px #F4F6F7, 0 0 0px #F4F6F7, 0 0 0px #F4F6F7;
  }
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
		<div class="container" style="margin-left:160px;">
			<div class="row">
				  <div class="left" style="background-color:rgba(0, 0, 0, 0.5);">
					<h1 style="color:white;"><center>"<u>Catagories</u>"</center></h1>
					<hr noshade><hr noshade>
					<div class="side">
						<button class="dropdown-btn" ><font style="font-size:24px;">Action/Adventure<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="adventure"><font style="font-size:22px;">Adventure</font></button>
								<button class="dropdown-btn" id="western"><font style="font-size:22px;">Western</font></button>
							</div>
						<hr noshade>
						<button class="dropdown-btn"><font style="font-size:24px;">Biographies & True Accounts<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="bio"><font style="font-size:22px;">Biographies & Autobiographies</font></button>
								<button class="dropdown-btn" id="essay"><font style="font-size:22px;">Essay & Travelogies</font></button>
								<button class="dropdown-btn" id="personal"><font style="font-size:22px;">Personal Memories</font></button>
							</div>
						<hr noshade>
						<button class="dropdown-btn"><font style="font-size:24px;">Children's Book<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="story"><font style="font-size:22px;">Story Book</font></button>
							</div>
						<hr noshade>
						<button class="dropdown-btn"><font style="font-size:24px;">Comedy<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="comic"><font style="font-size:22px;">Comic's</font></button>
							</div>
						<hr noshade>
						<button class="dropdown-btn"><font style="font-size:24px;">Crime<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="crime"><font style="font-size:22px;">Crime</font></button>
								<button class="dropdown-btn" id="thriller"><font style="font-size:22px;">Thriller</font></button>
							</div>
						<hr noshade>
						<button class="dropdown-btn"><font style="font-size:24px;">Hobbie's<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="home"><font style="font-size:22px;">Home & Lifestyle</font></button>
								<button class="dropdown-btn" id="travel"><font style="font-size:22px;">Travel</font></button>
							</div>
						<hr noshade>
						<button class="dropdown-btn"><font style="font-size:24px;">Religion,Phyloshopy & Spiritual<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="phylosophy"><font style="font-size:22px;">Phyloshophical Writting</font></button>
								<button class="dropdown-btn" id="religious"><font style="font-size:22px;">Religious</font></button>
								<button class="dropdown-btn" id="spiritual"><font style="font-size:22px;">spiritual</font></button>
							</div>
						<hr noshade>
						<button class="dropdown-btn"><font style="font-size:24px;">Sports & Games<i class="fa fa-caret-down"></i></font></button>
							<div class="dropdown-container">
								<button class="dropdown-btn" id="chess"><font style="font-size:22px;">Chess</font></button>
								<button class="dropdown-btn" id="cricket"><font style="font-size:22px;">Cricket</font></button>
								<button class="dropdown-btn" id="indoor"><font style="font-size:22px;">Indoor Games</font></button>
								<button class="dropdown-btn" id="puzzle"><font style="font-size:22px;">Puzzle</font></button>
								<button class="dropdown-btn" id="sports"><font style="font-size:22px;">sports</font></button>
							</div>
					</div>	
				  </div>
				<div class="right">
					<div class="recomended-sec">
						<div class="text" id="myoffer"><div class="glow">>> Offer's</div></div>
						<br><br><br><hr><br>
						<div id="myofferBook">
							<div class="row">
								<?php
									ob_start();
									include_once("db.php");
									$query=mysqli_query($con,"SELECT * FROM offer;");
									include_once("offer.php");
								?>
							</div>
						</div>
						<div id="adventureBook" style="margin-top:-190px;">
							<div class="glow" style="margin-left:-600px;"><h1>>> Adventure</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=1;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="westernBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-620px;"><h1>>> Western</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=19;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="bioBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-620px;"><h1>>> Biography</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=2;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="essayBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-700px;"><h1>>> Essay</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=8;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="personalBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-450px;"><h1>>> Personal Memories</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=11;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="storyBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-610px;"><h1>>> Story Book</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=4;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="comicBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-670px;"><h1>>> Comic's</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=5;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="crimeBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-690px;"><h1>>> Crime</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=7;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="thrillerBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-670px;"><h1>>> Thriller</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=17;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="homeBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-500px;"><h1>>> Home & Lifestyle</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=10;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="travelBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-690px;"><h1>>> Travel</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=18;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="phylosophyBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-390px;"><h1>>> phylosophical Writting</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=12;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="religiousBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-650px;"><h1>>> Religious</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=14;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="spiritualBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-650px;"><h1>>> spiritual</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=16;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="chessBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-700px;"><h1>>> Chess</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=3;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="cricketBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-690px;"><h1>>> Cricket</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=6;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="puzzleBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-680px;"><h1>>> Puzzle</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=13;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="indoorBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-580px;"><h1>>> Indoor Games</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=9;");
										include("book.php");
									?>
								</div>
							</div>
						</div>
						<div id="sportsBook" style="top:180px; position:absolute; left:460px; right:170px;">
							<div class="glow" style="margin-left:-680px;"><h1>>> Sports</h1></div><br>
							<div class="recomended-sec">
								<div class="row">
									<?php
										ob_start();
										include_once("db.php");
										$query=mysqli_query($con,"select category.cat,book.* FROM category RIGHT JOIN book ON category.cid=book.cid where book.cid=15;");
										include("book.php");
									?>
								</div>
							</div>
						</div>

					</div>
				</div>	
				
			</div>
		</div>
		<br><br><br>
    </section>

    <footer>
        <?php
			include("footer.html");
		?>
    </footer>
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
$(document).ready(function(){
  $("#myoffer").ready(function(){
	$("#adventureBook").hide();
	$("#westernBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#adventure").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").show();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#western").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").show();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#bio").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").show();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#essay").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").show();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#personal").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").show();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#story").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").show();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#comic").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").show();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#crime").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").show();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#thriller").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").show();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#home").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").show();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#travel").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").show();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#phylosophy").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").show();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#religious").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").show();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
   $("#spiritual").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").show();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#chess").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").show();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#cricket").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").show();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#indoor").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").show();
	$("#puzzleBook").hide();
	$("#sportsBook").hide();
  });
  $("#puzzle").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").show();
	$("#sportsBook").hide();
  });
  $("#sports").click(function(){
    $("#myoffer").hide();
	$("#myofferBook").hide();
	$("#westernBook").hide();
	$("#adventureBook").hide();
	$("#bioBook").hide();
	$("#essayBook").hide();
	$("#personalBook").hide();
	$("#storyBook").hide();
	$("#comicBook").hide();
	$("#crimeBook").hide();
	$("#thrillerBook").hide();
	$("#homeBook").hide();
	$("#travelBook").hide();
	$("#phylosophyBook").hide();
	$("#religiousBook").hide();
	$("#spiritualBook").hide();
	$("#chessBook").hide();
	$("#cricketBook").hide();
	$("#indoorBook").hide();
	$("#puzzleBook").hide();
	$("#sportsBook").show();
  });
  
});

</script>
</body>

</html>