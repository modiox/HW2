<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "Tasks";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Stylesheet.css" rel="stylesheet">
<script src="Task.js" type="text/javascript"></script>
</head>
<body>


<h1 class="title1"> To Do App</h1>
<br>
<div class="firstDiv"> 
<div id="myDIV" class="secondDiv">
  <input type="text" id="myInput" placeholder="Enter your to-do item :)">
  <span onclick="addTask()" class="addBtn">Add</span>

</div>
<div> 
 <ul id="myUL">
  </ul>
</div>
</div>

<!-- Second Div -->
<br> 
<h1 class="title1">From the Database </h1>
<br> 
<div class="firstDiv"> 
<div id="myDIV" class="secondDiv" class="id">
</div>
<div> 
 <ul id="myUL">
  </ul>
</div>
</div>

</body>
</html>
