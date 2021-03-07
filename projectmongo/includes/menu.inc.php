<ul>
			<li class="current_page_item"><a href="index.php">Početna</a></li>
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Odjava</a></li>';
                        echo '<li><a href="edit_info.php">Promeni podatke</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Registracija</a></li>';
					}
			?>
			
			
			<li><a href="contact.php">Kontakt</a></li>
			<li><a href="aboutus.php">O nama</a></li>
            <li><a href="viewcart.php">Korpa</a></li>
            <li><a href="promenibazu.php">Promeni bazu(na MySql)</a></li>
			
</ul>