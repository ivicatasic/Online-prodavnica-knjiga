<?php
require 'C:\Users\Acer\vendor\autoload.php' ; // include Composer's autoloader 
$client = new MongoDB\Client( "mongodb://localhost:27017" ); 
$db = $client -> selectDatabase ( 'book_store' );
$colection=$client->selectCollection('book_store','book');
/*$ca=(int)$_GET['cat'];

$res=$colection->find(['parent_id'=>$ca]);
foreach($res as $r)
{
	echo $r['parent_id'];
	echo $r['subcat_id'];
	echo $r['subcat_nm'];
}
*/
/*
//$cat=$_GET['subcatid'];
$res=$colection->find(['b_subcat'=>'1']);
//var_dump($res);
foreach($res as $r)
{
	echo $r['b_nm'];
	echo $r['b_img'];
}
*/
$res=$colection->find(['b_nm'=>'Ilon Mask: Tesla, SpaceX i potraga za fantasticnom buducnoscu ']);
//var_dump($res);
foreach($res as $r){
 echo $r['b_img'];
 echo $r['b_desc'];
	
}


?>