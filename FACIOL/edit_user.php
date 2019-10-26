<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['login'])){
    header('location: index.php');
}
$username = '';
$password = '';
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($conn,"SELECT * FROM admin WHERE user_id = '$id'") ;
    $row = mysqli_fetch_assoc($result);
    $username = $row['user_name'];
    $password = $row['user_password'];
}

if(isset($_POST['edit_user'])){
    $id = $_GET['edit'];
    $username = $_POST['uname'];
    $password = $_POST['pwd'];
    $sql = "UPDATE `admin` SET `user_name`='$username',`user_password`='$password' WHERE `user_id`='$id'";
    mysqli_query($conn,$sql);
    header("location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- ==========link========= -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    
    <!-- ==========css========== -->
    <style>
        body{
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }#p2{
            color:black;
        }#wq{
            float: right; 
            margin-top: 10px;
            background-color: transparent;        
            margin-right: 10px;
        }
        #s1{
            color: red;
        }
        .q1{
            color: while;
        }
    </style>
</head>

<body>
    <!-- ==============navbar================ -->
<header>
        <nav>
            <div class="nav-wrapper yellow darken-2">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <a class='dropdown-trigger btn' href='logout.php' data-target='dropdown1' id="wq">Login</a>
                        <li><a href="index.php"><i class="material-icons">home</i></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        
                      
                </ul>
                
               <!--  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="#!">three</a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                  </ul>
            </div> -->
        </nav>
        <!-- <ul class="sidenav" id="mobile-demo">
            <li><a href="index2.php">Home</a></li>
            <li><a href="about2.php">About</a></li>
            <li><a href="blog2.php">Blog</a></li>
            <li><a href="shop2.php">Shop</a></li>
            <li><a href="login2.php">login</a></li>
        </ul> -->
    </header>
    <!-- ==========title===========-->
    <div class="container">
            
            <center><h1 id="p2">WELCOME</h1><h3 id="p2">Log in System</h3><center>
    </div>
    <br>
    <!-- ===========Input text=============== -->
    <div class="container" style="width: 30%;">
                        
                        <form action="" method="post">
                            <p>
                                <input  type="text" id="user" name="uname" class="q1" required placeholder="USERNAME" value = <?php echo $username; ?>>
                            </p>
                            <p>
                                <input  type="password" id="passwd" name="pwd" class="q1" required placeholder="PASSWORD" value = <?php echo $password; ?>>
                            </p>
                            <p>
                                <button type="submit" name="edit_user" class="waves-effect waves-light btn">Save</button>
                                <button type="submit" name="login" class="waves-effect waves-light btn" formaction="home.php">Back</button>
                            </p>
                        </form>
    </div>
   <br>
    <br><br>
    
    
    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved 2019 © WS101
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
        <!-- ===========scripts============== -->
    <script src="./assets/js/materialize-css.min.js"></script>
    <script src="./assets/js/scrip.js"></script>
    <script >
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
   
    </script>
</body>
</html>

