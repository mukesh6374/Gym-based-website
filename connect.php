<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("web", $con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code
  // mysql_select_db("web", $con);
?>