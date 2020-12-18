<?php session_start();?>
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
	<link rel="stylesheet" href="css/bDescription.css">
</head>

<body>
    <header>
	<?php
        include("header.html");
	?>
    </header>

<?php
ob_start();
include("db.php");
$id=$_REQUEST['id'];
	
	$query=mysqli_query($con,"SELECT * FROM book where bid='$id'");
    $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		$cate=$row['cid'];
		$id=$row['bid'];
		$image=$row['imgname'];
		$name=$row['name'];
		$author=$row['author'];
		$publisher=$row['publisher'];
		$rating=$row['rating'];
		$price=$row['price'];
		$buy=$row['buy'];
		$isbin=$row['isbin'];
		$edition=$row['edition'];
		$language=$row['language'];
		$p1=$row['p1'];
		$p2=$row['p2'];
		$p3=$row['p3'];
?>
    
    <section class="product-sec">
		<div class="mycontainer">
			<div class="content" align="left">
			<br>
				<h2><mark>Book Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</mark></h2>
				<br><img src="bookImages.php?id=<?php echo $id;?>" height="350"width="240" align="right">
				<h2><u><?php echo $name;?></u></h2>
				<div class="text">
					<b>Author :</b><?php echo $author;?><br>
					<b>Publisher :</b><?php echo $publisher;?><br><br>
					<h2><mark>Book Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</mark></h2>
					<br>
					<b>Printed Price&nbsp;:</b>&nbsp;<font style="font-size:25px;">₹<?php echo $price;?></font><br>
					<br>
					<h2><mark>Book Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</mark></h2>
					<br>
					<b>ISBIN :</b><?php echo $isbin;?><br>
					<b>Edition :</b><?php echo $edition;?><br>
					<b>Language :</b><?php echo $language;?><br>
					<br>
					<h2><mark>Book Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</mark></h2>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $p1;?><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $p2;?><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $p3;?><br><br>
					<div class="btn-sec">
					<form action="shop.php" method="POST">
                        <!--<button class="btn" type="submit">Add To cart</button>-->
                        <button class="btn black" type="submit" formaction="<?php echo $buy;?>">Buy Now</button>
                    </form>
					<br>
					</div>
				</div>			
			</div>
		</div>
		<!------------------------------------------------------------>
        
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