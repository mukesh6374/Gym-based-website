<?php 
session_start();
if(isset($_GET['submit']))
{	
	$date=$_GET['Ddate'];
	 $event=$_GET['event'];
	 $reminder=$_GET['remind'];
//echo"$date   $event   $reminder";
 //   	$dbuser = 'root';
 //   	$dbpass = 'root';
	// $dbname = 'Events';
 //   	$conn = mysqli_connect("",$dbuser, $dbpass,$dbname);
   
 //   if(! $conn ) {
 //      die('Could not connect: ' . mysql_error());
 //   }
  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   else{
    mysql_select_db("web", $con);
	$sql = "INSERT INTO schedule(event,date,reminder) VALUES (\"$event\",\"$date\",\"$reminder\")";  	
	
	if(mysql_query($sql)){  
	// echo "Record inserted successfully";
	//echo "hiiii <script  type = 'text/javascript> setTimeout(alert('I am an alert box!'), 3000)</script>";
	//$_SESSION['EVENT']=$event;
	header('Location:index.php');
	}
	else{
	echo "Could not insert record: ". mysqli_error($conn);  
	}  

   mysql_close($conn);
	}

}		
?>






<!DOCTYPE html>
<html>
<head>
<style>
body {
    background: url("images/s2.jpeg");
    background-repeat: no-repeat;
	background-size:cover;
	margin:0;
}

ul{
 background-color:#333;
list-style-type:none;
position:fixed;
padding:0;
top:0;
margin:0;
width:100%;
}
li a{
display:block;
padding:10px;
color:white;
text-align:center;
text-decoration:none;
}
li{
float:left;
}
li a:hover:not(.active)
{
background-color: #111;
}
.active {
    background-color: #4CAF50;
}
</style>
</head>


<body>

<ul class ="abc">
<li class ="a"><a href="index.php">Home</a></li>
<li class="a"><a class="active" href="Event.php">Schedule Event</a></li>
</ul>
<br><br>
<form method="get">
  <h1>Select the Date</h1>
  <input type="date" name="Ddate" value=" ">
  <h1>Select the Event</h1>
  <input list="browsers" name="event">
  <datalist id="browsers">
    <option value="Yoga Session">
    <option value="Demo Tour">
    <option value="Fitness Suggestions">
  </datalist>
<h1>Reminder</h1>
<textarea rows="4" cols="40" name="remind">	</textarea>
<br><br>
  <input type="submit" value="Create Event" name="submit">
</form>


</body>
</html>

