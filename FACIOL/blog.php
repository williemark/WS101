<?php include 'config.php'; 
include 'insert.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <!-- ============link============= -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">

    <link rel; = "stylesheet" href="./assets/css/style.css">
    <style>
        #f5{
            background-image:url('./assets/img/original.jpg'); 
            background-size : cover;
            background-repeat: no-repeat;
            text-align: center;

        /* }#f7 {
            float:right;
            border:1px solid palevioletred;
            background-color: powderblue;
            padding:10px;
        } */
        }#wq{
        float: right; 
        margin-top: 10px;
        background-color: transparent;        
        margin-right: 10px;
    }
    .qw{
        color: white;
    }
        </style>
</head>
<body id="f5">
<header>
        <nav>
            <div class="nav-wrapper yellow darken-2">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <a class='dropdown-trigger btn' href='index.php' data-target='dropdown1' id="wq">Login</a>
                        <li><a href="index.php"><i class="material-icons">home</i></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop</a></li>
                            
                </ul>
                
               <!-- <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="#!">three</a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                  </ul>
            </div>  --> 
        </nav>
        <!-- <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="login.php">login</a></li>
        </ul> -->
    </header>

    <h1 style="padding:10px;text-align:center;color: white;border: 5px solid palevioletred;font-family:fantasy;">WELCOME TO MY BLOG</h1>
    <hr>
<pre style=" color: yellow;font-size:150%;">
<q>To love is nothing. To be loved is something. But to love and be loved, that's everything.</q> </pre>
         <hr>
                    <pre style=" color: black;font-size:200%;">
                    <q>Love is space and time and measured with the heart.</q></pre>
        <hr>
<pre style=" color: yellow;font-size:150%;">
            <q>Being a family means you are a part of something very wonderful.
                                    It means you will love and be loved for the rest of your life.</q></pre>
        <hr>
<pre style=" color: black;font-size:200%;">
<q>Good friends are like stars, you don't always see them
                                            But you know who they are.</q></pre>
        <hr>
<pre style=" color: yellow;font-size:150%;">
            <q>Life doesn't required that we be the best, only that we try our best.</q></pre>
        <hr>

        <br><br>
    
    <h6 class="center"><b>Comment Here</b></h6>
    <div class="divider"></div>
    
    <br><br>
    <div class="container">
    <form action="" method="post">
    <input type="text" name="input" placeholder="Comments">
    <?php 
    if (!isset($_POST['login'])) {
        echo "<button type='SUBMIT' name='in'>SUBMIT</button>";
    }else {
        echo "<button type='SUBMIT' class name='in'>SUBMIT</button>";
    }
    ?>
    
    </form>
    <br> <textarea name="com" id="com" class="qw" style='width: 950px;
        height: 100px;' cols="30" rows="10" placeholder="comments...">
        <?php 
        $result = mysqli_query($conn,"SELECT * FROM blog");
        while ($row = mysqli_fetch_assoc($result)){ 
            echo "unknown: ".$row['comment']; 
        
        
      }?>
        
        </textarea>
    </div>
    <br><br>
    <footer class="page-footer yellow darken-2">
        <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright Text
            </div>
        </div>
    </footer>
    <script src="./assets/js/materialize-css.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
        </script>
    </body>
    </html>
    
    <?php 
    if (isset($_POST{'in'})) {
        $com = mysqli_real_escape_string($conn,$_POST['input']);
        $query = mysqli_query($conn,"INSERT INTO `tbl_blog`( `content`) VALUES ('$com')");
        
    }
    ?>

</body>
</html>