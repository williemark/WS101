<!DOCTYPE html>
<html lang="en">
<head>
        <title>about</title>
    <!--Import Google Icon Font-->
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="./asset/css/materializecss-icons.css">
    <link rel="stylesheet" href="./asset/css/materializecss.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
#v{
    background-color: #e6ffff;
    background: cover;
        
}#menu ul{
           
    text-align: left;
    display: inline-block;
    font-size: 20px;
    cursor:pointer;
    font-family: serif;
}#text{
    background-color: #e6ffff;
    align-self: auto;
    text-align: center;
        
         
}#text ul{
    text-shadow: #cc0000;
    text-align: left;
    font-size: 20px;
    font-family:sans-serif;
}#Login{
    float: right; 
    margin-top: 10px;
    margin-right: 10px;
    border-radius: 100%;
    background-color: #00e676;
}
    </style>
</head>
<body>
    <div id="v">
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
    <div class="cotainer">
        <div id="text">
            <div id="text ul">
                
                <center> <img src="./asset/img/wapp3.jpg" width="200" height="200" style = "float:center"></center>
                <h4 style="background-color:#2962ff;text-align:center; ">Personal Information</h4>
                
                <ul>    
                    <li>
                            <a style = "font-family: Times New Roman, Times, serif;color: black "> 
                            <br> Lastname: Garcia
                            <br> Firsname: Ramil 
                            <br> Middlename: Balaba
                            <br> Gender: Male
                            <br> Age: 24
                            <br> Marital Status: Single
                            <br> Address: P-8 Cabug,Midena Misamis,Oriental
                        </a> 

                    </li>
                </ul>
                <h3 style="background-color: #2962ff;text-align:center; ">Contact Details</h3>
                
                <ul>
                    <li>
                            <br>Cellphone # : 09754940169
                            <br>Email address :  <a href="ramilgarcia@gmail.com">ramilgarcia@gmail.com </a>
                    </li>
                </ul>
                <h4 style="background-color: #2962ff;text-align:center;">Educational Background</h4>
                <ul>
                    <li>
                            <br>Primary School:
                                       <br>Gov. Pelaez Elementary School-2001/2007 S.Y
                            <br>Secondary School:
                                       <br>Midena National Comprehensive High School-2007/2011 S.Y
                            <br>Tertiary:
                                       <br>Gingoog City College-2017/2021 S.Y
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="page-footer #80d8ff light-blue accent-1">
            <div class="footer-copyright">
                <div class="container ">
                All Rights Reserved 2019 © WS101
            </div>
        </footer>
    <script src="./asset/js/materialize-css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
</body>
</html>