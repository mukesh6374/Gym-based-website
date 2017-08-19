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
		<?php include'slider.php' ?>
		<br>
			<div id="discount" class="col-lg-12" >
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="images/fashiondisc.jpg" class="img-responsive">

						</div>
					</div>
					
				</div>
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php include'fashiondeal.php' ?>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div id="discount" class="col-lg-12" sty>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="images/electrodisc.jpg" class="img-responsive" style="height: 268px;">
						</div>
					</div>
					
				</div>
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php include'electrodeal.php' ?>
						</div>
					</div>
				</div>
			</div>
			<br>
			<!-- <div id="discount" class="col-lg-12" sty>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="images/disc1.jpg" class="img-responsive">
						</div>
					</div>
					
				</div>
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php //include'entertaindeal.php' ?>
						</div>
					</div>
				</div>
			</div> -->
			
			<?php include'footer.php' ?>
	</div>

<script type="text/javascript" src="js/myscript.js"></script>

</body>
</html>