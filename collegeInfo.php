<?php
      // require('indexMain.php');
     session_start();

     if(!isset($_SESSION["email"])){
        header("Location:indexMain.php");

    }
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" href="Assets/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,200&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
   
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


      

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Consultancy</title>


  </head> 
  <body>
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
      <p class="text-uppercase drop-header ">Find School</p>
      <hr class="text-black" >
      <ul class="list-unstyled pl-0">
      <li class="dropdown-item my-2"><a class="text-info" href="CalculateChance.php">Calculate your chance</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByEngineering.php"> Collages for Engineering</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByMedicine.php">Collages for  Medicine</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="./collegeListByBusiness.php">Collages for Business</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="/collegeListByRegion.php?region=Addis Ababa">Collages in Addis Ababa</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="/collegeListByRegion.php?region=Hawassa">Collages in Hawassa</a> </li>
      <li class="dropdown-item my-2"><a class="text-info" href="/collegeListByRegion.php?region=Gondar">Collages in Gonder</a> </li>
      </ul>
      </div>

      <!-- guidance -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header">guidance</p>
      <hr class="text-black" >

      <ul class="list-unstyled ml-5">
        <li class="dropdown-item my-2"><a class="text-info" href="collegeList.php">Find school</a> </li>
        
        
      </ul>
      </div>

      <!-- more resorces -->
      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header">more resources</p>
      <hr class="text-black" >
      <ul class="list-unstyled ml-5">
      <li class="dropdown-item my-2"><a class="text-info" href="index.php">Downloads</a> </li>
     
      </ul>
      </div>

      <div class="col-sm-6 col-lg-3">
      <p class="text-uppercase drop-header">about</p>
      <hr class="text-black" >
      <ul class="list-unstyled">
        
        <li class="dropdown-item my-2"><a class="text-info" href="about.php">About Us</a> </li>
        <li class="dropdown-item my-2"><a class="text-info" href="contact.php">Contact Us</a> </li>
      </ul>
      </div>
      </div>
      </div>
    </ul>
  </li>
          </ul>
        </div>
        <img src="https://img.icons8.com/fluent/20/000000/person-male.png"/>

        <div id="user">

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


   
      <div class="row my-5 pt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 my-5" data-aos="zoom-out-up">
         <div class="main text-center">
           <img class="d-block w-100 img-fluid rounded " id="cover" src="Assets/Images/Covers/University of Gondar.jpg"  alt="University Image">

 
             
           </div>
        </div>
    </div>
    <div class="row" data-aos="zoom-in-right">
      <div class="col-lg-1 col-md-1"></div>
      <div class="col-lg-4 col-md-4 col-sm-4 display-6" id="unname">Addis Ababa University</div>
      <div class="col-lg-4 col-md-4"></div>

      <div class="col-md-3"><button type="button" class="btn btn-outline-success btn-lg"  onclick="bootstrapGrowl()" id="addToList"><i class="fas fa-edit text-success"></i> Add to List </button>
      </div>

  </div>

  <div class="container py-4 mt-4 container_one" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
    <h4 class="header text-success" >Overview <i class="fas fa-binoculars text-success"></i></h4>
    <hr class="text-black" >

  <div class="px-4" id="overview">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    Why do we use it?
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
    
  </div>
    

  </div>

  <!--University identity section-->
  <div class="row my-3 "  data-aos="fade-up"
     data-aos-anchor-placement="top-center">
    <div class="col-lg-1 col-md-1"></div>
    <div class="col-lg-6 col-md-12 col-sm-12">
<div class="container-fluid container_one py-4 my-4">
  <h4 class="header text-success">University Identity <i class="fas fa-passport text-success"></i></h4>
  <hr class="text-black" >
<div class="row" >
<h4 class="text-primary">Name</h4> <span id="unname"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary">Acronym</h4> <span id="unacr"></span>
</div>
  <div class="row my-3">
    <h4 class="text-primary">Founded</h4> <span id="unfounded"></span>
  </div>
    <div class="row my-3">
      <h4 class="text-primary">Motto</h4> <span id="unmotto"></span>
    </div>
      <div class="row my-3">
        <h4 class="text-primary">Website </h4> <span id="unweb"></span>
 
        </div>
</div>


    </div>
  
    <div class="col-lg-4 col-md-12 col-sm-12 my-4">
      <div class="container-fluid container_one py-4">
        <h4 class="header text-success">University Location <i class="fas fa-compass text-success"></i></h4>
        <hr class="text-black" >
      <div class="row" >
        <h4 class="text-primary"><i class="fas fa-thumbtack "></i></h4> <span id="address"></span>
      </div>
      <div class="row my-3" >
        <h4 class="text-primary"><i class="fas fa-phone"></i></h4> <span id="tel"></span>
        </div>
        <div class="row my-3" >
          <h4 class="text-primary"><i class="fas fa-fax"></i></h4> <span id="fax"></span>
        </div>
         
      </div>
      
      
          </div>


    </div>


<!--University courseList section-->

<div class="container container_one py-4 my-4" data-aos="zoom-out-right">
<h4 class="header text-success">Study Areas and Degree Levels <i class="fas fa-user-graduate text-success"></i></h4>
<hr class="text-black" >  
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"></div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    <h5 class=" text-success "><img src="https://img.icons8.com/wired/30/000000/university.png"/> Undergraduate</h5>
    <hr class="text-black" >
  </div>


    <div class="col-lg-4 col-md-4 col-sm-4"><h5 class=" text-success "><img src="https://img.icons8.com/android/30/000000/university.png"/> Postgraduate</h5>
      <hr class="text-black" ></div>
  </div>


  <!--Arts & Humanities-->
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/plasticine/50/000000/art-prices.png"/>Arts & Humanities</div>
  
    <div class="col-lg-4 col-md-4 col-sm-4">

      <span id="artUnderCheck" ></span>   
      
      <hr class="text-black" >
    </div>
  
      <div class="col-lg-4 col-md-4 col-sm-4">

        <span id="artPostCheck" ></span>     
        
        <hr class="text-black" ></div>
    </div>
  <!--Business & Social Sciences -->

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/bubbles/50/000000/man-with-red-tie-target.png"/>Business & Social Sciences </div>
    
      <div class="col-lg-4 col-md-4 col-sm-4">

        <span id="businessUnderCheck" ></span>     

        <hr class="text-black" >
      </div>
    
        <div class="col-lg-4 col-md-4 col-sm-4">
          <span id="businessPostCheck" ></span>    
          <hr class="text-black" >
        
        
        </div>
      </div>

 <!--Language & Cultural -->

 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/bubbles/50/000000/globe.png"/>Language & Cultural </div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    <span id="languageUnderCheck" ></span> 

    <hr class="text-black" >
  </div>

    <div class="col-lg-4 col-md-4 col-sm-4">

      <span id="languagePostCheck" ></span> 

      <hr class="text-black" ></div>
  </div>

 <!--Medicine & Health -->

 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/pastel-glyph/50/000000/first-aid-kit.png"/> Medicine & Health </div>

  <div class="col-lg-4 col-md-4 col-sm-4">

    <span id="medicineUnderCheck" ></span> 

    <hr class="text-black" >
  </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
      
      <span id="medicinePostCheck" ></span> 

      <hr class="text-black" ></div>
  </div>

<!-- Engineering-->

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/officel/50/000000/engineering.png"/>Engineering </div>

  <div class="col-lg-4 col-md-4 col-sm-4">

    <span id="engineeringUnderCheck" ></span> 


    <hr class="text-black" >
  </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
      
      <span id="engineeringPostCheck" ></span> 
      <hr class="text-black" ></div>
  </div>

<!-- Science & Technology-->

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"><img src="https://img.icons8.com/color/50/000000/stargaze.png"/>Science & Technology </div>

  <div class="col-lg-4 col-md-4 col-sm-4">

    <span id="scienceUnderCheck" ></span> 



    <hr class="text-black" >
  </div>

    <div class="col-lg-4 col-md-4 col-sm-4">

      <span id="sciencePostCheck" ></span> 


      <hr class="text-black" ></div>
  </div>








  
    
  </div>
  
</div>


</div>


<!--University size and profile section-->

<div class="row my-3 " data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
  <div class="col-lg-1 col-md-1"></div>
  <div class="col-lg-10 col-md-10 col-sm-10">
<div class="container-fluid container_one py-4 my-4">
<h4 class="header text-success">Size and Profile <i class="fas fa-users text-success"></i></h4>
<hr class="text-black" >
<div class="row">
  <h4 class="text-primary"><i class="fas fa-user-clock "></i> Student Enrollment</h4> <span id="unenroll"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-user-friends"></i> Academic Stuff</h4> <span id="unstuff"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><i class="fas fa-university"></i>  Control Type    </h4> <span id="uncontrol"></span>

  </div>

   
</div>


  </div>

  </div>

<!--University Facilities and Services-->

<div class="row my-3 " data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
  <div class="col-lg-1 col-md-1"></div>
  <div class="col-lg-10 col-md-10 col-sm-10">
<div class="container-fluid container_one py-4 my-4">
<h4 class="header text-success">Facilities and Services <i class="fas fa-hands text-success"></i></h4>
<hr class="text-black" >
<div class="row">
  
  <h4 class="text-primary">Library <i class="fas fa-book-open"></i></h4> <span id="ulib"></span>
</div>
<div class="row my-3">
   
  <h4 class="text-primary">Housing <i class="fas fa-warehouse"></i></h4> <span id="uhouse"></span>

</div>
<div class="row my-3">
  <h4 class="text-primary">  Sport Facilities	<i class="fas fa-volleyball-ball"></i>   </h4> <span id="usport"></span>
 
  </div>
  <div class="row my-3">
    <h4 class="text-primary">     Financial Aids <i class="fas fa-hands-helping"></i>   </h4> <span id="ufinance"></span>

    </div>
   
</div>


  </div>




  </div>



<!--University Social Media section-->

<div class="row my-3 " data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
  <div class="col-lg-1 col-md-1"></div>
  <div class="col-lg-10 col-md-10 col-sm-10">
<div class="container-fluid container_one py-4 my-4">
<h4 class="header text-success">Social Media <i class="fas fa-share-alt text-success"></i></h4>
<hr class="text-black" >
<div class="row">
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/facebook-new.png"/> </h4> <span id="ufacebook"></span>
</div>
<div class="row my-3">
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/twitter.png"/> </h4> <span id="utwitter"></span>
 
</div>
<div class="row my-3">
    
  <h4 class="text-primary"><img src="https://img.icons8.com/cute-clipart/40/000000/linkedin.png"/> </h4> <span id="ulinkedln"></span>
<!-- this is the last one -->
  </div>
  <div class="row my-3">
   
  <h4 class="text-primary"><img src="https://img.icons8.com/plasticine/40/000000/youtube.png"/> </h4> <span id="uyoutube"></span>

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
               <li class="my-2"><a class="text-info" href="collegeListPersonal.php">Build Your school List</a> </li>
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
           <a href="about.php"><li class="m-2">About us</li></a>
            <a href="contact.php"><li class="m-2">Contact us</li></a>
            
              
              
              </ul>
       </div>
       </div>
   </div>
 </footer>

   
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
       

  <script>
    AOS.init();
  </script>
  
  <script src="Assets/JS/collegesInfo.js"></script>

  <script>
       function bootstrapGrowl(){
      $.bootstrapGrowl("College added to list.",{
type:"success",
offset:{from:"top",amount:200},
align:"center",
delay:2000,
allow_dismiss:true,
stackup_spacing: 10,


  });
}
  </script>  

</body>
</html>
