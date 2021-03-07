<?php
require('includes/config.php');
	

			$query="DELETE FROM book WHERE b_id =".$_GET['n_id'];
		    $qq = "SELECT b_img FROM book WHERE b_id=".$_GET['n_id'];
            $res=mysqli_query($conn,$qq);
            $row=mysqli_fetch_assoc($res);
            unlink($res);

			mysqli_query($conn,$query) or die("Nije moguće čitati podatke iz baze...");
			
			
			header("location:all_book.php?ok=1");

?>