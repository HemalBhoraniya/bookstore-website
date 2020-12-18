<?php session_start();
	$_SESSION['login']="FALSE";
?>
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

<body>
    <header>
        <?php 
			include("header.html");
		?>
    </header>
  <section class="slider">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide">
                        <img src="images/slide-1.jpg" alt="slide-1" height="735px">
                        <div class="content">
                            <div class="title">
                                <h3>Reading &nbsp;is &nbsp;Dreaming&nbsp; With&nbsp; Open&nbsp; Eyes</h3>
                                <br><h5>Discover &nbsp;the&nbsp; best&nbsp; books &nbsp;online &nbsp;with&nbsp; us</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide2.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>To produce a mighty book,<br><br>you must choose a mighty theme.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide3.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3 style="font-weight: 500;">A blank piece of paper<br><br> is God’s way of telling us<br><br>how hard it to be God.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/slide4.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>welcome to bookstore</h3><br>
                                <h5>Discover the best books online with us</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recomended-sec">
        <div class="container">
                <h2>highly recommendes books</h2>
				<br><br><hr noshade><br>
				<div class="row">
					<?php
						include_once("db.php");
						ob_start();
						$query=mysqli_query($con,"SELECT * FROM offer LIMIT 4");
					?>	
				<?php
					include("offer.php");
				?>
				
        </div>
    </section>
     <section class="about-sec">
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore</h2><br>
            <p>Hidden Treasure Bookstore is online Book shopping site.</p>
			<p>By which user can put details of Books & user can search it, can be member of site, buy online books, & see other releted books of same author or same category. User can view online book details from anywhere through internet & purchase it with online payment.</p>
            <div class="btn-sec">
                <a href="shop.php" class="btn yellow">shop books</a>
                <a href="login.php" class="btn black">subscriptions</a>
            </div>
        </div>
    </section>
    
    <section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>SAFE SHOPPING</h3>
                    <h5>Safe Shopping Guarantee</h5>
                    <h6>There's every reason in the world to shop online. The selection is mind-boggling. The shopping is secure. Shipping is fast.</h6>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>30- DAY RETURN</h3>
                    <h5>Moneyback guarantee</h5>
                    <h6>Even returns are easy, with the right e-tailers. Shopping has never been easier or more convenient for consumers.</h6>
                </li>
                <li>
                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPPORT</h3>
                    <h5>online Consultations</h5>
                    <h6>Hidden Treasure Bookstore provide Round-the-clock-service for there acquirer.<br><br></h6>
                </li>
            </ul>
        </div>
    </section>
    <section class="offers-sec" style="background:url(images/offers.jpg)no-repeat;">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Top 50% OFF on Selected</h3>
                        <h6>We are now offering some good discount 
                    on selected books go and shop them</h6>
                        <a href="shop.html" class="btn blue-btn">view all books</a>
                        <span class="icon-point percentage">
                            <img src="images/precentagae.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Shop $ 500 Above and Get Extra!</h3>
                        <h6>We are now offering some good discount 
                    on selected books go and shop them</h6>
                        <a href="shop.html" class="btn blue-btn">view all books</a>
                        <span class="icon-point amount"><img src="images/amount.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-sec">
        <div class="container">
            <div id="testimonal" class="owl-carousel owl-theme">
                <div class="item">
                    <h3>People on the outside think there’s something magical about writing, that you go up in the attic at midnight and cast the bones and come down in the morning with a story, but it isn’t like that. You sit in back of the typewriter and you work, and that’s all there is to it.</h3>
                    <div class="box-user">
                        <h4 class="author">Harlen Ellison</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Writing a novel is like driving a car at night. You can only see as far as your headlights, but you can make the whole trip that way.</h3>
                    <div class="box-user">
                        <h4 class="author">E. L. Doctorow</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>It is the writer who might catch the imagination of young people, and plant a seed that will flower and come to fruition.</h3>
                    <div class="box-user">
                        <h4 class="author">Isaac Asimov</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>The unread story is not a story; it is little black marks on wood pulp. The reader, reading it, makes it live: a live thing, a story.</h3>
                    <div class="box-user">
                        <h4 class="author">Ursula K. Le Guin</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-quote">
            <img src="images/left-quote.png" alt="quote">
        </div>
        <div class="right-quote">
            <img src="images/right-quote.png" alt="quote">
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