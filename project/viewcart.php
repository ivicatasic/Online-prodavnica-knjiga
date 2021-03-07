<?php session_start();
require('includes/config.php');
?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
            header('Content-Type: text/html; charset=utf-8');
		?>
		<style>
		#polje{
				padding:5px;
			font-size:12px;
			margin:5px;
		}
		</style>
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
						<center><i>
							<?php 
								if(!isset($_SESSION['status']))
								
								{	echo '<a href="register.php"> <h4>Nije moguće videti korpu jer niste prijavljeni. Molimo Vas prijavite se...</h4></a>';
									
								}
							?>
							</i></center>
							<center><h1 class="title">Korpa</h1><center>
							<div class="entry">
						
							
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr style="font-size:11px">
                                    <td id="polje"> <center><b>Broj</b></center>
									<td id="polje"> <center><b>Kategorija</b></center>
									<td id="polje"> <center><b>Naziv knjige</b></center>
									<td id="polje"> <center><b>Količina</b></center>
									<td id="polje"><center> <b>Ocena</b></center>
									<td id="polje"> <center><b>Cena</b></center>
									<td id="polje"> <center><b>Izbaci</b></center>
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cat']))
									{

									foreach($_SESSION['cat'] as $id=>$x)
									{	
										echo '
											<tr id="polje">
											<td id="polje"> <center>'.$i.'
											</center><td id="polje"> '.$x['cat'].'
											<td id="polje"><center> '.$x['nm'].'
											</center><td id="polje"> <input class="kolicina" type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td id="polje"> <center>'.$x['rate'].'
											</center><td id="polje"> <center>'.($x['qty']*$x['rate']).'
											</center><td id="polje"> <center> <a href="process_cart.php?id='.$id.'">X</a>
										</center></tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<i><h4>Ukupno:</h4></i>
							
							</td>
							<td><h4><i><?php echo $tot; ?> </h4></i></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Osveži " > 
							<a href="checkout.php">Prosledi<a/>
							</center>
							
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
