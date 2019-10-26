<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html >
<head>
    <title>Shop Page</title>
        <!-- ==========link========== -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        #wq{
            float: right; 
            margin-top: 10px;
            /* background-color: transparent;         */
            margin-right: 10px;
        } #me {
                background-image: url("./assets/image/black.jpg");
            }
            </style>
</head>
<body id="me" >
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
    <h1 id="we" style="font-family: Tahoma;">"Welcome to My Shop Page"</h1> 
    <hr>
    <h2 id ="we"style= "font-family:Times New Roman; font-size: 15mm;">'BIGBIKE GARAGE SALE'</h2>


<!-- <pre>
                <img src="./assets/image/cbr1000rr.png" width = "350" height="300";" >                                          <img src="./assets/image/kisspng-yamaha-motor-company-yamaha-yzf-r15-car-motorcycle-yamaha-5ac93d37b9e684.8751010515231378477615 (1).png" width = "350" height="300";" >

                <p id ="we1" >
Name :               HONDA CBR 1000                                                                                                            Name :               YAMAHA YZF-R3 1000
<br>Price :     <del>Php.1,356,000.00</del>  Php. 1,300,000.00                                                                             Price :     <del>Php.1,285,000.00</del>  Php.1,185,000.00
                

                                               <button id="buttons"><b>BUY</b></button>                                                                                                                                                            <button  id="buttons"><b>BUY</b></button>
                 
<hr>                
                <img src="./assets/image/GSX-R1000-Thumbnail.png" width = "350" height="300";" >                                     <img src="./assets/image/h2r.png" width = "400" height="300";" >

                <p id = "we1"  >                
Name :               SUZUKI GSX-R 1000                                                                                                         Name :          KAWASAKI NINJA H2R 1000                                    
<br>Price :     <del>Php.995,000.00</del>  Php.955,000.00                                                                                  Price :     <del>Php.1,445,000.00</del>  Php.1,400,000.00                                
</p>
                         <button  id="buttons"><b>BUY</b></button>                                                                                       <button  id="buttons"><b>BUY</b></button>
</pre> -->

<div class="container">

<table class="responsive-table highlight">
    <?php $query = mysqli_query($conn,"SELECT `Product_name`, `img`, `Quantity`, `Price` FROM `tbl_shop`") ;
        echo '<tr><td>';
        while ($row = mysqli_fetch_assoc($query)) {
            echo "
            <div class='container'>
            <div class='row'>
                <div class='col s10 m6'>
                    <div class='card '>
                        <div class='card-image '>
                            <img src=".$row['img']." class='tiny'>
                            <span class='card-title'></span>
                        </div>
                        <div class='card-content'>
                        <p> <br><br>Product Name: ".$row['Product_name']."<br>
                        <br> Product Price: Php.".$row['Price']."<br>
                        <br>Quantity: ".$row['Quantity']."</p>
                    </div>
                <div class='card-action'>
                 <button><i class='medium blue material-icons'>shopping_cart</i> </button>  
            </div>
        </div>
        </div>
    </div></div>
           ";
        }
        echo '</td></tr>';
        ?>
    </table>

</div>

<br><br><br>
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