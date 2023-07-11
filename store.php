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

    <title> Signin</title>
    
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
    <style>
 .container1 {
    
    width: 780px;
    margin-top:50px;
    margin: 0 auto;
    margin-bottom:40px;
    padding: 20px;
    display: flex;
    justify-content: flex-end;
    align-items: flex-start;
    max-height:300px;
    overflow-y:scroll;
    border: 3px solid #f1f1f1;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    box-shadow:0 0 5px 5px rgba(0,0,0,0.5);
  }

  .table-container {
    margin-top: 20px;
    margin-bottom:20px;
  }

  table {
    top:50px;
    width: 100%;
    border-collapse: collapse;
    text-align: center;
  }

  th, td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
  }

  th {
    position: sticky;
    top: -21px;
    width:25%;
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:hover {
    background-color: #f5f5f5;
  } 
  .alert .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.5rem 0.75rem;
    background-color: transparent;
    border: none;
    color: inherit;
    font-size: 1.5rem;
    transition: opacity 0.3s ease;
  }

  .alert .btn-close:hover {
    opacity: 0.7;}
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
                                        <a class="nav-link " href="home.php" id="sub-nav1" >
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
                                    
                                        <a class="nav-link " href="insert.php" id="sub-nav7">
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
         <h2 class="fables-page-title fables-second-border-color">Databse</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="home.php" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Store</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
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
             <div class="alert alert-warning alert-dismissible fade show custom-alert" role="alert"id="customAlert">
                <strong>Hey!</strong> <?php echo $_SESSION['status2']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <script>
                setTimeout(function() {
                var customAlert = document.getElementById('customAlert');
                customAlert.style.display = 'none';
                }, 3000); // Adjust the time in milliseconds (here it's set to 5 seconds)
            </script>
          <?php

        }
      ?>
  </div> 
  <button onclick="location.href = 'logout.php'" type="submit" class="btn btn-primary" name="logout" >logout</button>


<!-- Start page content -->   
<div class="container1">
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
                <th>update</th>
                <th>delete</th>
            </tr>";
    
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                <td>" . $result['name'] . "</td>
                <td>" . $result['email'] . "</td>
                <td>" . $result['address'] . "</td>
                <td>" . $result['date'] . "</td>
                <td>" . $result['password'] . "</td>
                <td><a href=\"update.php?id=$result[id]\" onClick=\"return confirm('Are you sure you want to edit the details?')\">
                        <i class='fa fa-edit'style='float: right;'></i></a></td>
                <td><a href=\"delete.php?id=$result[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">
                          <i class='fa fa-trash'style='float: right;'></i></a></td>
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
    
<?php
include("footer.php");
?>
<!-- /End Footer 2 Background Image --> 


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>  
   
    
</body>
</html>


