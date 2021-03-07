<?php
require('includes/MongoConfig.php');
    $msg="";	
if(empty($_POST['subcatnm'])){

    $msg.="Kategorija nije izabrana";
	
    if($msg!=""){
        header("location:category.php?error=2");
    }
}
		else
		{
			$cid=$_POST['subcatnm'];
			
			$colection=$client->selectCollection('book_store','subcat');
			$colection->deleteOne(['subcat_id'=>$cid]);
			/*
			$colection1->$client->selectCollection('book_store','book');
			$colection1->deleteOne(['b_subcat'=>$cid]);
			*/
			header("location:subcategory.php?ok=2");
		}
?>
	
	