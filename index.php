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
		<section id="section1" style="background-color: rgba(10,10,10,0.2);">
			<div class="panel" style="background-color: rgba(10,10,10,0.2); color:white;">
				<div class="panel-heading">
					<div class="col-lg-12"><center style="font-family: calibri; font-size: 30px;">DYNAMIC MOVEMENT TRAINING (DMT)</center></div>
					<br>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="col-lg-3"><img src="images/t1.jpg"><br><center><p style="text-align:center;">Dynamic Movement Training uses the body’s natural movement patterns through three-dimensional exercises.</p></center></div>
						<div class="col-lg-3"><img src="images/t2.jpg"><br><center><p style="text-align:center;">Involve your whole body by challenging your cardiovascular, muscular and neural systems at the same time</p></center></div>
						<div class="col-lg-3"><img src="images/t3.jpg"><br><center><p style="text-align:center;">Movements can just use your body weight or be loaded for greater benefit.</p></center></div>
						<div class="col-lg-3"><img src="images/t4.jpg"><br><center><p style="text-align:center;">The more dynamically you move, the better you’ll feel and perform.</p></center></div>
					</div>
					<div class="col-lg-12">
						<div class="col-lg-3"><img src="images/t4.jpg"><br><center><p>The more dynamically you move, the better you’ll feel and perform.</p></center></div>
						<div class="col-lg-3"><img src="images/t5.jpg"><br><center><p>Combine dynamic strength, fitness and functional training to exercise three times more effectively.</p></center></div>
						<div class="col-lg-3"><img src="images/t6.jpg"><br><center><p>Improve muscular control, use more energy for accelerated weight loss and build performance in everyday life and sport.</p></center></div>
						<div class="col-lg-3"><img src="images/t7.jpg"><br><center><p>Dynamic movement training is important to help you maintain a healthy body and healthy mind.</p></center></div>
					</div>
					<div class="col-lg-12">
						<div class="col-lg-3"><img src="images/t7.jpg"><br><center><p>Dynamic movement training is important to help you maintain a healthy body and healthy mind.</p></center></div>
						<div class="col-lg-3"><img src="images/t8.jpg"><br><center><p>Whatever you want from a workout, make DMT part of your training programme for quicker and more effective results.</p></center></div>
						<div class="col-lg-3"><img src="images/t1.jpg"><br><center><p>Whatever you want from a workout, make DMT part of your training programme for quicker and more effective results.</p></center></div>
						<div class="col-lg-3"><img src="images/t2.jpg"><br><center><p>Involve your whole body by challenging your cardiovascular, muscular and neural systems at the same time</p></center></div>
					</div>
				</div>
				
			</div>
			</section>
			
			<?php include'footer.php' ?>
	</div>

<script type="text/javascript" src="js/myscript.js"></script>

</body>
</html>