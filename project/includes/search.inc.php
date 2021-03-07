  	

	  <ul>
			<li id="login">
				
						<?php
                        
						require('includes/config.php');
                        
							if(isset($_SESSION['status']))
							{
								echo '<center><h2>Aktivan :  '.$_SESSION['unm'].'</h2></center>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<center><h2>Prijava</h2><center>
											<b>Korisničko ime:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Lozinka:</b>
											<br><input type="password" name="pwd"><br><br>
											<input type="submit" id="x" value="Prijavi se" />
										</form>';
							}
						?>
			</li>

			<li id="search">
				<center><h2>Pretraga</h2><center>
				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Traži" />
					</fieldset>
				</form>
			</li>
			<?php
			if(isset($_SESSION['status'])){
			
			echo '<li id="search">
				<center><h2>Sortiraj korisnike</h2><center>
				<form method="POST" action="sort.php">
					<fieldset>
					<input type="submit" id="s" name="s1" value="Sortiraj po imenu" /><br><br>
					<input type="submit" id="s" name="s2" value="Sortiraj po id-u" />
					</fieldset>
				</form>
			</li>';
			}
			?>
			<li>
				<center><h2>Žanr</h2><center>
				<ul>
					
								<?php
                                        $defquery="SELECT * FROM `category`";
										$res=mysqli_query($conn,$defquery) or die("Greška pri čitanju podataka iz baze...");
										while($row=mysqli_fetch_array($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
											}
			
											mysqli_close($conn);
								?>
				</ul>

			</li>
			
		</ul>

		
		
		
		
		