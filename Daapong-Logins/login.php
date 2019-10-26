<?php 
include 'config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
    <style>
        body{
            background: url('./assets/img/ml5.jpg') no-repeat center fixed; 
             background-size: cover;
            
        }
        .login{
        font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        </style>
    
</head>
<body class=  "grey lighten-1">
    <center><H1 class= "login" style="color: black;">LOGIN</H1></center>
  
 
    <div class="row">
    <form action= "" method= "post">
     
        <div class="input-field col s12">
          <input id="" type="text" name="uname" placeholder="Username">
        </div>
      
        <div class="input-field col s12"> 
          <input id="" type="password" name="pwd" placeholder="Password">
          <button type="submit" class="btn waves-effect waves-light " name="login">Login</button>
        </div>
     
    
      
    </form>
  </div>
    
    <?php
                            if(isset($_POST['login'])){
                                $sname = $_POST['uname'];
                                $passwd = $_POST['pwd']; 
                                $sql = "SELECT * FROM tbl_login WHERE username ='$sname' AND passwd = '$passwd'";   
                                $query = mysqli_query($conn,$sql);
                                if ($query->num_rows>0) {
                                 
                                    session_start();
                                    $_SESSION['uname']=$sname;
                                    $_SESSION['login']=true;
                                    header("location: welcome.php");
                                }else {
                                    // echo "<h5 id='s1'>Invalid pasword/user</h5>";
                                 
                                    
                                }
                            }
                        ?>
    <script src="./assets/js/script.js"></script>
</body>
</html>
