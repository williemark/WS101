<?php 

include 'config.php';
include 'update.php';
include 'delete.php';
?>
<!DOCTYPE html>
<html>
<head>
     <title>About Page</title>
      <!-- ==========link========== -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        #wq{
            float: right; 
            margin-top: 10px;
            /* background-color: transparent;         */
            margin-right: 10px;
        }
    </style>
</head>
<body id="you">
   <!-- =============start of navbar================ -->
   <header>
    <nav>
        <div class="nav-wrapper yellow darken-2">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="index.php"><i class="material-icons">home</i></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="shop.php">Shop</a></li>
                                
                  
            </ul>
            <a class='dropdown-trigger btn' href='login.php' data-target='dropdown1' id="wq">Login</a>
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">three</a></li>
                <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
              </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="shop.php">Shop</a></li>
            
        </ul>
</header>
<!-- =========end of navbar========= -->
        <h1 id="you1" style = "font-size:9mm;"><b>Personal Information</b></h1>
       
        <center> <img src="./assets/image/me.png" width = "250" height="200"; ></center>
            <h2 id="you2"><b>Geyson B. Paclar</b></h2>
<hr>
        <p id="you3"><mark><b>Course :</b></mark>BSIT-III 
    <br ><mark><b>Contact # :</b></mark> 09161722456
    <br><mark><b>Email address :</b></mark>  <a href="geysonpaclar@gmail.com"> geysonpaclar@gmail.com
 <hr>
            <p id="you4" style= text-align:left;> <mark><b>Birthdate :</b></mark> 08-06-1998
            <br> <mark><b>Age :</b></mark> 21
            <br> <mark><b>Address :</b></mark> P-5 San Jose Medina Mis. Or.
            <br> <mark><b>Birthplace :</b></mark> Gingoog City Medina Mis. Or.
            <br> <mark><b>Citizenship :</b></mark> Filipino
            <br> <mark><b>Religion :</b></mark> Roman Catholic 
            <br> <mark><b>Civil Status :</b></mark> Single
            <br> <mark><b>Languages :</b></mark> Tagalog, Cebuano and English
            <br> <mark><b>Father's Name :</b></mark> Nickson Paclar
            <br> <mark><b>Occupation :</b></mark> Welder
            <br> <mark><b>Mother's Name :</b></mark> Glenn Paclar
            <br> <mark><b>Occupation :</b></mark> HouseKeeper 
            <br> <mark><b>Hobbies :</b></mark> 
        <ul id="you4">            
                         <li>Riding Motorcycle</li>
                         <li>Drag Race</li>
                         <li>Listening Music</li>
        </ul>
    </p>
  


    
    <footer class="page-footer">            
     <div class="footer-copyright">
         <div class="container">
             All Rights Reserved To Paclar as of 2019 © WS101
         </div>
     </div>
 </footer>
 <script src="./assets/javascript/materialize-css.min.js"></script>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.sidenav');
     var instances = M.Sidenav.init(elems);
 });
 </script>
</body>
</html>