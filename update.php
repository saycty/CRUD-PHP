<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Update </title>
    
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
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css"> 
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet"> 
     
</head>

<body>
<?php
                    include("config.php");
                    $id="";
                    if (isset ($_GET['id'])){
                        $id=$_GET['id'];
                        
                    }
                    $result=mysqli_query($mysqli,"SELECT * from record where id='$id'");
                    while($res=mysqli_fetch_array($result)){
                        $name=$res['name'];
                        $email=$res['email'];
                        $address=$res['address'];
                        $date=$res['date'];
                        $password=$res['password'];
                    }
                    ?>
                    <?php
                    if(isset($_POST['update'])){
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $date=$_POST['date'];
                        $password=$_POST['password'];
                        $result=mysqli_query($mysqli,"update record SET name='$name',email='$email',address='$address',date='$date',password='$password' where id='$id'");
                        if($result){
                            // echo("update success");
                            $_SESSION['status3']="update successfull";
                            header("location:store.php");
                        }
                    else{
                            echo"failed";
                        }
                    }
                ?>
    
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
                            <a class="navbar-brand pl-0" href="index.html"><img src="assets/custom/images/Kramah_Logo.jpg" alt="Fables Template" class="fables-logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 
                                <ul class="navbar-nav mx-auto fables-nav">   
                                        <a class="nav-link " href="home.php" id="sub-nav1">
                                            Home
                                        </a>
                                        <a class="nav-link " href="#" id="sub-nav3" >
                                            About
                                        </a>
                                        <a class="nav-link " href="store.php" id="sub-nav4" >
                                            Store
                                        </a>
                                        <a class="nav-link " href="#" id="sub-nav6" >
                                            Pages
                                        </a> 
                                        <a class="nav-link" href="insert.php" id="sub-nav7">
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
                                    </a>
                         </div>
                         <a href="#" class="open-search fables-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                            <span class="fables-iconsearch-icon"></span>
                        </a>
                         <a href="login.php" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height"><span class="fables-iconuser"></span></a>
                         
                         
                         
                    </div>
                   </div>
               </div>
    </div>
</div> 
<!-- /End Fables Navigation -->
     
<!-- Start Header -->
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Register</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="home.php" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
<div class="container">
    
     <div class="row my-4 my-lg-5">
     
          <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center">

          <!-- <div class="alert">
            <?php 
            if(isset($_SESSION['status1']))
                {
                ?>
                    <div class="alert alert-success alert-dismissible">
                    <strong>Success!</strong> <?php echo $_SESSION['status1'];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php
                unset($_SESSION['status1']);
                }
            ?>
            </div> -->


               <p class="font-20 semi-font fables-main-text-color mt-4 mb-5">Create a new account</p>
              
               <form action="update.php" method="POST">
                <div class="form-group"> 
                <input type="hidden" name="id" value="<?php echo $id ;?>">

                    <div class="input-icon">
                        <span class="fables-iconuser-register fables-input-icon mt-2 font-19"></span>
                        <input type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="name"  placeholder="name" value="<?php echo $name; ?>"> 
                    </div>
                  
                </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span    class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <input type="email" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="email" placeholder="Email" value="<?php echo $email; ?>"> 
                      </div>
                    
                  </div>
                  <div class="form-group"> 
                    <div class="input-icon">
                        <span class="fables-iconmap-icon fables-input-icon mt-2 font-19"></span>
                        <input type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="address" placeholder="Address" value="<?php echo $address; ?>"> 
                    </div>
                  
                </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconcalender fables-input-icon font-19 mt-1"></span>
                         <input type="date" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="date" placeholder="Date" value="<?php echo $date; ?>">
                      </div>
                    
                  </div> 
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="password" placeholder="Password" value="<?php echo $password; ?>">
                      </div>
                    
                  </div> 
                  <button type="submit" name="update"class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3">update</button>
                </form>
          </div>
     </div>

</div>
      
<!-- /End page content -->
<?php
include("footer.php");
?>


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>  
    
</body>
</html>


<!-- <?php
include("config.php");
if (isset ($_GET['id'])){
    $id=$_GET['id'];
    
}
$result=mysqli_query($mysqli,"SELECT * from record where id='$id'");
while($res=mysqli_fetch_array($result)){
    $name=$res['name'];
    $email=$res['email'];
    $address=$res['address'];
    $date=$res['date'];
    $password=$res['password'];
}
?>
<?php
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $date=$_POST['date'];
    $password=$_POST['password'];
    $result=mysqli_query($mysqli,"update record SET name='$name',email='$email',address='$address',date='$date',password='$password' where id='$id'");
    if($result){
        $_SESSION['status3']="update successfull";

        header("location:store.php");

    }
else{
        echo"failed";
    }
}
?> -->

<!-- Rest of your HTML code -->
