<?php
require('includes/MongoConfig.php');
	

			$colection=$client->selectCollection('book_store','book');
			$ca=(int)$_GET['n_id'];
	        $colection->deleteOne([
			'b_id'=>$ca
			]);

			header("location:all_book.php?ok=1");

?>