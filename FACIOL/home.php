<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['login'])){
    header('location: index.php');
}

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $result = mysqli_query($conn,"DELETE FROM admin WHERE user_id = '$id'") ;
     header('location: home.php');
}

if(isset($_POST['add_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn,"INSERT INTO `admin`(`user_name`, `user_password`) VALUES ('$username','$password')") ;
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
            color: white;
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
                    
                        <li><a href="index.php"><i class="material-icons">home</i></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        
                      
                </ul>
                <a class='dropdown-trigger btn' id="wq" href='index.php' data-target='dropdown1' id="wq">Logout</a>
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
    <!-- ===========Input text=============== -->
    

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <form method="post"> 
    <div class="modal-content">
      <h4>Fillup User Information</h4>
       <input  type="text" id="user" name="username" required placeholder="USERNAME">
       <input  type="password" id="user" name="password" required placeholder="PASSWORD">
    </div>
    <div class="modal-footer">
      <button class="btn" name="add_user">Submit</button>
      <a href="#!" class="modal-close btn red">Close</a>

    </div>
     </form>
  </div>
    <div class="container">

                        
                       <center><h1 class="q1">User's Table</h1>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add User</a>
                        <table class="container" class="responsive-table" class="highlight">
                        <th class='q1'>No.</th>
                        <th class='q1'>user name</th>
                        <th class='q1'>password</th>
                        <th class='q1'>Actions</th>
                        
                        <?php $result = mysqli_query($conn,"SELECT * FROM `admin`") ;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td class='q1'>".$row['user_id']."</td>"."<td class='q1'>".$row['user_name']."</td>"."<td class='q1'>".$row['user_password']."</td>"."<td>
                            <a href='edit_user.php?edit=$row[user_id]' type='btn' name='edit' class='waves-effect waves-light btn blue'>Edit</a>&nbsp;&nbsp;"."<a href='home.php?del=$row[user_id]' type='btn' name='delete' class='waves-effect waves-light btn red'>Delete</a></td>";
                        }
                        ?>


                    </table></center>
                        
    </div>
   <br>
    <br><br>
    
  
    <footer class=" page-footer yellow darken-2">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved 2019 © WS101
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
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, open());
  });
    </script>
</body>
</html>

