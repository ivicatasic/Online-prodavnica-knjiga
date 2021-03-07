<?php
require('includes/MongoConfig.php');

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
			$count=24;
			$count=$count+1;
			
			
			
			
			
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
			
			$colection=$client->selectCollection('book_store','book');
			
			$colection->insertOne([
			'b_id'=>$count,
			'b_nm'=>$b_nm,
			'b_subcat'=>$b_cat,
			'b_desc'=>$b_desc,
			'b_edition'=>$b_edition,
			'b_publisher'=>$b_publisher,
			'b_isbn'=>$b_isbn,
			'b_page'=>$b_pages,
			'b_price'=>$b_price,
			'b_img'=>$b_img
			]);
			
			header("location:addbook.php?ok=1");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	