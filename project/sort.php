<?php
require('includes/config.php');
 session_start();
	
	
	if(isset($_POST['s1'])){
	$query1="SELECT `u_fnm` FROM user ORDER BY `u_id` ASC";
	$res=mysqli_query($conn,$query1) or die("Greška pri citanju podataka iz baze...");
	}
	elseif(isset($_POST['s2'])){
	$query2="SELECT `u_fnm` FROM user ORDER BY `u_id` DESC";
	$res=mysqli_query($conn,$query2) or die("Greška pri citanju podataka iz baze...");
	}
	else{
	$query3="SELECT `u_fnm` FROM user";
	$res=mysqli_query($conn,$query3) or die("Greška pri citanju podataka iz baze...");	
	}
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
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										
										<table border="0" width="100%" >
											<?php
												
												while($row=mysqli_fetch_assoc($res))
												{
													echo '<li>' .$row["u_fnm"] .
													'</li>';
												}
												mysqli_close($conn);
											?>
											
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
