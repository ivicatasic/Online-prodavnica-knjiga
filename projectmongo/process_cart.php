<?php session_start();

	if(isset($_GET['nm']) and isset($_GET['cat']) and isset($_GET['rate']))
	{
		$_SESSION['cat'][] = array("nm"=>$_GET['nm'],"cat"=>$_GET['cat'],"rate"=>$_GET['rate'],"qty"=>"1");
		header("location: viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cat'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{

		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: viewcart.php");
		}
	}


?>