<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php'); 	
	
	if(isset($submit))
	{
	$query="insert into shipping_details(name,address,postal_code,city,book_name,phone,f_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";
	
	$res=mysqli_query($conn,$query) or error_log("Nije moguce izvršiti naredbu:checkout.php ...");
	header("location:payment_details.php");
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
				<br>
			<!-- end header -->
			<!------------------------------->
			

		<br>
				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
      <div  class="form">
	 <center><h1 class="title">Detalji pošiljke</h1></center>
	 <hr style="border:1px Solid #a1a1a1;">
           <?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cat']))
									{
                                        echo '<h3>Narucene knjige:</h3><ul>';
									foreach($_SESSION['cat'] as $id=>$x)
									{	
										echo '
											
											     <li> '.$x['nm'].'
                                            
										';
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}echo '</ul>';
                                        
                                        
                                        echo '<p style="font-size:20px">Ukupno za platiti: '.$tot . ' dinara</p>';
										
									}
								
								?>
    		<form id="contactform" method="post"> 
    			<p class="contact"><label for="name">Ime</label></p> 
    			<input id="name" name="name" required="" type="text"> 
    			 
    			<p class="contact"><label for="email">Adresa</label></p> 
    			<input id="address" name="address" required=""  type="text"> 
                
                <p class="contact"><label for="username">Poštanski broj</label></p> 
    			<input id="pc" name="pc" required="" type="text"> 
    			 
                <p class="contact"><label for="city">Grad</label></p> 
    			<input type="text" id="city" name="city" required=""> 
                <p class="contact"><label for="state">Ime knjige</label></p> 
    			<input type="text" id="state" name="state" required="" > 
                <p class="contact"><label for="phone">Mobilni telefon</label></p> 
            <input id="phone" name="phone"  required="" type="text"> <br>
            <input class="button" name="submit" id="submit" value="Potvrdi" type="submit"> 	 
           </form> 
                        </div>
                    </div>
                    </div>
</div>      
</div>
</body>