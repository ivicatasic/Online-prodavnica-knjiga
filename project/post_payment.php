<?php session_start();?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
            header('Content-Type: text/html; charset=utf-8');
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
					
						<center><div id="logo"><img style='max-width:100%; max-height:100%;'src="images/finnal.gif"></div></center>
					
				</div>
				<br>
			<!-- end header -->
			
			<!-- start page -->
			<br>
				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<center><h1 class="title">BEX brza pošta</h1></center>
							
								<hr style="border:1px Solid #a1a1a1;">
							<div class="entry" style="height:auto">
								<p style="font-size:20px;">Vaši podaci su prosleđeni operatoru. Možete očekivati dostavu u roku 4 radna dana. Hvala na poverenju!</p>
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
