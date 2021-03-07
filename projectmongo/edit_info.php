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
									<center><h1 class="title">Promeni podatke</h1>
									<h5><i>email mora biti onaj preko kog ste se registrovali</i></h5></center>
									<hr style="border:1px Solid #a1a1a1;">
									<div class="entry">
									
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">Mozete iskoristiti nove podatke sada.</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
										<div class="form">
											<form action="process_edit_info.php" method="POST">
											<div class="form">
												<tr>
													<td><b>Ime:</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><b>Korisničko ime:</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Nova lozinka:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Potvrdite lozinku:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30"></td>
													
												</tr>


												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>E-mail:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Telefon:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td><b>Grad:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city">
															<option>
															<option>Beograd
															<option>Novi Sad
															<option>Niš
															<option>Kragujevac
															<option>Subotica
															<option>Zrenjanin
															<option>Pančevo
															<option>Čačak
															<option>Smederevo
															<option>Leskovac
															<option>Lebane
															<option>Vranje
															<option>Zaječar
															
														
													</select>
												
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
