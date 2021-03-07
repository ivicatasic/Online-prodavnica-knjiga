<?php
require 'C:\Users\Acer\vendor\autoload.php' ; // include Composer's autoloader 
$client = new MongoDB\Client( "mongodb://localhost:27017" ); 
$db = $client -> selectDatabase ( 'book_store' );
//$colection=$client->selectCollection('local','test_kolekcija');
//$res = $colection->find(); 

?>