<?php 
   include_once 'database/database.php'
?>

<!doctype html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/responsiveness.css" />
		<link rel="stylesheet" href="css/app.css" />
		<link type="text/css" rel="stylesheet" href="fontawesome/css/all.css">
		<script src="js/app.js"></script>
		<script type="text/javascript" src="js/pageTopScroller.js"></script>
        <link rel="stylesheet" href="css/pageTopScroller.css" />
    <title>PizzaTaco</title>


 </head>
   <body>
       <header>
	     <div class="top-bar">
           <div class="container-fluid  pt-2 pl-5 pr-5" id="container-container" style="background-color:#1f3347;height: 41px;color:white">
            <div class="d-flex align-items-center row pl-4 pr-4">
               <div class="d-none d-sm-block col-sm-5" >
			      <ul class="list-inline mb-0">
				     <li class="list-inline-item pr-3 mr-0" id="freeshippingnote">
                      Free shipping on all orders!
					  </li>
					    <li class="list-inline-item pr-3 mr-0">
                          <button class="tp-btn-small">Shop Now</button>					 
					  </li>
			      </ul>
				</div>
				<div class="d-flex justify-content-end col-sm-7">
                      <ul class="list-inline mb-0">
                          <li class="list-inline-item pr-3 mr-0">
                              <a href="#" class="telephone" id="langsDropdown">
                                  <i style="background-color:#395469;border-radius:50%;font-size:9px" class="fas fa-phone m-0 p-2"></i> (+96)567-4567-4900
                              </a>
                          </li>
                          <li class="list-inline-item">
						       <a href="#" id="langsDropdown" aria-haspopup="true">
                                  <i style="background-color:#395469;border-radius:50%;font-size:9px" class="fas fa-user p-2 m-0"></i>  Account
                              </a>
						  </li>
					  </ul> 
              </div>				
            </div>
        </div>
		</div>
		
		
		
		
		 <section id="bottom-bar">
                    <div class="container-fluid pl-4 pr-4" id="menu-container">
                  <nav class="navbar navbar-expand-md scrolling-navbar bg-white">
                    <div class="container-fluid pl-4 pr-4" id="menu-container">
                    
                      
                     <img id="logo-main" src="img/img-logo/brand.png">

                     
                    
                 
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="collapse navbar-collapse pt-1" id="navbarCollapse">
                        <ul class="navbar-nav w-100 justify-content-end " id="navbar-container">
                          <li class="nav-item  pt-1 pr-1">
                            <a class="nav-link page-scroll" id="main-link" href="index.php">Home</a>
                          </li>
                          <li class="nav-item pt-1 pr-1">
                          <div class="dropdown show" id="menu">
                            <a class="nav-link page-scroll dropdown-toggle" id="menu-a" href="#story" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu animated_dropdown" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" id="submenu" href="products.php">All Products</a>
                          <a class="dropdown-item" id="submenu" href="#thirdsection">New Products</a>
                          <a class="dropdown-item" id="submenu" href="#fourthsection">Collection</a>
                           </div>
                         </div>
                          </li>
                          <li class="nav-item pt-1 pr-1">
                          <div class="dropdown show" id="menu">
                            <a class="nav-link page-scroll dropdown-toggle" id="menu-a" href="#products" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>

                            <div class="dropdown-menu animated_dropdown" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" id="submenu" href="#">Get in touch</a>
                          <a class="dropdown-item" id="submenu" href="#">Find out more</a>
                          <a class="dropdown-item" id="submenu" href="#">Something else</a>
                           </div>
                         </div>
                          </li>
                          <li class="nav-item pt-1 pr-1">
                            <a class="nav-link page-scroll" id="menulink" href="#fifthsection">Blog</a>
                          </li>
                          <li class="nav-item pt-1 pr-1">
                            <a class="nav-link page-scroll" id="menulink" href="#others">Page</a>
                          </li>
              
                          <li class="nav-item pt-1 pr-1">
                            <a class="nav-link page-scroll" id="menulink" href="#contact">Contact</a>
                          </li>
                        <li class="nav-item pl-1">
                            <a href="#"><img style="width:50px" id="img-cart" src="img/img-icon/cart.png"></a>
                            </li>
                        <li class="nav-item pt-1">
                            <p class="pt-1 m-0" style="font-weight:bold;font-size:17px;">$0.00</p>
                        </li>
                        
                        <li class="nav-item pl-1">
                        <a href="#" ><img src="img/img-icon/search.ico" height="38px"></a>
                        </li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </nav>
                  </div>
                   </section>
				   
				   </header>