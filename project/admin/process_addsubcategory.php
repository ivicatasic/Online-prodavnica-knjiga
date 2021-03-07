<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['subcat']) || empty($_POST['parent']))
		{
			$msg.="Niste uneli sve podatke";
		}
		
		if($msg!="")
		{
           header("location:subcategory.php?error=1"); 
		}
		else
		{
		
			
		
			$parent = $_POST['parent'];
			$subcat=$_POST['subcat'];
			
			$query="INSERT INTO subcat(parent_id, subcat_nm) VALUES('$parent','$subcat')";
			
			mysqli_query($conn,$query) or error_log("Nije moguće dodati potkategoriju...");
			
			header("location:subcategory.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	