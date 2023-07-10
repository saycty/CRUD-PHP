<?php
session_start();
if(!isset($_SESSION['status2']))
{ 
  header("Location:login.php");
}
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from record ORDER by id DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Store Grid List </title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
    
    <style>

        .container {
    display: flex;
    justify-content: center;
}
        body{
      font-size: 30px;
  
  }
  .table-container{
  position: absolute;
  top:200px;
  right:330px;
  height: 598px;
  width: 1270px;
  padding: 0px;
  margin: 50px auto 0;
  max-height:600px;
  overflow-y:scroll;
  border: 3px solid #f1f1f1;
  border-top-left-radius: 25px;
  border-bottom-left-radius: 25px;
  box-shadow:0 0 5px 5px rgba(0,0,0,0.5);
  }
        table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 50%;
      
    }
    
    td, th {
      text-align: left;
      padding: 50px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }  
      </style>
</head>

<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>
    
<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>


<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <div class="container">
               <div class="row">
                   <div class="col-12 col-md-10 col-lg-9 pr-md-0">                       
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
         
                            <a class="navbar-brand pl-0" href="index.html"><img src="assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                                <ul class="navbar-nav mx-auto fables-nav">   
                                        <a class="nav-link " href="#" id="sub-nav1" >
                                            Home
                                        </a>
                                        
                                        <a class="nav-link " href="#" id="sub-nav3" >
                                            About
                                        </a>
                                        
                                        <a class="nav-link" href="#" id="sub-nav4" >
                                            Store
                                        </a>
                                        
                                        <a class="nav-link " href="#" id="sub-nav6" >
                                            Pages
                                        </a>
                                        
                                        <a class="nav-link " href="#" id="sub-nav7" >
                                        Register
                                        </a>
                                        
                                </ul> 

                    </div>
                </nav>
                   </div>
                   <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">
                       
                    <div class="fables-header-icons">
                        <div class="dropdown"> 
                                  <a href="#_" class="fables-third-text-color dropdown-toggle right px-3 px-md-2 px-lg-4 fables-second-hover-color top-header-link max-line-height position-relative" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <span class="fables-iconcart-icon font-20"></span>
                                       <span class="fables-cart-number fables-second-background-color text-center">3</span>
                                    </a>
 
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <div class="p-3 cart-block">
                                             <p class="fables-second-text-color semi-font mb-4 font-17">(2) Items in my cart</p>
                                             <div class="row mx-0 mb-3">
                                                 <div class="col-4 p-0">
                                                     <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                                 </div>
                                                 <div class="col-8">
                                                     <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                                     <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                                     <p class="fables-forth-text-color">QTY : 1</p>
                                                 </div>
                                             </div>
                                             <div class="row mx-0 mb-3">
                                                 <div class="col-4 p-0">
                                                     <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                                 </div>
                                                 <div class="col-8">
                                                     <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                                     <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                                     <p class="fables-forth-text-color">QTY : 1</p>
                                                 </div>
                                             </div>
                                             <span class="font-16 semi-font fables-main-text-color">TOTAL</span>
                                             <span class="font-14 semi-font fables-second-text-color float-right">$200.00</span>
                                             <hr>
                                             <div class="text-center">
                                                 <a href="#" class="fables-second-background-color fables-btn-rounded  text-center white-color py-2 px-3 font-14 bg-hover-transparent border fables-second-border-color fables-second-hover-color">View my cart</a> 
                                                <a href="#" class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2 px-4 font-14 fables-second-hover-background-color">Checkout</a>
                                             </div>
                                        </div>
                                  </div>
                         </div>
                         <a href="#" class="open-search fables-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                            <span class="fables-iconsearch-icon"></span>
                        </a>
                         <a href="signin.html" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height"><span class="fables-iconuser"></span></a>
                         
                         
                         
                    </div>
                   </div>
               </div>
    </div>
</div> 
<!-- /End Fables Navigation --> 
 
<!-- Start Header -->
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Store Grid List</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Store Grid List</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
<div class="alert">
  <?php 
  $userprofile=$_SESSION['status2'];
  if($userprofile==true){

  }
  else{
    header("location:login.php");
  }
        if(isset($_SESSION['status2']))
        {
          ?>
             <div class="alert alert-warning alert-dismissible fade show custom-alert" role="alert">
                <strong>Hey!</strong> <?php echo $_SESSION['status2']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php

        }
      ?>
  </div> 
  <button onclick="location.href = 'logout.php'" type="submit" class="btn btn-primary" name="logout" >logout</button>

<div class="container">
<div class="table-container">
    <?php
    include("config.php");
    $query = "SELECT * FROM record";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);
    
    // echo $total;
    if ($total != 0) {
        echo "<table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>address</th>
                <th>date</th>
                <th>password</th>
            </tr>";
    
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                <td>" . $result['name'] . "</td>
                <td>" . $result['email'] . "</td>
                <td>" . $result['address'] . "</td>
                <td>" . $result['date'] . "</td>
                <td>" . $result['password'] . "</td>
            </tr>";
        }
    } 
    else {
        echo "Table has no records";
    }
    ?>
    </table>
</div>
</div> 
<!-- /End page content -->
    
<!-- Start Footer 2 Background Image  -->
<div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                <h2 class="font-30 semi-font mb-5">Newsletter</h2>
                <form class="form-inline position-relative"> 
                  <div class="form-group fables-subscribe-formgroup"> 
                    <input type="email" class="form-control fables-subscribe-input fables-btn-rouned" placeholder="Your Email">
                  </div>
                  <button type="submit" class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">Subscribe</button>
                </form>
                
            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="assets/custom/images/fables-logo.png" alt="fables template"></a>
                <p class="font-15 fables-third-text-color">
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. 
                    <br><br>
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p> 
                
            </div>
             
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contact us</h2>
               <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Address Information</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">level13, 2Elizabeth St, Melbourne, Victor 2000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Call Now </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+333 111 111 000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">adminsupport@website.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE</h2>
                <ul class="nav fables-footer-links">
                    <li><a href="about1.html">About Us</a></li>
                    <li><a href="contactus1.html">Contact Us</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
            </div>
                      
        </div> 
        
        </div>
</div>
<div class="copyright fables-main-background-color mt-0 border-0 white-color">
        <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
            <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p class="mb-0">Copyright © Fables 2018. All rights reserved.</p> 

</div>
    
<!-- /End Footer 2 Background Image -->


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/range-slider/range-slider.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/custom/js/custom.js"></script>  
    
</body>
</html>