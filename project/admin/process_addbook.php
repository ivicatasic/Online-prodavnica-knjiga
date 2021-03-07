<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['publisher'])|| empty($_POST['edition']) || empty($_POST['isbn']) || empty($_POST['pages']) || empty($_POST['price']))
		{
			$msg.="<li>Niste uneli sve podatke";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg.="<li>Cena ne sme sadržati tekst";
		}
		if(!(is_numeric($_POST['pages'])))
		{
			$msg.="<li>Strane ne smeju sadržati tekst";
		}
		
		if(empty($_FILES['img']['name']))
		$msg.= "<li>Postavite sliku";
	
		if($_FILES['img']['error']>0)
		$msg.= "<li>Preška pri postavljanju";
		
				
		if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg .= "<li>Pogrešan format slike";


		if($msg!="")
		{
			header("location:addbook.php?error=".$msg);
		}
		else
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$b_img = "upload_image/".$_FILES['img']['name'];	
			
			
		
			$b_nm=$_POST['name'];
			$b_cat=$_POST['cat'];
			$b_desc=$_POST['description'];
			$b_edition=$_POST['edition'];
			$b_publisher=$_POST['publisher'];			
			$b_isbn=$_POST['isbn'];
			$b_pages=$_POST['pages'];
			$b_price=$_POST['price'];
			
			
		
			
			//$query="INSERT INTO book(b_nm,b_subcat,b_desc,b_edition,b_publisher,b_isbn,b_page,b_price,b_img)
			//VALUES('$b_nm','$b_cat','$b_desc','$b_edition','$b_publisher','$b_isbn',$b_pages,$b_price,'$b_img')";
			$query=("call dodaj_knjigu('$b_nm','$b_cat','$b_desc','$b_edition','$b_publisher','$b_isbn','$b_pages','$b_price','$b_img')");
			mysqli_query($conn,$query) or error_log("Nije moguće povezati se sa bazom...");
			header("location:addbook.php?ok=1");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	