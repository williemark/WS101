<?php 
include 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<!--Import Google Icon Font-->
<!--Import materialize.css-->
<!--Let browser know website is optimized for mobile-->
<script src="asset\javascript\app.js"></script>
<link rel="stylesheet" href="./asset/css/materializecss-icons.css">
<link rel="stylesheet" href="./asset/css/materializecss.min.css">
<link rel="stylesheet" href="./asset/css/style.css">
             
<style>
        
#b{
    background-color: #bbdefb;
    background-size: cover;
    background-repeat: no-repeat; 

}
#Login{
    float: right; 
    margin-top: 10px;
    margin-right: 10px;
    border-radius: 100%;
    background-color: #00e676;
}
</style>
</head>
<body id ="b">
<header>
    <nav>
        <div class="nav-wrapper #2196f3 blue">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="Home.php"><i class="material-icons">home</i></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="shop.php">Shop</a></li>
            </ul>
             <a class='dropdown-trigger btn' href='login.php' data-target='dropdown1' id ="Login">Login</a>
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
        <li><a href="Home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="Blog.php">Blog</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="login.php">login</a></li>
    </ul>
</header>
    <div class="container #bbdefb blue lighten-4">
        <div class="container ">
            <div class="container ">
                <div class="container ">
                    <div class="container  ">
                        
                    <form action="" method="post">
                            <p>
                                <label>Username:</label>
                                <input  type="text" id="sname" name="uname" class="w1">
                            </p>
                            <p>
                                <label>Password:</label>
                                <input  type="password" id="passwd" name="pwd" class="w1">
                            </p>
                            <p>
                                <button type="submit" name="login" class="waves-effect waves-light btn"> Log In</button>
                            </p>
                    </form>
                        <?php
                         if(isset($_POST['login'])){
                            $sname = $_POST['uname'];
                            $passwd = $_POST['pwd'];
                            $query = mysqli_query($conn,"SELECT username, passwd FROM `tbl_login` WHERE username ='$sname' AND passwd = '$passwd'");
                            // print_r($query);
                            // $result = mysqli_fetch_assoc($query);
                            if ($query->num_rows>0) {
                                // echo "<div id='p2'> Welcome, ".$uname."!</div>";
                                session_start();
                                $_SESSION['uname']=$sname;
                                $_SESSION['login']=true;
                                header("location:welcome.php");
                            }else {
                                // echo "<script> M.toast({html: 'I am a toast!'}) </script>";
                                echo "<h5 id='s1'>Invalid password/user</h5>";
                            }}
                       
                        ?>
                        
                    </div>
                </div>    
            </div>
        </div>
    </div>   
    <br><br><br><br><br>
    <footer class="page-footer #2196f3 blue">            
    <div class="footer-copyright">
         <div class="container">
             All Rights Reserved to limar as of 2019 © WS101
             <?php
                    if ($conn->connect_error) {
                        die(" Not connected to". $conn->connect_error);
                    }else {
                        echo " Connected to ". $db ;
                    }
                ?>
         </div>
    </div>
    </footer>
         <script src="./asset/js/materialize-css.min.js"></script>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.sidenav');
     var instances = M.Sidenav.init(elems);
      });
    </script> 
</body>
</html>