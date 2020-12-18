
<body>
				<?php
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
					{
						$cate=$row['cat_type'];
						$id=$row['bid'];
						$image=$row['imgname'];
						$name=$row['name'];
						$author=$row['author'];
						$publisher=$row['publisher'];
						$rating=$row['rating'];
						$price=$row['price'];
						$isbin=$row['isbin'];
						$edition=$row['edition'];
						$language=$row['language'];
						$p1=$row['p1'];
						$p2=$row['p2'];
						$p3=$row['p3'];
						
						
						
				?>
                    <div class="col-lg-3 col-md-6">
						<div class="item">
                            <img src="offerImage.php?id=<?php echo $id;?>" alt="img" >
                            <h3 style="font-size:20px;"><?php echo $name;?></h3>
                            <h6><span class="price" style="color:white; font-size:18px;"><?php echo $cate;?></span></h6>
							<?php
								if($id=="kid1")
								{
									echo "<span class='sale'>Sale !</span>";
								}
							?>
                            <div class="hover">
                                <a href="offer-single.php?id=<?php echo $id;?>">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                            </div>
                        </div><br>
					</div>
				
				<?php
					}
				?>	
</div>
</body>