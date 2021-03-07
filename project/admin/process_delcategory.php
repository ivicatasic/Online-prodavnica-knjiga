<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg="";
        if(empty($_POST['del']))
		{
			$msg.="<li>Niste uneli sve podatke";
		}
		
		if($msg!="")
		{
            header("location:category.php?error=".$msg);
		}
		else
		{
		

			$delcat=$_POST['del'];
			
			//$query="DELETE FROM category WHERE cat_nm ='$delcat' ";
		    $query=("call brisi_kategoriju('$delcat')");
			mysqli_query($conn,$query) or error_log("Nije moguće obrisati kategoriju...");
			
			
			header("location:category.php?ok=2");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	