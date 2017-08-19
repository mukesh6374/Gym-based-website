<!DOCTYPE html>
<html lang="en">

<?php 
error_reporting(0); ?>	
<?php include('connect.php'); ?>
<head>
	<title>Day3</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<?php include('login.php'); ?>
<?php include('register.php'); ?>
<?php include('modal.php'); ?>
	
</head>

<body>
	<?php
			session_start();
	?>


	<div id="wrapper">
		<?php include'header.php'; ?>
		<?php include'fashionslider.php' ?>
		<br>
		<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-3" style="background-color: white;">
		<div class="col-lg-12">
			<h3 style="padding: 10px;  background-color: black; color: white;">FILTER BY:</h3>
		</div>
		<div class="col-lg-12">
			<?php include'filters.php'; ?>
		</div>
		</div>
		<div class="col-lg-9" style="background-color: white;">
		<div class="col-lg-12">
			<h3 style="padding: 10px;  background-color: black; color: white;">POPULAR SPECS:</h3>
		</div>
		<div class="col-lg-12">
			<?php include'fashiondeal.php'; ?>
		</div>

		<center><a id="view" class="btn btn-success" style="margin: 10px; font-size: 28px;">View More</a></center>
		<center><a id="view2" class="btn btn-success" style="margin: 10px; font-size: 28px;">View Less</a></center>
		<?php include'gallery.php' ?>
		</div>
	</div>
			
			<?php include'footer.php' ?>
	</div>

<script type="text/javascript" src="js/myscript.js"></script>

</body>
</html>