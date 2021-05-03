<?php
   include 'header.php';


error_reporting(0);

  $msg = "";
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
        $sql = "INSERT INTO image (filename) VALUES ('$filename')";
        mysqli_query($conn, $sql);
    
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($conn, "SELECT * FROM image");
?>





<section class="thirdsection" id="thirdsection" style="text-align:center;">
<div class="container-fluid">







     <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#myModal">ADD</button>
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header ml-5">

        


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="database/productdb.php" enctype="multipart/form-data">
      <div class="custom-file p-3">
                 <input name="uploadfile" class="form-control" type="file" id="formFileDisabled" >
              <label for="formFileDisabled" class="form-label">Choose file</label>
        </div>
            <label for=""><b>Enter Product Name</b></label>
            <input type="text" class="form-control" placeholder="Product Name" name="product">
        <br>
            <label for=""><b>Enter Product Price</b></label>
            <input type="number" class="form-control" placeholder="Product Price" name="price">
            <button type="button" class="btn btn-secondary mt-4" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" class="btn btn-primary mt-4">
             
        </form>
        
      </div>
        
    </div>
  </div>
</div>


     <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#myModal1">DELETE</button>
     <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
    </tr>
  </thead>
  <tbody>


  <?php 
     $sql = "SELECT id FROM shopcontent";
     $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["id"]."<br>";
  }
}
  ?>

    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
   

          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
</div>

</div>


</section>

<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
