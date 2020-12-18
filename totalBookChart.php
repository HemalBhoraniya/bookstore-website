<html>
	<head>
		<meta charset=utf-8 />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		<style>
		  #bar-chart,contant{
			  min-height: 350px;
			  background-color: rgba(255,255,255,0.80);
			  border-radius: 20px;
			  border: 3px solid #848484;
			  box-shadow: 4px 5px #888888;
		  }
		</style>
	</head>
<body>
	<?php
		include('db.php');
		$query="SELECT c.cat, COUNT(*) FROM category c INNER JOIN book b ON b.cid = c.cid GROUP BY c.cid";
		$result=mysqli_query($con,$query);
		$NOB='';
		while($row=mysqli_fetch_array($result))
		{
			$NOB.="{c:'".$row["cat"]."',n:".$row["COUNT(*)"]."},";
		}
		
		$q1="SELECT language, COUNT(*) FROM book GROUP BY language";
		$r1=mysqli_query($con,$q1);
		$author='';
		while($row1=mysqli_fetch_array($r1))
		{
			$author.="{label:'".$row1["language"]."',value:".$row1["COUNT(*)"]."},";
		}
		?><br>
		<h3 align="center"> <u>Bar Chart Of Available Book's</u></h3><br>
			<div id="bar-chart"></div><br><br>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 text-center">
					<h3> <u>Pie-Chart Of Language of Book's</u></h3><br>
					<div id="pie-chart" style="align:left;"></div>
				</div>
				<div class="col-sm-6 col-sm-offset-3 text-center">
					<h3> <u>Chart Explanation</u></h3><br>
					<div id="contant" style="background-color: rgba(255,255,255,0.80);border-radius: 20px; border: 3px solid #848484; box-shadow: 4px 5px #888888;" >
					>> Bar chart explains about category-wise book availabe in Hidden Treasure Bookstore.
					</div><br>
					<div id="contant" style="background-color: rgba(255,255,255,0.80);border-radius: 20px; border: 3px solid #848484; box-shadow: 4px 5px #888888;" >
					>> Pie-chart shows the different type of books with different language available in our Bookstore.
					</div><br>
					<div id="contant" style="background-color: rgba(255,255,255,0.80);border-radius: 20px; border: 3px solid #848484; box-shadow: 4px 5px #888888;" >
					>> This graphs shows the different status of books available in Hidden Treasure Bookstore. 
					</div>
				</div>
			</div>
<script>
Morris.Bar({
 element : 'bar-chart',
 data:[<?php echo $NOB; ?>],
 xkey:'c',
 ykeys:'n',
 labels:['Number Of Books'],
 hideHover:'auto',
 fillOpacity: 0.6,
 stacked:true
});
Morris.Donut({
 element:'pie-chart',
 data:[<?php echo $author;?>],
});
</script>
</body>
</html>