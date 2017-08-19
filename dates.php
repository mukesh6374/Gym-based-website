
<?php
/*
session.start();
if($_SESSION['EVENT']==Birthday)
{
	echo"<h1><center>Birthdays</center></h1>";
	$url = "b.jpeg";
}
if($_SESSION['EVENT']==Meeting)
{
	echo "<h1><center>Meeting</center></h1>";
	$url = "m.jpeg";
}
if($_SESSION['EVENT']==Reminder)
{
	echo"<h1><center>Reminder</center></h1>";
	$url = "r.jpg";
}
*/
?>	






<html>
<head>
<title>Events</title>
<style  type="text/css">
body{
background-image: url("b1.jpeg");
background-repeat: no-repeat;
background-size: cover;


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
table,tr,td{
	border-collapse:collapse;
	width:50%;
	border-collapse:collapse;
	}
	td,th{
	border:1px solid;
	text-align:left;
	padding:8px;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<ul class ="abc">
<li class ="a"><a href="p1.php">Home</a></li>
<li class="a"><a href="Event.php">Schedule Event</a></li>
<li class="a"><a class="active" href="remind.php">TO do List</a>
</ul>
<br><br>
<?php 
$dbuser = 'root';
   	$dbpass = 'root';
	$dbname = 'Events';
   	$conn = mysqli_connect("",$dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   else{
	$sql = 'SELECT * FROM schedule where event="Birthday" order by date';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
echo"<center><table>
	<caption><h1>Birthdays</h1></caption>
	<tr>
	<th><h1><center>Date</center></h1></th>
	<th><h1><center>Reminder</center></h1></th>
	</tr>";
 
while($row = mysqli_fetch_assoc($retval)){ 
 	echo"<tr>
	<td><h2>{$row['date']}</h2></td>
	<td><h2>{$row['reminder']}</h2></td>
	</tr>  ";
	} //end of while
echo"</table></center>";  
}
}
?>
</body>
</html>
	
