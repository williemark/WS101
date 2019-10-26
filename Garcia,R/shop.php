<?php 
include 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Achievement</title>
    <!--Import Google Icon Font-->
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="./asset/css/materializecss-icons.css">
    <link rel="stylesheet" href="./asset/css/materializecss.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        #a{ 
           background-color:#e6ffff;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
          
         }#menu ul{
            display:inline-flex;
            
         }#l li{
            list-style: none;
            cursor:pointer;
            font-size: 5mm;
            font-family: serif;
         }#a{
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
            float: left top;
         }div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  
}
.m{
  font-size: 64px;
  text-align: center;
  top: 20%;
  left;: 10%;
  transform: translate(-10%, -20%);
  position: center, absolute;
  background: linear-gradient(to left, #bf00ff ,#00ffff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}.button {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
  box-shadow: 5px 10px #888888;
}.button1 {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
  position:top, left;
  box-shadow: 5px 10px #888888;
}
#Login{
    float: right; 
    margin-top: 10px;
    margin-right: 10px;
    border-radius: 100%;
    background-color: #00e676;
}
    </style>
    <title>Document</title>
</head>
<body id="a">

  <header>
  <nav>
        <div class="nav-wrapper #3f51b5 indigo">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="Home.php"><i class="material-icons">home</i></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="shop.php">Shop</a></li>
                                
                  
            </ul>
            <a class=' dropdown-trigger btn top,right' href='login.php' data-target='dropdown1' id="Login">Login</a>
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
        <div class="container">
                <h3 class="m">My Car Shop</h3>
        </div>
  
     
      <div class="container">

<table class="responsive-table highlight">
<?php $query = mysqli_query($conn,"SELECT * FROM tbl_shop");
        echo '<tr><td>';
        while ($row = mysqli_fetch_assoc($query)) {
            echo "
            <div class='container blue lighten-4 '>
            <div class='row'>
                <div class='col s10 m6  indigo'>
                    <div class='card  blue lighten-4'>
                        <div class='card-image  '>
                            <img src=".$row['image']." class='tiny'>
                            <span class='card-title'></span>
                        </div>
                        <div class='card-content '>
                        <p> <br><br>Product Name: ".$row['pro_name']."<br><br> Product Price: Php.".$row['price']."<br><br>Quantity: ".$row['quantity']." </p>
                    </div>
                <div class='card-action  blue lighten-4'>
                 <button class='button'><i class=' orange material-icons'>add_shopping_cartt</i>add to cart</button> 
                 <button class='button1'><i class=' yellow material-icons'>attach_money</i> buy me!! </button>   
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
      <footer class="page-footer #80d8ff light-blue accent-1">
          <div class="footer-copyright">
              <div class="container ">
              All Rights Reserved 2019 © WS101
          </div>
      </footer>
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