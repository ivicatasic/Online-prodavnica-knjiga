<?php 
session_start();
require('includes/config.php');
header('Content-Type: text/html; charset=utf-8');
	$q="SELECT * FROM contact";
	 $res=mysqli_query($conn,$q) or error_log("Nije moguće učitati podatke iz baze...");

	
	?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
    
		?>
		<style>
			table{padding:5px;border:10px solid gray; border-collapse: collapse;}
			td,th{padding:15px}
			
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
                                    echo '<font color="blue">Uspešno ste obrisali pitanje.</font>';
                                    echo '<br><br>';
                                }

                            ?>
					<table border='1' width='100%'>
						<tr>
								<td width='10%' style="color:darkgreen"><b><u>Broj</u></b>
								<td style="color:darkgreen" width='20%'><b><u>Ime</u></b>
								<td style="color:darkgreen" width='20%'><b><u>Email</u></b>
								<td style="color:darkgreen" width='50%'><b><u>Komentar</u></b>
								<td style="color:darkgreen" width='25%'><b><u>Obriši</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['con_nm'].'
										<td><a href=mailto:'.$row['con_email'].'>'.$row['con_email'].'</a>
										<td>'.$row['con_query'].'
										<td><center><b><a style="text-decoration:none; color:red;"href="process_del_contact.php?sid='.$row['con_id'].'">X</a></b><center>
												
									
									</tr>';
									$count++;
							}
						?>

					</table>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
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
