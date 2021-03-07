<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['cat']))
		{
			$msg.="Niste uneli sve podatke";
		}
		
		if($msg!="")
		{
            header("location:category.php?error=1");
		}
		else
		{
	
		
			$cat=$_POST['cat'];
			
			$query="INSERT INTO category(cat_nm) VALUES('$cat')";
			
			mysqli_query($conn,$query) or error_log("Nije moguće dodati novu kategoriju");
			
			//mysql_close($link);
			header("location:category.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	