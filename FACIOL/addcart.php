<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");


  }

?>

<!DOCTYPE html>
<html>
<head>
<title> Cart </title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
     <link rel="stylesheet" href="./assets/css/material-font.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
     .t{
      font-family: 'Times New Roman', Times, serif;
  border-collapse: collapse; margin-top: 30px;
  width: 700px; 
     }
.t td, .t th {
  border: 1px solid #ddd; 
  padding: 8px; background-color: coral;
}
.t tr:nth-child(even){background-color: #f2f2f2;}
.t tr:hover {background-color: darkturquoise;}
.t th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
.col{
  margin-left: 100px;
}
#btnEmpty{
  font-family: 'Times New Roman', Times, serif; margin-left: 60px; 
}
</style>   
</head>
<body style="background-image: url(./assets/img/Edit.jpg);">
        <ul id="slide-out" class="sidenav" onclick="myFunction(this)">
                        <li><div class="user-view">
                          <div class="background">
                            <div class="card-panel #e040fb purple accent-2" style="height: 200px"></div>
                          </div>
                          <a href="#user"><img class="circle" src="./assets/img/Edit.jpg "></a>
                          <a href="#name"><span class="white-text name">Kathleen Claire D. Faciol</span></a>
                          <a href="#email"><span class="white-text email">kathleenclairefaciol@gmail.com</span></a>
                        </div></li>
                        <div class="nav-wrapper yellow darken-2">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <a class='dropdown-trigger btn' href='index.php' data-target='dropdown1' id="wq">Login</a>
                        <li><a href="index.php"><i class="material-icons">home</i></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop</a></li>
                            
                </ul>
                      <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse" style="margin-top: 20px"><i class="material-icons">menu</i></a>
                    
                     <div id="container"> 
                     
                             <div id="header"></div>
                  <a href="shop.php" type='btn' name='' class='waves-effect waves-light btn'>
              <i class="material-icons">arrow_back</i></a>
                <i id= "AB" style="margin-left:300px;">Shopping Cart</i>
                <!-- clear all in the cart -->
                <form action="./assets/php/server.php" method="post" style="border:none;">
                <button type="submit" style="float:right;" name="emptycart" class="btn waves-effect waves-white red white-text">Empty Cart</button>
                </form>
                <br>
                <center class="t">
    <table class="col" class="responsive-table" class="highlight">
    <thead>
    <tr>
    <th id="background-color: black">PRODUCT</th>
            <th id="background-color: black">NAME</th>
            <th id="background-color: black">PRICE</th>

    </tr>        
    </thead>
    <tbody>
      <!-- table content -->
         <?php 
         include('config.php');
      $result = mysqli_query($conn,"SELECT * FROM tbl_cart inner join tbl_shop on tbl_shop.shop_id = tbl_cart.shop_id");
      while($row = mysqli_fetch_array($result)){ 
        echo" 
        <tr>     
        <td class='t'> ".$row['img']."</td>
        <td class='t'> ".$row['price']."</td>
        <td class='t'><input type='number' class='form control sample' id='quan".$row['cart_id']."' onkeyup='num(this,".$row['price'].",".$row['cart_id'].")'></td>
        <td class='t'><label style='color:black;' id='tprice".$row['cart_id']."'>".$row['price']."</label></td>
        <td>
        <button data-did= '$row[shop_id]' class='btnDel btn-floating btn-medium waves-effect waves-light red btn modal-trigger' href='#delE'><i class='material-icons'>delete</i></button></td>
        ";     
}
     ?> 
         </tr>
         </tbody>
      </table>  

                        <script src="./assets/js/materialize-css.min.js"></script>
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script>
          function num(e, price,id){
            var sum = parseInt(price) * parseInt(e.value);
            var toprice = "#tprice" + id;
            $(toprice).text(sum);
            if (e.value == '') {
              $(toprice).text(price);
            }
          }
        </script>
                        
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var elems = document.querySelectorAll('.collapsible');
                            var instances = M.Collapsible.init(elems);
                            var elems = document.querySelectorAll('.scrollspy');
                            var instances = M.ScrollSpy.init(elems);
                            var elems = document.querySelectorAll('.sidenav');
                            var instances = M.Sidenav.init(elems);
                        });
                        </script>
                                
  
</body>
</html>