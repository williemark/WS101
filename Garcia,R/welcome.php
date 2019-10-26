<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
include 'db_config.php';
include 'register.php';
?>
<!DOCTYPE html>
<html >
<head>
    <title>Blog Page</title>
    <!--Import Google Icon Font-->
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="./asset/css/materializecss-icons.css">
    <link rel="stylesheet" href="./asset/css/materializecss.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <style>
        #me {
            background-image: url("./asset/img/22.jpg");
        }#w{
            float: left; 
            margin-top: 10px;
            margin-right: 10px;
        }
        </style>

</head>
<body id = "you" >
    <!-- =============start of navbar================ -->
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
                <a class='dropdown-trigger btn' href='logout.php' data-target='dropdown1' id="w">Log out</a>
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
 <center><h1 class="q1">Welcome <?php echo $_SESSION['uname']; ?></h1>
   <br><br><br><br><br><br><br>
      <a class="waves-effect waves-light btn modal-trigger" href='#register'>Register</a>  
      <a href="user.php" class="waves-effect waves-light btn">user's</a>  
 </center>
    <br><br><br>
    <br><br><br><br>
    <br>
    <div id="register" class="modal">
        <form action="" method="post">
            <div class="modal-content">
                <center><h4>Register</h4></center>
                <div class="container">
                    <input type="text" name="user" placeholder="username">
                    <input type="text" name="pass" placeholder="password">
                </div>
            </div>
            <div class="modal-footer">
                <button href="#!" type="submit" name="reg" class="modal-close waves-effect waves-green btn-flat">Register</button>
            </div>
        </form>
    </div>
    <br>
<footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved  of 2019 © WS101
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
        var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    });
    </script>
</body>
</html>