<?php session_start();
require('includes/MongoConfig.php');
?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
            <style>
            .dugme {
            background-color: darkgreen;
            border: none;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
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
						<center><img style='max-width:100%; max-height:100%;'src="../images/finnal.gif"></<center>
					</div>
				</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title" >Dodaj knjigu</h1>
			<div class="entry" >
			 <?php

                                if(isset($_GET['ok']))
                                {
                                    echo '<font color="blue">Uspešno ste dodali knjigu.</font>';
                                    echo '<br><br>';
                                }
                                if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
                                    }
                                

                            ?>
				<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Naslov:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b>Kategorija:</b><br>
						<select  name="cat">
								<?php
									   
										require('includes/MongoConfig.php');
			
											
											
											$colection=$client->selectCollection('book_store','category');
	                                        
	                                        $res=$colection->find();
	
	                                        $data=$res->toArray();
											foreach($data as $d){
												
											echo "<option disabled>".$d['cat_nm'];
											
											$colection1=$client->selectCollection('book_store','subcat');
											$ca=(int)$d['cat_id'];
											$res2=$colection1->find(['parent_id'=>$ca]);
											$data2=$res2->toArray();
											foreach($data2 as $d2){
												 echo '<option value="'.$d2['subcat_id'].'"> ---> '.$d2['subcat_nm'];
												 
											     }
											
											}
											
											
								?>
						</select>
						<br><br>
						
						<b>Opis:</b><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
						
						<b>Izdavač:</b><br>
						<input type='text' name='publisher' size='40'>
						<br><br>
						
						<b>Izdanje:</b><br>
						<input type='text' name='edition' size='40'>
						<br><br>
						
						<b>Šifra:</b><br>
						<input type='text' name='isbn' size='40'>
						<br><br>
						
						<b>Strane:</b><br>
						<input type='text' name='pages' size='40'>
						<br><br>
						
						<b>Cena:</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
						
						<b>Slika:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						<button class= "dugme"  onclick="info_del()" type='submit' >Dodaj</button>
				</form>
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
