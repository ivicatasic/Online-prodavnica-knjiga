<?php 
session_start();
require('includes/config.php');

	$q="SELECT * FROM book";
	 $res=mysqli_query($conn,$q) or error_log("Nije moguće učitati podatke iz baze...");
	?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
            header('Content-Type: text/html; charset=utf-8');
		?>
		<style>
			table{padding:5px;border:10px solid gray;border-collapse: collapse;}
			td,th{padding:15px; }
			
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
        <center><div id="logo">
            <img style='max-width:100%; max-height:100%;' src='../images/finnal.gif'>
        </div></center>
    </div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
                            <?php
                                if(isset($_GET['error']))
                                {
                                    echo '<font color="red">'.$_GET['error'].'</font>';
                                    echo '<br><br>';
                                }

                                if(isset($_GET['ok']))
                                {
                                    echo '<font color="blue">Uspešno ste obrisali knjigu.</font>';
                                    echo '<br><br>';
                                }

                            ?>
					<table border='1' width='100%'>
						<tr>
						<td colspan="7"><i><a style="color:red; " href="addbook.php">Dodaj novu knjigu</a></i></td>
						</tr>
						<tr>
							<td width='10%' style="color:darkgreen"><b><u>Broj</u></b></td>
							<td style="color:darkgreen" width='50%'><b><u>Ime</u></b></td>
							<td style="color:darkgreen" width='20%'><b><u>Izdavač</u></b></td>
							<td style="color:darkgreen" width='20%'><b><u>Šifra</u></b></td>
							<td style="color:darkgreen" width='25%'><b><u>Cena</u></b></td>
							<td style="color:darkgreen" width='25%'><b><u>Slika</u></b></td>
							<td style="color:darkgreen" width='25%'><b><u>Obriši</u></b></td>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$row['b_id'].'
										<td>'.$row['b_nm'].'
										<td>'.$row['b_publisher'].'
										<td>'.$row['b_isbn'].'
										<td>'.$row['b_price'];
								  echo "<td><img src='../$row[b_img]' width='50'/>";
										
										
									echo 	'<td><b><center><a style="text-decoration:none; color:red;" href="process_del_book.php?n_id='.$row['b_id'].'">X<center></b></a>
												
									
									</tr>';
							}
						?>

					</table>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
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
