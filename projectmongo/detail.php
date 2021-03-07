<?php session_start();
	require('includes/MongoConfig.php');
	
	$id=$_GET['id'];
	/*
	$q="SELECT * FROM book WHERE b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Greška pri čitanju podataka iz baze...");
	$row=mysqli_fetch_assoc($res);
	*/
	$colection=$client->selectCollection('book_store','book');
												
	$res=$colection->find(['b_id'=>(int)$id]);
												
	$data=$res->toArray();
	
	$r1="";
	$img="";
	$isbn="";
	$publisher="";
	$edition="";
	$page=0;
	$price=0;
	$desc="";
	$subcat="";
	foreach($data as $r){
	 $r1=$r['b_nm'];
	 $img=$r['b_img'];
	 $isbn=$r['b_isbn'];
	 $publisher=$r['b_publisher'];
	 $edition=$r['b_edition'];
	 $page=$r['b_page'];
	 $price=$r['b_price'];
	 $desc=$r['b_desc'];
	 $subcat=$r['b_subcat'];
	}
	
?>
<html	>
<head>>
    <script type="text/javascript" src="js/java.js"></script>
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
				<br><br>
			<!-- end header -->
		
			<!-- start page -->

				<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo $r1;?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr style="border:1px Solid #a1a1a1;"></td>
												</tr>
												 
													 <td>Podaci o knjizi</td>
												
												</tr>
												<tr>
													<td><hr style="border:1px Solid #a1a1a1;"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$img.'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">Ime</td>
																<td width="6%">: </td>
																<td align="left">'.$r1.'</td>
															</tr>

															
															<tr>
																<td align="right">Šifra</td>
																<td>: </td>
																<td align="left">'.$isbn.'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Izdavač</td>
																<td>: </td>
																<td align="left">'.$publisher.'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Izdanje</td>
																<td>: </td>
																<td align="left">'.$edition.'</td>
																
															</tr>
															
															<tr>
																<td align="right">  Strane</td>
																<td>: </td>
																<td align="left">'.$page.'</td>
															</tr>
															
															<tr>
																<td align="right"> Cena</td>
																<td>: </td>
																<td align="left">'.$price.' dinara</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												
											
											<table border="0" width="100%">
												 <tr>
													<td><hr style="border:1px Solid #a1a1a1;"></td>
												</tr>
												
												 
													 <td>Opis</td>
												
												</tr>
												
												<tr>
													<td><hr style="border:1px Solid #a1a1a1;"></td>
												</tr>
																		
											 </table>
											 
											 '.$desc.'
																				

											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="100%">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td ><a href="process_cart.php?nm='.$r1.'&cat='.$subcat.'&rate='.$price.'">
														<center>DODAJ U KORPU</center>
													</a></td>';
												}
												else
												{
													echo '<td><a href="register.php"> <h4>Molimo vas registrujte se ukoliko želite da naručite...</h4></a></td>';
												}
												echo '</tr>
											</table>';
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
