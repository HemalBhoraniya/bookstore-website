<?php
	include("db.php");	
	if(count($_FILES) > 0) 
	{
		if(is_uploaded_file($_FILES['imgname']['tmp_name'])) 
		{
			$imgData =addslashes(file_get_contents($_FILES['imgname']['tmp_name']));
			$imageProperties = getimageSize($_FILES['imgname']['tmp_name']);
		
			$icid=$_POST['category'];
			$ibid=$_POST['bid'];
			$iname=$_POST['name'];
			$iauthor=$_POST['author'];
			$ipublisher=$_POST['publisher'];
			$iprice=$_POST['prize'];
			$ibuy=$_POST['buy'];
			$iisbin=$_POST['isbin'];
			$iedition=$_POST['edition'];
			$ilanguage=$_POST['language'];
			$ip1=$_POST['p1'];
			$ip2=$_POST['p2'];
			$ip3=$_POST['p3'];

			$query="insert into book values('$icid','$ibid','{$imgData}','{$imageProperties['mime']}','$iname','$iauthor','$ipublisher','$iprice','$ibuy','$iisbin','$iedition','$ilanguage','$ip1','$ip2','$ip3')";
			$insert=mysqli_query($con,$query);	
			if($insert)
			{?>
				<script>alert("Book Inserted Successfully...")</script>
			<?php
			include('adminAddBook.php');
			}
			else
			{?>
				<script>alert("Book Not Inserted...")</script>
			<?php
			include('adminAddBook.php');
			}
		}
	}
?>