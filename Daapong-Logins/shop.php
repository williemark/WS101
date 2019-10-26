<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
    body{
        background-color:Tomato;
        
    }
    </style>
</head>
<body class=  "grey lighten-1">
<nav>
    <div class="nav-wrapper grey darken-1">
      <a href="#" class="material-icons">home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
         
        <li><a href="blog.php">Blog</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="shop.php">shop</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
  </nav>
    

    <div class="container">
        <h1 id="td" style="color:black;">WELCOME TO MY SHOP SHOP</h1>
    <table>
    <?php $result = mysqli_query($conn,"SELECT * FROM tbl_shop") ;
    while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td><img src=".$row['Img_url']." width='100' hight='100'></td>". "<td>".$row['Name']."</td>". "<td>".$row['Price']."</td></tr>";
    }
    ?>
    </table>
    </div>
</body>
</html>