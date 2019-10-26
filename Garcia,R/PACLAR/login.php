<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Log_in Page</title>
    <script src="assets\javascript\script.js"></script>
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
           
            #me {
                background-image: url("./assets/image/maxresdefault.jpg");
            }.w1{
                color: white;
            }  #s1{
            color: red;
        }
            </style>
</head>
<body id = "me">
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
    <br><br><br><br><br><br><br><br>
   <!-- ===========Input text=============== -->
   <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        
                        <form action="" method="post">
                            <p>
                                <label>Username:</label>
                                <input  type="text" id="user" name="uname" class="w1">
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
                            $uname = $conpasswd = mysqli_real_escape_string($conn,$_POST['uname']);
                            $passwd = $conpasswd = mysqli_real_escape_string($conn,$_POST['pwd']);
                            $query = mysqli_query($conn,"SELECT * FROM tbl_user WHERE username ='$uname' AND passwd = '$passwd'");
                            // print_r($query);
                            // $result = mysqli_fetch_assoc($query);
                            if ($query->num_rows>0) {
                                $row = $query->fetch_assoc();
                                // echo "<div id='p2'> Welcome, ".$uname."!</div>";
                                session_start();
                                $_SESSION['uname']=$uname;
                                $_SESSION['id']=$row['userID'];
                                $_SESSION['login']=true;
                                header("location: welcome.php");
                            }else {
                                // echo "<script> M.toast({html: 'I am a toast!'}) </script>";
                                echo "<h5 id='s1'>Invalid Username / Password</h5>";
                            }
                        }
                       
                        ?>
                        
                    </div>
                </div>    
            </div>
        </div>
    </div>   
    <br><br><br><br><br>
<footer class="page-footer">            
     <div class="footer-copyright">
         <div class="container">
             All Rights Reserved to Paclar as of 2019 © WS101
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
         <script src="./assets/javascript/materialize-css.min.js"></script>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.sidenav');
     var instances = M.Sidenav.init(elems);
 });
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });
 </script>
</body>
</html>