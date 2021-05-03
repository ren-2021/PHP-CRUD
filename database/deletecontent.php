<?php

include "database.php";


$id = $_GET['id']; 
echo $id;
$del = $conn->prepare("DELETE FROM content WHERE id =$id");
$del->bindParam(':id', $id);
if($del->execute()){
    header("Location: ../index.php");
  }



