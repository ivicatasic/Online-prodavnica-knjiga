<?php session_start(); ?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>

				<div id="logo-wrap">
					<div id="logo">
						<center><img style='max-width:100%; max-height:100%;'src="images/finnal.gif"></<center>
					</div>
				</div>
				<br>
			<!-- end header -->
			
			<!-- start page -->
		<br>
				<div id="page">
						<!-- start content -->
				
							<div id="content">
					
								<div class="post">
									<center><h1 class="title">Zaboravljena lozinka</h1></center>
									<hr style="border:1px Solid #a1a1a1;">
									<div class="entry">
									<p>Unesite email koji ste koristili prilikom registracije</p>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">Proverite email. Poslali smo Vam kod za povratak lozinke.</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
										<div class="form">
											<form action="process_forgot_pass.php" method="POST">
											<div class="form">
																		
												<tr>
													<td><b>E-mail:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  Potvrdi  ">
													</td>
												</tr>
												</div>
											</form>
										</table>
									</div>
									
								</div>
					
					
							</div>
				
						<!-- end content -->
						
						<!-- start sidebar -->
						<div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
						</div>
						<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			<!-- end footer -->
</body>
</html>
