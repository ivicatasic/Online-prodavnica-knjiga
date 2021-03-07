<ul>
			<li class="current_page_item"><a href="index.php">Početna</a></li>
			<li><a href="category.php">Kategorije</a></li>
			<li><a href="subcategory.php">Potkategorije</a></li>
			<li><a href="all_book.php">Knjige</a></li>
			<li class="last"><a href="contact.php">Pitanja čitalaca</a></li>
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php">Odjava</a></li>';
				}
				else
				{
					echo '<li><a href="../register.php">Registracija</a></li>';
				}
			?>
			<li><a href="../promenibazu.php">Promeni bazu(na MySql)</a></li>
		</ul>