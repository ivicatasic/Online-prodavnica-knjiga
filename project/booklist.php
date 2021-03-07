
<?php
require('includes/config.php');
 session_start();

	header('Content-Type: text/html; charset=utf-8');
	
	
	$cat=$_GET['subcatid'];
	
	$totalq="SELECT count(*) \"total\" FROM book WHERE b_subcat='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or error_log("Greška pri čitanju podataka iz baze...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	
	$page_per_page=6;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
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
									<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
									<hr style="border:1px Solid #a1a1a1;">
									<div class="entry">
										
										<table border="0" width="100%" >
											<br><br><br><br><br>
											<?php
												
												$k=($page_current_page-1)*$page_per_page;
											
												$query="SELECT * FROM book WHERE b_subcat='$cat' LIMIT ".$k .",".$page_per_page;
	
												$res=mysqli_query($conn,$query) or error_log("Nije moguće učitati podatke iz baze...");
	
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
										
										
										<br><br><br>
										<center>
										<?php
											
											if($page_total_page>$page_current_page)
											{
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Sledeća</a>';
											}
											
											for($i=1;$i<=$page_total_page;$i++)
											{
												echo '&nbsp;&nbsp;<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
											}
											
											if($page_current_page>1)
											{	
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Prethodna</a>';
											}
											
										?>
										</center>
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
