<?php session_start();?>

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
							<center><i><h1 class="title">Dobrodošli
							<?php 
								if(isset($_SESSION['status']))
								{
									echo " korisnik ". $_SESSION['unm']; 
								}
								else
								{	
									echo ', molimo Vas prijavite se.';
								}
							?>
							</h1></i></center>
							
							
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
