<?php
   include 'header.php';

  
?>
				   	     
        <section style="margin-top: 3px;margin-bottom:40px;background-color:black;width:100%">
          <div class="bd-example">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100" id="img-carousel" src="img/img-carousel/a.jpg" alt="First slide">
                  <div class="carousel-caption d-md-block" >
                    <div class="contain">
                    <div class="inner">
               
                <h4 id="subCaption">We offer all kinds of pizza, tacos...</h4>
                <h1 id="mainCaption">Much Tastier, Much Yummier!</h1>

                <button class="btn btn-light">Read More</button>
                    </div>
                  </div>
              </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" id="img-carousel" src="img/img-carousel/b.png" alt="Second slide">
                  <div class="carousel-caption d-md-block">
                    <div class="contain">
                      <div class="inner">
                  
                  <h4 id="subCaption">Ut enim ad minim veniam Lorem ipsum</h4>
                  <h1 id="mainCaption">Blow your mind with Garth's Taco Pizza!</h1>
  
                  <button class="btn btn-light">Read More</button>
                      </div>
                    </div>
              </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" id="img-carousel" src="img/img-carousel/c.png" alt="Third slide">
                  <div class="carousel-caption d-md-block">
                    <div class="contain">
                      <div class="inner">
                  
                  <h4 id="subCaption">Eiusmod tempor elit, sed do</h4>
                  <h1 id="mainCaption">My Line Of Hot and Spicy Paprika.</h1>
  
                  <button class="btn btn-light">Read More</button>
                      </div>
                    </div>
              </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
        </section>
		
		
		
		<section class="thirdsection" id="thirdsection" style="text-align:center;">
<div class="container-fluid">
  <hr class="hr-line" style="width:40%;margin:auto;border-top: 1px solid #9c9c9c;">
<h1 style="padding-top:30px;font-weight:500;font-family: 'Trebuchet MS', 'sans-serif';color:#ff9826">New Product</h1>
<p class="lead" style="padding-bottom:15px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

<div class="row">  
<?php 

include('database/database.php');

$query = "SELECT * FROM content";

$result = $conn->query($query);
$datas = $result->fetchAll(PDO::FETCH_ASSOC);



foreach($datas as $data){

  $id = $data['id'];
   ?>

 <div class="col-lg-3">
    <a href="#" style="text-decoration:none;color:#1f3347">
      <div class="card swing">
       <img style="object-fit: cover;" class="bd-placeholder-img card-img" width="300" height="300" src="database/upload/<?php echo $data['image'];?>">
      </div>
    <p style="padding-top: 10px;font-weight:500;font-size:17px"><?php echo $data['productname'];?></p>
    <p id="price"><?php echo "$ ".$data['productprice']; ?></p>
    
    <div class="row justify-content-center mb-4">
    <div>


   <?php

    //  echo "<pre>";
    //  print_r($data);
    //  echo "</pre>"; 
   ?>


    <a  href="database/editcontent.php?edit=<?php echo $data['id'];?>" style="background-color:#00BFFF;color:white;padding: 5px 10px 5px 10px;border-radius:3px;text-decoration:none" class="ml-1" data-toggle="modal" data-target="#myModal<?php echo $data['id'] ?>">Edit</a>
    <div class="modal fade" id="myModal<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header ml-5">
      <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
        <button type="button" onClick="window.location.reload();" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="database/editcontent.php" enctype="multipart/form-data">
      <input type="hidden" value=<?php echo $id;?> name="update">
                 <label for="formFileDisabled" class="form-label">Choose file</label>
                 <div class="row">
                    <div class="col-6 ">



                    <input name="uploadfile" class="form-control" type="file" id="formFileDisabled" value="<?php echo $data['image'];?>" accept="image/*" onchange="document.getElementById('<?php echo $data['id'] ?>').src = window.URL.createObjectURL(this.files[0]);">
                      <p>Current Image: <b><?php echo ($data['image']); ?></b></p>
                     
                    </div>
                    <div class="col-6">  
                    
                       <img style="object-fit: cover;border-radius:2px" id="<?php echo $data['id'] ?>" width="150px" height="150px" src="database/upload/<?php echo $data['image'];?>">
                    </div>
                 </div>
              <br>
            <label for=""><b>Enter New Product Name</b></label>
            <input type="text" class="form-control" placeholder="Product Name" name="product" value="<?php echo $data['productname']; ?>">
        <br>
            <label for=""><b>Enter New Product Price</b></label>
            <input type="number" class="form-control" placeholder="Product Price" name="price" value="<?php echo $data['productprice']; ?>">
            <button type="button" onClick="window.location.reload();" class="btn btn-secondary mt-4" data-dismiss="modal">Close</button>
            <input type="submit" name="updatebtn" class="btn btn-primary mt-4">  
        </form>  
        
      </div>   
    </div>
  </div>
</div>
    </div>
    <div>

    
  
    <a style="background-color:red;color:white;padding: 5px 10px 5px 10px;border-radius:3px;text-decoration:none" class="ml-2" href="database/deletecontent.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a> 
   
    
    </div>
    </div>
</a>

</div>
<?php    } ?>

<!-- < ?php } ?> -->




</div>

<button type="button" class="btn btn-primary mr-2 mb-5" data-toggle="modal" data-target="#myModal1">ADD</button>
     <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header ml-5">
      <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="database/productdb.php" enctype="multipart/form-data">
     <div>
                 <input name="uploadfile" class="form-control" type="file" id="formFileDisabled" style="padding:5px">
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


<footer class="text-white text-center" style="padding-top: 20px" >

<div class="container p-4" id="footer-one">

<div class="row" style="padding-bottom:40px">

<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
<h5 class="text-uppercase" style="padding-bottom: 20px">Food Content</h5>

<p id="footer-menu">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
aliquam voluptatem veniam, est atque cumque eum delectus sint!
</p>
</div>
<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
<h5 class="text-uppercase" style="padding-bottom: 20px">Customer Care</h5>

<ul class="list-unstyled mb-0">
<li>
<a href="#!" id="footer-menu">About Site</a>
</li>
<li>
<a href="#!" id="footer-menu">Services</a>
</li>
<li>
<a href="#!" id="footer-menu">Contents</a>
</li>
<li>
<a href="#!" id="footer-menu">Services</a>
</li>
</ul>
</div>
<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
<h5 class="text-uppercase" style="padding-bottom: 20px">Social Media</h5>

<ul class="list-inline">
<li class="list-inline-item">
  <a href="facebook.com"><div id="blog_img" style="background-color: rgb(36, 86, 133);border-radius:4px;width:55px;height:55px">
  <i class="fab fa-facebook" style="color:white;font-size:30px;padding-top:12px"></i>
  </div></a>
</li>
<li class="list-inline-item">
  <a href="youtube.com"><div id="blog_img" style="background-color: rgb(199, 25, 25);border-radius:4px;width:55px;height:55px">
    <i class="fab fa-youtube" style="color:white;font-size:30px;padding-top:12px"></i>
    </div></a>
</li>
<li class="list-inline-item">
  <a href="twitter.com"><div id="blog_img" style="background-color: rgb(47, 173, 211);border-radius:4px;width:55px;height:55px">
    <i class="fab fa-twitter" style="color:white;font-size:30px;padding-top:12px"></i>
    </div></a>
</li>
</ul>


</div>
</div>
<hr class="hr-line" style="width:90%;margin:auto;border-top: 1px solid #0b6e66;">
<div style="text-align: center;">
<p style="font-size: 15px; padding-top: 30px;color:#fff">Copyright © 2021 PizzaTaco   |   Created by Rendel<p>
</div>
</div>

</footer>  
	   
      
   </body>
 </html>