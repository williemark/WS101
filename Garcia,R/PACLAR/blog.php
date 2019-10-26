<?php include 'config.php';
include 'comment.php'; ?>

<!DOCTYPE html>
<html >
<head>
    <title>Blog Page</title>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="login.html">login</a></li>
            </ul>
            <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
            <link rel="stylesheet" href="./assets/css/materializecss.min.css">
             <link rel="stylesheet" href="./assets/css/style.css">
            
    <style>
        body{
            background-color: Tomato;
            
        }
        #r1{
          color: tomato;
        }
        </style>
        </header>
        <!-- =========end of navbar========= -->
    <h1 id="you1" style ="font-size:10mm;">Welcome to my Blog Page</h1>
<pre id ="last">
    <!-- <p > -->
<div class="container">
            Hi, My Name is Geyson Basadre Paclar, 21 years of age. I was born on August 6,1998 and My birhtplace was
            Gingoog City, Misamis Oriental. I lived in P-5 San Jose Medina, Misamis Oriental. Last 2014 to 2016 I had studied at
            <abbr title="Mindanao University of Science and Technology">MUST</abbr> taking up <abbr title=" Bachelor of Science in Electro-Mecanical Technology">BSEMT</abbr>. I had to stop studying at that school because of family problem. But I said to myself that I 
            should pursue my dreams and I should finish my study. So I decided, to transfer at a nearest school. I was currently 
            studying at <abbr title = "Gingoog City Colleges">GCC</abbr>  taking up <abbr title ="Bachelor of Science in Information Technology">BSIT</abbr>. I decided to choose this course because for me it is related to my past course, it has 
            a programing. Someday I want to be a programer or a web developer.
                
                 My hobbies are riding a motorcycle, drag race and listening music. Someday I want to travel around the 
            Philippines and travel around the World with my special someone and my family. 
                    
             </div>
                                                                                                                                --End of My Blog
                                                                                                                                     Thank You :)
    </p>
</pre>

<div class="container">
<form action="" method="post">
<input type="text" name="name" placeholder="input fullname">
<input type="text" name="content" placeholder="comment Here">
<button name="in" class="waves-effect waves-light btn">Submit</button>
</form>
</div>
<br><br>
<div class='container'>
        <?php 

            $result = mysqli_query($conn,"SELECT * FROM tbl_blog");
            while ($row = mysqli_fetch_assoc($result)){
                
                echo $row['cname'].": ". $row['comment']."<br><hr>";
                
            }
            
            ?>
    </div>

<br><br><br><br>

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