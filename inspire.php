<?php
      // require('indexMain.php');
     session_start();

    
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
   
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <link rel="stylesheet" href="Assets/CSS/style.css">


   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Consultancy</title>


  </head> 
  <body >
<!--begining of the nav bar-->
<nav class="navbar navbar-expand-lg navbar-light px-5" >
      <div class="container-fluid " >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-0 mr-auto " href="index.php"><img src="Assets/Images/logo.png" width="200px" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-5 mb-lg-0" id="topUl">
            <!-- for the university -->
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Universities
              </a>
              <ul class="dropdown-menu drop-down-links1" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item my-2" href="collegeList.php" target="_BLANK">University List</a></li>
                <li><a class="dropdown-item my-2" href="collegeListPersonal.php">Your Personal List</a></li>
              </ul>
            </li>
            <!-- ends unuversity -->
            <li class="nav-item">
              <a class="nav-link" href="QA.php">Q & A</a>
            </li>
    
  <li class="nav-item dropdown menu-area d-none d-lg-block" id="megaMenu">
    <a class="nav-link dropdown-toggle" href="#"  id="ellipsis" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fas fa-ellipsis-h"></i>
    </a>
    <ul class="dropdown-menu drop-down-links"  aria-labelledby="navbarDropdown" >
       <div class="container drop-down-page">
      <!-- collegues part -->
      <div class="row text-left mx-5 py-5  ">
      <div class="col-sm-6 col-lg-3" >
      <p class="text-uppercase drop-header mx-3 ">Find School</p>
      <hr class="text-black" >
      <ul class="list-unstyled pl-0 ml-0">
      <li class="dropdown-item my-2"><a class="text-info" href="CalculateChance.php">Calculate your chance</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByEngineering.php"> Collages for Engineering</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByMedicine.php">Collages for  Medicine</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByBusiness.php">Collages for Business</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByRegion.php?region=Addis Ababa">Collages in Addis Ababa</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByRegion.php?region=Oromia">Collages in Oromia</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByRegion.php?region=Amhara">Collages in Amhara</a> </li>
      </ul>
      </div>

      <!-- guidance -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header  mx-3">guidance</p>
      <hr class="text-black" >

      <ul class="list-unstyled ml-5">
        <li class="dropdown-item my-2"><a class="text-info" href="collegeList.php">Find school</a> </li>
        
        
      </ul>
      </div>

      <!-- more resorces -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header  mx-3">Quick Links</p>
      <hr class="text-black" >
      <ul class="list-unstyled ml-5">
      <li class="dropdown-item my-2"><a class="text-info" href="inspire.php">Inspirational Advice</a> </li>
     
      </ul>
      </div>

      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header  mx-3">about</p>
      <hr class="text-black" >
      <ul class="list-unstyled">
        
        <li class="dropdown-item my-2"><a class="text-info" href="about.php">About Us</a> </li>
        <li class="dropdown-item my-2"><a class="text-info" href="contact.php">Contact Us</a> </li>
        <li class="dropdown-item my-2"><a class="text-info" href="blog.php">Our Blog</a> </li>
      </ul>
      </div>
      </div>
      </div>
    </ul>
  </li>
          </ul>
        </div>
        <img src="https://img.icons8.com/fluent/20/000000/person-male.png"/>

        <div>

<?php

if(isset($_SESSION["email"])){
echo $_SESSION["email"];
}
?>

</div>
<div class="nav-item mx-2">
  
  <a class="btn btn-outline-dark mx-0" id="loginBtn" href="indexMain.php? id=2">
    
<?php

if(isset($_SESSION["email"])){
echo "Logout";
}

?>


  
  </a>
  
</div>

      </div>
    </nav>
   <hr class="text-black" >

 <!-- below the nav -->
 <div class="row">
   <div class="col-1"></div>
 <div class=" col-7 container py-5">
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Assets/Images/Covers/Addis Ababa University.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="Assets/Images/Covers/Bahir Dar University.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Assets/Images/Covers/Adama Science and Technology University.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Assets/Images/Covers/Ambo University.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="Assets/Images/Covers/Debre Berhan University.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Assets/Images/Covers/Gondar University.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="Assets/Images/Covers/Haramaya University.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Assets/Images/Covers/Hawassa University.jpg" class="d-block w-100" alt="...">
    </div>


<div class="carousel-item">
      <img src="Assets/Images/Covers/Jimma University.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Assets/Images/Covers/Mekelle Institute of Technology.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="Assets/Images/Covers/Rift Valley University.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Assets/Images/Covers/Unity University.jpg" class="d-block w-100" alt="...">
    </div>

    

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
<div class="col-1"></div>


 </div>

<div class="container my-5 mx-3">
  <div class="row">
    <div class="col-lg-3 col-sm-12 col-md-3 col-12">
    <div class="card shadow-lg " >
  <img class="card-img-top" src="Assets/Images/engineering.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"> <i class="fas fa-cogs"></i> Engineering</h5>
    <p class="card-text">Studying engineering brings prestige. Do not forget the prestige that comes with studying engineering. .</p>
    <a href="collegeListByEngineering.php" class="btn btn-primary">Choose Universities</a>
  </div>
      </div>
  </div>



  <div class="col-lg-3 col-sm-12 col-md-3 col-12">
    <div class="card shadow-lg " >
  <img class="card-img-top" src="Assets/Images/art.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><i class="fas fa-gavel"></i> ART</h5>
    <p class="card-text">
    Students involved in the arts have tremendous academic benefits compared to students without exposure to the arts. Art inspires kids to excel in and out of the classroom. It helps students stay in school, increases motivation, improves attitudes and attendance, and improves academic performance.</p>
<a href="collegeListByArt.php" class="btn btn-primary">Choose Universities</a>
  </div>
      </div>
  </div>


  <div class="col-lg-3 col-sm-12 col-md-3 col-12">
    <div class="card shadow-lg" mx-3>
  <img class="card-img-top" src="Assets/Images/medicine.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><i class="fas fa-stethoscope"></i> Medicine</h5>
    <p class="card-text">
Because the ability to help people directly is challenging and sometimes hard to cope with, your medical training will prepare and teach you so that you can handle any situation. Studying medicine gives you the chance to make a difference in a world full of pain and suffering.</p>
<a href="collegeListByMedicine.php" class="btn btn-primary">Choose Universities</a>
  </div>
      </div>
  </div>


  <div class="col-lg-3 col-sm-12 col-md-3 col-12">
    <div class="card shadow-lg" >
  <img class="card-img-top" src="Assets/Images/business.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><i class="fas fa-users-cog"></i> Business</h5>
    <p class="card-text">For the aspiring entrepreneurs and business leaders, a business management degree is consistently a popular choice. It provides the academic knowledge and skills to pursue global career opportunities and helps you develop a broad understanding of businesses and specific areas such as finance and human resources. </p>
    <a href="collegeListByBusiness.php" class="btn btn-primary">Choose Universities</a>
  </div>
      </div>
  </div>
</div>
    </div>

  </div>

</div>









<!-- the footer part -->
<footer class="footer_link mt-5" style="margin-bottom: -100px;">
    <div class="page-footer bg-dark text-white">

       <!-- the contact information -->
     <div class="row text-left mx-5 py-5 px-3 ">
       <div class="col-md-3">
        <a href="index.php">          <h3 class="mx-2 text-success">Azur Consultancy</h3></a> 
        <hr class="bg-light mt-0 ml-0" style="width: 10rem; height: 0.1rem;">
         <a class="m-2" id="email" href="">azurConsultancy@gmail.com</a>
         <div class="row d-flex align-items-left">
           <div class="col-md-12">
               <a href=""><i class="fab fa-instagram fa-2x m-2"></i></a>
               <a href="#"><i class="fab fa-facebook-square fa-2x m-2"></i></a>
               <a href=""><i class="fab fa-twitter fa-2x m-2"></i></a>
               <a href=""><i class="fab fa-linkedin fa-2x m-2"></i></a>
               <a href=""><i class="fab fa-instagram-square fa-2x m-2"></i></a>
           </div>
         </div>
         <p class="m-2">&copy; 2021 azurConsultancy</p>
       </div>

   <!-- guidance -->
       <div class="col-md-3">
         <p class="text-uppercase footer_header">guidance</p>
         <hr class="bg-light mt-0 ml-0" style="width: 7rem; height: 0.1rem;">
           <ul class="list-unstyled ml-5">
               <li class="my-2"><a class="text-info" href="index.php">Build Your schoole List</a> </li>
               <li class="my-2"><a class="text-info" href="blog.php">Our Blog</a> </li>
           </ul>
       </div>

            <!-- quick links -->
            <div class="col-md-3">
         <p class="text-uppercase footer_header">Quick Links</p>
         <hr class="bg-light mt-0 ml-0" style="width: 10rem; height: 0.1rem;">
         <ul class="list-unstyled ml-5">
             <li class="my-2"><a class="text-info" href="collegeListPersonal.php">Personal List</a> </li>
             <li class="my-2"><a class="text-info" href="inspire.php">Inspirational Advice</a> </li>
         </ul>
     </div>


       <div class="col-md-3">
           <p class="text-uppercase footer_header">about</p>
           <hr class="bg-light mt-0 ml-0" style="width: 10rem; height: 0.1rem;">
           <ul class="list-unstyled">
            <a href=""><li class="m-2">About us</li></a>
            <a href=""><li class="m-2">Contact us</li></a>
            
              
              
              </ul>
       </div>
       </div>
   </div>
 </footer>





   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    
  </script>
  <script src="./Assets/JS/inspire.js"></script>
  </body>
</html>
