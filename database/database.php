<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pt_database';

try{

$conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e){
  $e->getMessage();
}




  


