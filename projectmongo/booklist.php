
<?php
require('includes/MongoConfig.php');
 session_start();

	header('Content-Type: text/html; charset=utf-8');
	
	
	$cat=$_GET['subcatid'];


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
												
												
	                                            $colection=$client->selectCollection('book_store','book');
												
												$res=$colection->find(['b_subcat'=>$cat]);
												
												$data=$res->toArray();
												
												$count=0;
												foreach($data as $d)
												{
													
													if($count==0)
													{
														echo '<tr>';
													}
													
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$d['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$d['b_img'].'" width="80" height="100">
														<br>'.$d['b_nm'].'</a>
													</td>';
													$count=$count+1;
													if($count==3)
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
