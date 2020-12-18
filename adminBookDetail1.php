<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.collapsible {
  background-color: #555;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 20px;
}

.active, .collapsible:hover {
  background-color:#777 ;
}

.content {
  padding: 0 0px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f9f9f9}

th {
  background-color: #2A0A12;
  color: white;
}
</style>
</head>
<body>

<h2>Book's Detail:</h2><br>
<?php
	include_once("db.php");
	$cat=array("adventure","biography","chess","children","comic","cricket","crime","essay","indoorgames","lifestyle","personalmemories","phylosophy","puzzle","religious","sports","spritual","thriller","travel","western");
	$arrlength = count($cat);
	for($x=0; $x < $arrlength; $x++) 
	{
		if($cat[$x]=="adventure")
		{ $cid="1";}
		else if($cat[$x]=="biography")
		{ $cid="2";}
		else if($cat[$x]=="chess")
		{ $cid="3";}
		else if($cat[$x]=="children")
		{ $cid="4";}
		else if($cat[$x]=="comic")
		{ $cid="5";}
		else if($cat[$x]=="cricket")
		{ $cid="6";}
		else if($cat[$x]=="crime")
		{ $cid="7";}
		else if($cat[$x]=="essay")
		{ $cid="8";}
		else if($cat[$x]=="indoorgames")
		{ $cid="9";}
		else if($cat[$x]=="lifestyle")
		{ $cid="10";}
		else if($cat[$x]=="personalmemories")
		{ $cid="11";}
		else if($cat[$x]=="phylosophy")
		{ $cid="12";}
		else if($cat[$x]=="puzzle")
		{ $cid="13";}
		else if($cat[$x]=="religious")
		{ $cid="14";}
		else if($cat[$x]=="sports")
		{ $cid="15";}
		else if($cat[$x]=="spritual")
		{ $cid="16";}
		else if($cat[$x]=="thriller")
		{ $cid="17";}
		else if($cat[$x]=="travel")
		{ $cid="18";}
		else if($cat[$x]=="western")
		{ $cid="19";}
					
?>
<hr>
<button class="collapsible"><i class="fa fa-sort-desc"></i>&nbsp;<?php echo ucfirst($cat[$x])." Book's";?></button>
<div class="content">
<table>
  <tr>
    <th>Action</th>
    <th>Book Id</th>
    <th>Name</th>
	<th>Author</th>
	<th>Publisher</th>
	<th>Price</th>
	<th>isbin</th>
	<th>Edition</th>
	<th>Language</th>
  </tr>
<?php	
	$select=mysqli_query($con,"SELECT * FROM book where cid='$cid' order by bid asc");
	while($row=mysqli_fetch_array($select,MYSQLI_ASSOC))
	{
		$bid=$row["bid"];
		$name=$row["name"];
		$author=$row["author"];
		$pub=$row["publisher"];
		$price=$row["price"];
		$isbin=$row["isbin"];
		$edition=$row["edition"];
		$lang=$row["language"];
	?>
	<tr>
		<td><a href="adminBookDetail2.php?id=<?php echo $bid?>"><i class="fa fa-trash" style="font-size: 23px; color:#2A0A12;"></i></a></td>
		<td><?php echo $bid;?></td>
		<td><?php echo $name;?></td>
		<td><?php echo $author;?></td>
		<td><?php echo $pub;?></td>
		<td><?php echo $price;?></td>
		<td><?php echo $isbin;?></td>
		<td><?php echo $edition;?></td>
		<td><?php echo $lang;?></td>
	</tr>
<?php
	}
?>

  
</table>

</div>
<?php
	}
?>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>
