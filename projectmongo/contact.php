<?php session_start();
require('includes/MongoConfig.php');
?>

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
									<center><h1 class="title">Postavite nam pitanje</h1></center>
									<hr style="border:1px Solid #a1a1a1;">
									
									<div class="entry" >
										
										<form action="process_contact.php" method="POST">
										<table>		
										<div class = "form">
											<tr>
													<td><b>Ime:</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='nm'></td>
												
											</tr>
											<tr><td>&nbsp;</tr>
											<tr>
													<td><b>Email:</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='email'></td>
												
											</tr>
											<tr><td>&nbsp;</tr>
											<tr>
											<td>
											Vase pitanje:</td>
											<td><textarea cols="40" rows="10" name='query' ></textarea></td>
											</tr>
											<tr><td>&nbsp;</tr>
											<tr>
													<td colspan='2' align='center'>
														<input type='submit' id= "x" value="  Potvrdi  ">
													</td>
												</tr>
										</div>
										</table>
										</form>
										
												
										
									
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
