<?php session_start();?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			.dugme {
				background-color: #467805; 
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
        <center><div id="logo">
            <img style='max-width:100%; max-height:100%;' src='../images/finnal.gif'>
        </div></center>
    </div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry">
				<?php
                        if(isset($_GET['ok'])){
                            if($_GET['ok']==1)
                                {
                                    echo '<font color="blue">Uspešno ste dodali potkategoriju.</font>';
                                    echo '<br><br>';
                                }
                            else{
                                echo '<font color="blue">Uspešno ste obrisali potkategoriju.</font>';
                                    echo '<br><br>';
                            }
                        }
                            
                            if(isset($_GET['error'])){
                                if($_GET['error']==1)
											{
												echo '<font color="red">Dodavanje kategorije nije uspelo. Popunite sve neophodne podatke.</font>';
												echo '<br><br>';
                                    }
                            else{
                                        echo '<font color="red">Brisanje kategorije nije uspelo</font>';
                                        echo '<br><br>';
                            }
                        }
                    ?>
				<form action='process_addsubcategory.php' method='POST'>
							<h1 style="color:darkgreen">Dodaj potkategoriju </h1>
							<br><br>
							<b style="color:darkgreen">Glavna kategorija </b>
									<br><br>
										<select  name="parent">
											<?php
											
												require('includes/MongoConfig.php');
					
													$colection=$client->selectCollection('book_store','category');
											        $res=$colection->find();
											        $data=$res->toArray();
													
											        foreach($data as $d)
											        {
												     echo "<option value='".$d['cat_id']."'>".$d['cat_nm'];
											        }
														
														
													
					
													
											?>
										</select>
									<br>
									<br>
									<br>
							<b style="color:darkgreen">Potkategorija:</b>
									<br><br>
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit' class='dugme' value=' Dodaj '>
									
									<br><br>	
				</form>
				<hr>
				<br>				
				<form action='process_delsubcategory.php' method='POST'>
						
						<h1 style="color:darkgreen">Obriši potkategoriju </h1>						
							<br>
							<br>
								<select  name="subcatnm">
									<?php
											require('includes/MongoConfig.php');
											
											
											$colection=$client->selectCollection('book_store','category');
										    $res=$colection->find();
											
											$data=$res->toArray();
											
											foreach($data as $d)
											{
												echo "<option>".$d['cat_nm'];
												
												$colection1=$client->selectCollection('book_store','subcat');
												
												$dd=(int)$d['cat_id'];
										        $res1=$colection1->find(['parent_id'=>$dd]);
											    $data1=$res1->toArray();
												
												foreach($data1 as $d1){
													
												echo "<option value='".$d1['subcat_id']."'> ---> ".$d1['subcat_nm'];	
													
												}
											}
			
											
									?>
								</select>
						
							
							<input type='submit' class='dugme' value=' Obriši '>
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
