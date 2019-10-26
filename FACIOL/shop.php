<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <!-- ============link============= -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">

    <link rel; = "stylesheet" href="./assets/css/style.css">
    <!-- ============css============== -->
    <style>
    body{
        background-image: url("./assets/img/ky.webp");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }#p3{
        color: maroon;
    }#wq{
        float: right; 
        margin-top: 10px;
        background-color: transparent;        
        margin-right: 10px;
    }
    </style>
</head>
<body>
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

    <table class="container" class="responsive-table" class="highlight">
        <tr>
            <th id="background-color: black">PRODUCT</th>
            <th id="background-color: black">NAME</th>
            <th id="background-color: black">PRICE</th>
        </tr>
        <tbody>
            <tr>
                <td><img src="./assets/img/lipstick.jpg" alt="" width="200" height="200"></td>
                <td id="p3"> <b> " LIPSTICK " </td>
                <td id="p3">  <b>  Php 230.00 </td>
            </tr>
            <tr>
                <td><img src="./assets/img/mini palette.jpg" alt="" width="200" height="200"></td>
                <td id="p3"> <b> " MINI PALETTE "  </td>
                <td id="p3"> <b>  Php 360.00 </td>
            </tr>
            <tr>
                <td><img src="./assets/img/liquid lipstick.jpg" alt="" width="200" height="200"></td>
                <td id="p3"> <b> " LIQUID LIPSTICK "  </td>
                <td id="p3">  <b>  Php 350.00</td>
            </tr>
            <tr>
                <td><img src="./assets/img/glitter palette.jpg" alt="" width="200" height="200"></td>
                <td id="p3"> <b> " GLITTER PALETTE "  </td>
                <td id="p3"> <b>  Php 300.00 </td>
            </tr>
            <tr>
                <td><img src="./assets/img/white.jpg" alt="" width="200" height="200"></td>
                <td id="p3">  <b> " WHITE KIT "  </td>
                <td id="p3"> <b>  Php 230.00 </td>
            </tr>
            <tr>
                <td><img src="./assets/img/black.jpg" alt="" width="200" height="200"></td>
                <td id="p3"> <b> " BLACK KIT "  </td>
                <td id="p3"> <b>  Php 230.00 </td>
            </tr>
            <tr>
                <td><img src="./assets/img/kylie cosmetics.jpg" alt="" width="200" height="200"></td>
                <td id="p3"> <b> " KYLIE MAKE-UP "  </td>
                <td id="p3"> <b>  Php 400.00 </td>
            </tr>
            <tr>
                <td><img src="./assets/img/lip gloss.jpg" alt="" width="200" height="200"></td>
                <td id="p3"> <b> " LIPGLOSS "  </td>
                <td id="p3"><b>   Php 250.00 </td>
            </tr>
        </tbody>
    </table>
    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved 2019 � WS101
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