<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.mycontainer {
  margin:250px;
  margin-top:100px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div class="mycontainer">
  <form action="faqCode.php" method="POST">
	<span onclick="document.getElementById('overlay').style.display='none'" class="close" title="Close Modal">&times;</span>
    <br><label>Email Address</label>
    <input type="text" name="email" placeholder="Your Email Address"  required autocomplete="off">

    <label>Question</label>
    <textarea  name="question" placeholder="Write Your Question Here..." required autocomplete="off" style="height:200px"></textarea>

    <button type="submit" class="btn">Submit</button>
  </form>
</div>

</body>
</html>
