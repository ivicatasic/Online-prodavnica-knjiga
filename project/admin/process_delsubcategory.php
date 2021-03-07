<?php
require('includes/config.php');
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
			
			$q="DELETE FROM subcat WHERE subcat_id = $cid";
			
	       mysqli_query($conn,$q) or error_log("Nije moguce obrisati potkategoriju...");	
			
			$q = "DELETE FROM book WHERE b_subcat = ".$cid;
			mysql_query($q,$link);
			
			header("location:subcategory.php?ok=2");
		}
?>
	
	