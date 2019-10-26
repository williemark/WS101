<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
include 'config.php';

?>
<!DOCTYPE html>
<html >
<head>
    <title>Register</title>
    <!-- ==========link========== -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        #me {
            background-image: url("./assets/image/h2r.png");
        }#wq{
            float: right; 
            margin-top: 10px;
            /* background-color: transparent;         */
            margin-right: 10px;
        }
        </style>

</head>
<body id = "you" >
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
                    <a class='dropdown-trigger btn' href='logout.php' data-target='dropdown1' id="wq">Log out</a>
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
        <center><h1>Register</h1></center>
        <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        
                        <form action="" method="post">
                            <p>
                                <label>Username:</label>
                                <input  type="text" id="user" name="uname" class="q1">
                            </p>
                            <p>
                                <label>Password:</label>
                                <input  type="password" id="passwd" name="pwd" class="q1">
                            </p>
                            <p>
                            <label>Confirm Password:</label>
                                 <input type="password" name="conpasswd" id="conpasswd">
                            </p>
                            <p>
                                <label>First Name:</label>
                                <input  type="text" id="fname" name="fname" class="q1">
                            </p>
                            <p>
                                <label>Middle Name:</label>
                                <input  type="text" id="mname" name="mname" class="q1">
                            </p>
                            <p>
                                <label>Last Name:</label>
                                <input  type="text" id="lname" name="lname" class="q1">
                            </p>
                            <p>
                                <label>Birthday: YYYY-MM-DD</label>
                                <input placehoder="YYYY-MM-DD" type="text" id="bday" name="bday" class="q1">
                            </p>
                            <p>
                                <button type="submit" name="insert" class="waves-effect waves-light btn">Register</button>
                                <a class="waves-effect waves-light btn" href="welcome.php"><i class="material-icons">arrow_back</i></a>
                            </p>
                        </form>
                        
                            
                        <?php 
                        if (isset($_POST['insert'])) {

                            $uname = mysqli_real_escape_string($conn,$_POST['uname']);
                            $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
                            $conpasswd = mysqli_real_escape_string($conn,$_POST['conpasswd']);
                            
                            $fname = mysqli_real_escape_string($conn,$_POST['fname']);
                            $mname = mysqli_real_escape_string($conn,$_POST['mname']);
                            $lname = mysqli_real_escape_string($conn,$_POST['lname']);
                            $bday = mysqli_real_escape_string($conn,$_POST['bday']);
                            if ($pwd != $conpasswd){
                                echo 'The two passwords do not match';
                            }else{
                                    $query = mysqli_query($conn,"INSERT INTO tbl_user (username,passwd) VALUE ('$uname','$pwd')");
                                    $quer = mysqli_query($conn,"INSERT INTO tbl_useraccount (firstname,middlename,lastname,bday) VALUE ('$fname','$mname','$lname','$bday')");
                                    if (!$query) {
                                        echo "<p>failed registretion</p>";
                                    }elseif (!$quer){
                                        echo "<p>failed registretion</p>";
                                    
                                    }else {
                                       
                                        echo "<p>Successfully registered</p>";
                                        
                                    }
                                }
                            }        
   
                        ?> 
                         </div>
                        </div>    
                    </div>
                </div>
            </div>
           <br>
            <br><br><br><br>
            <br>
            <br>
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