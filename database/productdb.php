<?php
require_once 'database.php';

if (isset($_REQUEST['submit'])) {
    try{
      $product = $_REQUEST['product'];
      $price = $_REQUEST['price'];

      $filename = $_FILES["uploadfile"]["name"];
      //$filetype = $_FILES["uploadfile"]["type"];
      //$filesize = $_FILES["uploadfile"]["size"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];    

      $folder = "upload/".$filename;

      $query = "SELECT image FROM content";

      $result = $conn->query($query);
      $datas = $result->fetchAll(PDO::FETCH_ASSOC);

      if(move_uploaded_file($tempname, $folder.$$filename)){
        $getcontent = $conn->prepare('INSERT INTO content (productname, productprice, image) VALUES (:fproduct, :fprice, :fimage)');
        $getcontent->bindParam(':fproduct', $product);
        $getcontent->bindParam(':fprice', $price);
        $getcontent->bindParam(':fimage', $filename);
        
      }

      

      if($getcontent->execute()){
        $insertMsg="Upload file Successfully";
        header("Location: ../index.php");
      }
        

    }

    catch(PDOEXCEPTION $e){
      echo $e->getMessage();
    }
}



