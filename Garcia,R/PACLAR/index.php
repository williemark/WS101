<!DOCTYPE html>
<html >
<head>
        <title>Home Page</title>
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
   <h1 id="me2" >Welcome to my <abbr title = "Hypertext Mark-up Language" >HTML</abbr>  Home Page </h1>


   <pre>
   <h1 id="me3" > <b>"Failure is the oppurtunity to begin <br> again more intelligiently"</b></h1>
   </pre> 

   <br><br><br><br><br>
   <footer class="page-footer">            
    <div class="footer-copyright">
        <div class="container">
            All Rights Reserved To Paclar as of 2019 © WS101
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