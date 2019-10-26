<!DOCTYPE html>
<html lang="en">
<head>
     <!--Import Google Icon Font-->
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="./asset/css/materializecss-icons.css">
    <link rel="stylesheet" href="./asset/css/materializecss.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <style>
#example1 {
    background: url(./asset/img/wapp.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}#h{
    text-shadow: 2px 2px #ccffff;
    font-size: 15mm;
    font-family: Georgia, 'Times New Roman', Times, serif;
}#w{
    text-shadow:2px 2px#00ffbf;
    font-size: 5mm;
    font-family: sans-serif;
    text-align: center;
    float:right top;
}#menu ul{
    background-color:#b3b3b3; 
    list-style-type: none;
    text-align: center;
    margin: 0;
    padding: 0;
}#l li{
     display: inline-block;
     font-size: 20px;
     padding: 20px;
     margin:  2px;
     cursor:pointer;
     font-family: serif;
} #Login{
    float: right; 
    margin-top: 10px;
    margin-right: 10px;
    border-radius: 100%;
    background-color: #00e676;
}
        </style>
       
</head>
    
<body id="example1">
        <header>
                
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
            <a class='dropdown-trigger btn' href='login.php' data-target='dropdown1' id="Login">Login</a>
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
                      <center><h1 id="h"> WELCOME TO MY PAGE</h1></center>
        </header>
        <main>
    
        </main>
        <footer class="page-footer #80d8ff light-blue accent-1">
            <div class="footer-copyright">
                <div class="container ">
                All Rights Reserved 2019 © WS101
            </div>
        </footer>
    </header>   
        
    </div>
    <script src="./asset/js/materialize-css.min.js"></script>
    <script src="./asset/js/dropdown.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
</body>
</html>