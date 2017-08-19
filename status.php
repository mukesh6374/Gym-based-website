<?php 
								//echo $_SESSION['error']." ".$_SESSION['login']." ".$_SESSION['register']."hello";

								if($_SESSION['error'])
								{ ?>
							<li><a href="#modal" data-toggle="modal"><i class="glyphicon glyphicon-user"></i>&nbsp;<main>SignUp</main><?php if($_SESSION['register']==2){?><span style="color: red;">Already Exist!</span><?php }else{?><span>not have account ?</span><?php } ?></a></li>
							<?php if($_SESSION['error']==1){ ?>
						<li><a href="#Modal" data-toggle="modal"><i class="glyphicon glyphicon-log-in"></i>&nbsp;<main>
						Log-In</main><span style="color: red;">Invalid Details</span></a></li>
						<?php }else{ ?>
							<li><a href="#Modal" data-toggle="modal"><i class="glyphicon glyphicon-log-in"></i>&nbsp;<main>
						Log-In</main><span>already have account ?</span></a></li>
								<?php } ?>
						<?php }else
								{
									if($_SESSION['login'])
									{ $name=$_SESSION['user'];
										?>
										<li><a href="#" ><i class="glyphicon glyphicon-user"></i>&nbsp;<main>
										<?php echo $name; ?></main><span>Welcome</span></a></li>
										<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>&nbsp;<main>
										Log-Out</main><span>Get Free :)</span></a></li>
									<?php }
									else
									{ ?>
										<li><a href="#modal" data-toggle="modal"><i class="glyphicon glyphicon-user"></i>&nbsp;<main>SignUp</main><?php if($_SESSION['register']==1){
												session_unset();
												session_destroy();
											?><span style="color: green;">Completed!</span><?php }else{?><span>not have account ?</span><?php } ?></a></li>
						<li><a href="#Modal" data-toggle="modal"><i class="glyphicon glyphicon-log-in"></i>&nbsp;<main>
						Log-In</main><span>already have account ?</span></a></li>
									<?php }
								} ?>
