  	

	  <ul>
			<li id="login">
				
						<?php
                        
						require('includes/MongoConfig.php');
                        
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
                                        
										$colection=$client->selectCollection('book_store','category');
										$res=$colection->find();
										
										$data=$res->toArray();
										
										foreach($data as $d)
											{
												echo '<li><a href="subcat.php?cat='.$d['cat_id'].'&catnm='.$d["cat_nm"].'">'.$d["cat_nm"].'</a></li>';
											}
			
											
								?>
				</ul>

			</li>
			
		</ul>

		
		
		
		
		