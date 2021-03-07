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
                <div class="entry" style="min-height:400px">
                   <?php
                        if(isset($_GET['ok'])){
                            if($_GET['ok']==1)
                                {
                                    echo '<font color="blue">Uspešno ste dodali kategoriju.</font>';
                                    echo '<br><br>';
                                }
                            else{
                                echo '<font color="blue">Uspešno ste obrisali kategoriju.</font>';
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
                   
                    <form action='process_addcategory.php' method='POST'>
                        <b style="color:darkgreen">Dodaj kategoriju</b>
                        <br/>
                        <input type='text' name='cat' size='25'>

                       
						<button class= "dugme"  type='submit' >Dodaj</button>

                        <br><br><br>
                    </form>
                    <hr>

                    <form action='process_delcategory.php' method='POST'>

                        <b style="color:darkgreen">Obriši kategoriju</b>
                        <br>
                        <select name="del">
									<?php
									
										
											$colection=$client->selectCollection('book_store','category');
											$res=$colection->find();
											$data=$res->toArray();
											foreach($data as $d)
											{
												echo "<option>".$d['cat_nm'];
											}
			
											
									?>
								</select>

                        
						<button class= "dugme" type='submit' >Obriši</button>
                       
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
