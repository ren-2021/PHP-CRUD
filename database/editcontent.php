<?php
require_once "database.php";





if(isset($_REQUEST['updatebtn'])){
    try{
        $product = $_REQUEST['product'];
        $price = $_REQUEST['price'];
        $filename = $_FILES["uploadfile"]["name"];
        //$filetype = $_FILES["uploadfile"]["type"];
        //$filesize = $_FILES["uploadfile"]["size"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];  
        $id = $_REQUEST['update']; 
        $query = "SELECT image FROM content";
        $result = $conn->query($query);
        $datas = $result->fetch(PDO::FETCH_ASSOC);
        
        $folder = "upload/".$filename;
        $directory = "upload/";
        
        unlink($directory.$datas['image']);
        move_uploaded_file($tempname, "upload/" .$filename);
        $update=$conn->prepare('UPDATE content set productname=:prname, productprice=:prprice, image=:primage WHERE id=:id');
        
        $update->bindParam(':prname', $product);
        $update->bindParam(':prprice', $price);
        $update->bindParam(':primage', $filename);
        $update->bindParam(':id', $id);
        
        
        
         if($update->execute()){
            header("Location: ../index.php");
         }
        
        

    }
    
    catch(PDOEXCEPTION $e){
        echo $e->getMessage();
    }


    
}