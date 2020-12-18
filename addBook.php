<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
body{
	overflow:hidden;
}
#regForm {
  background-color: rgba(255,255,255,0.80);
  margin: 70px auto;
  padding: 40px;
  width: 80%;
  min-width: 300px;
  
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background: #BDBDBD;
  border: 2px solid black;
  font-size: 20px;
  font-weight: 300;
  padding: 10px 20px;
  cursor: pointer;
  }
 
button:hover {
  color: white; 
}

#prevBtn {
  background-color: #BDBDBD;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #424242;
}
</style>
<body>

<form id="regForm" action="addBookCode.php" method="POST" enctype="multipart/form-data">
  <h1>Add Book:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <strong>Category:</strong>
	<p><select name="category" oninput="this.className = ''" style="width:953px; height:48px; background-color:rgba(255,255,255,0.70);">
		<option  selected value="1" >Adventure</option>
		<option  value="2">Biography</option>
		<option  value="3" >Chess</option>
		<option  value="4">Children</option>
		<option  value="5">Comic</option>
		<option  value="6">Cricket</option>
		<option  value="7">Crime</option>
		<option  value="8">Essay</option>
		<option  value="9">Indoor Games</option>
		<option  value="10">Life Style</option>
		<option  value="11">Personal Memories</option>
		<option  value="12">Phylosophy</option>
		<option  value="13">Puzzle</option>
		<option  value="14">Religious</option>
		<option  value="15">Sport</option>
		<option  value="16">Spritual</option>
		<option  value="17">Thriller</option>
		<option  value="18">Travel</option>
		<option  value="19">Western</option>
	</select></p>
	<strong>Book Id:</strong>
	<p><input placeholder="starting 2 letter & sequence No."   oninput="this.className = ''" name="bid" pattern="[a-zA-Z0-9]{6}" required autocomplete="off" ></p>	
  </div>
  <div class="tab">
    <strong>Image Details :</strong>
	<p><input name="imgname" type="file"  oninput="this.className = ''" style="rgba(255,255,255,0.80);"/></p>
	<p><input placeholder="Book Name You Want To Show In Site" oninput="this.className = ''" name="name" autocomplete="off" pattern="[a-zA-Z]"></p>	
  </div>
  <div class="tab">
    <strong>Book Details :</strong>
	<p><input placeholder="Author Name" oninput="this.className = ''" name="author" autocomplete="off" pattern="[a-zA-Z]"></p>
	<p><input placeholder="Publisher" oninput="this.className = ''" name="publisher" autocomplete="off" pattern="[a-zA-Z]"></p>
    <p><input placeholder="ISBIN" oninput="this.className = ''" name="isbin" autocomplete="off" pattern="[a-zA-Z0-9]"></p>
  </div>
  <div class="tab">
    <strong>Book Information :</strong>
	<p><input placeholder="Edition" oninput="this.className = ''" name="edition" autocomplete="off" pattern="[a-zA-Z]"></p>
	<p><input placeholder="Book Prize" oninput="this.className = ''" name="prize" autocomplete="off" pattern="[0-9]"></p>
	<p><input placeholder="Buy Link" oninput="this.className = ''" name="buy" autocomplete="off" ></p>
	<p><select name="language" oninput="this.className = ''" style="width:953px; height:48px; background-color:rgba(255,255,255,0.70);">
		<option  selected value="English">English</option>
		<option  value="Hindi">Hindi</option>
		<option  value="Chinese">Chinese</option>
		<option  value="Spanish">Spanish</option>
		<option  value="Arabic">Arabic</option>
	</select></p>
 </div>
 <div class="tab">
	<strong>Book Description :</strong>
		<p><textarea rows="2" cols="40" placeholder="1st Para" oninput="this.className = ''" name="p1" style="width:953px;"></textarea></p>
		<p><textarea rows="2" cols="40" placeholder="2nd Para" oninput="this.className = ''" name="p2" style="width:953px;"></textarea></p>
		<p><textarea rows="2" cols="40" placeholder="3rd Para" oninput="this.className = ''" name="p3" style="width:953px;"></textarea></p>
 </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
	<span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
