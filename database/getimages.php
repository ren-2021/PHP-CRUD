<?php
include 'database.php';







/*

if (isset($_POST['submit'])) {
  
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];    
  $folder = "image/".$filename;
        

      // Get all the submitted data from the form
      $sql = "INSERT INTO image (filename) VALUES ('$filename')";

      // Execute query
      mysqli_query($conn, $sql);
        
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder))  {
          $msg = "Image uploaded successfully";
      }else{
          $msg = "Failed to upload image";
    }
}
$result = mysqli_query($conn, "SELECT * FROM image");