<?php
require('includes/config.php');
 session_start();


	
	$cat=$_GET['catnm'];
	
	$q = "SELECT * FROM subcat WHERE parent_id = ".$_GET['cat'];
	$res = mysqli_query($conn,$q) or error_log("Greška pri čitanju podataka iz baze...");
	
	$row1 = mysqli_fetch_assoc($res);
	
	if($_GET['catnm']==$row1['subcat_nm'])
	{
		header("location:booklist.php?subcatid=".$row1['subcat_id']."&subcatnm=".$row1["subcat_nm"]);
		
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

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"><?php echo $_GET['catnm'];?></h1>
							<div class="entry">
						
								<?php
									Do
									{
										
										echo '<li><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1["subcat_nm"].'">'.$row1['subcat_nm'].'</a></li>';
										//&subcatnm='.$row1["subcat_nm"].'
									}while($row1 = mysqli_fetch_assoc($res))
								?>
							
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
