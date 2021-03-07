<?php
require 'C:\Users\Acer\vendor\autoload.php' ; // include Composer's autoloader 
$client = new MongoDB\Client( "mongodb://localhost:27017" ); 
$db = $client -> selectDatabase ( 'book_store' );

?>