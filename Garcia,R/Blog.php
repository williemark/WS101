<?php 
include 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BLOG</title>
  <!--Import Google Icon Font-->
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <link href="./asset/css/reset.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./asset/css/materializecss.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./asset/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./asset/css/materializecss-icons.css">
    <script src=".asset/js/jquery.min.js"></script>
<script>
        function commentSubmit(){
            if(form1.name.value == '' && form1.comments.value == ''){ 
                alert('Enter your message !');
            return;
            }
            var name = form1.name.value;
            var comments = form1.comments.value;
            var xmlhttp = new XMLHttpRequest(); 
    
            xmlhttp.onreadystatechange = function(){ 
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('comment_logs').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET', 'insert.php?name='+name+'&tbl_comments='+comments, true); 
        xmlhttp.send();
    }

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
    });
</script>
<style>
#n{
    background-color:  blue lighten-1;
    background-size: cover;
    background-repeat: no-repeat;
    font-size: 5mm;
    font-family: sans-serif;
    text-align: left;
    float:left top;
        }#menu ul{
            list-style-type: none;
            margin:1%;
            padding:2%;
        }#l li{
            display: inline-block;
            font-size: 20px;
            margin:1%;
            padding:2%;     
}
#ex1{
  font-size: 20px;
  font-style: oblique;
  text-align:left center;
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
  border-radius: 16px;
}
#Login{
    float: right; 
    margin-top: 10px;
    margin-right: 10px;
    border-radius: 100%;
    background-color: #00e676;
}
</style>
</head>
<body id="n">
<header>
    <nav>
        <div class="nav-wrapper light-blue accent-1">
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
       <div class="container">
            <div id="menu">
                <div id="ex1"> 
                  <center> 
                  
                   <b>LIFE DOESN'T 
                     REQUIRE THAT WE
                       BE THE BEST, ONLY THAT
                       WE TRY OUR BEST.</b>
                                       -H.Jackson Brown Jr.<br>
                            <i>The most beautiful
                         things in the world cannot
                             be seen or touched.</i>
                             <b>They must be felt
                                 with the heart.</b>
                                            -HELEN KELLER<br>
                                      <b>Time is like a river.</b>
                         <i> You cannot touch the same water
                        twice, because the flow that has
                        passed will never passed again.
                        Enjoy every moment in life.</i>
                    </center> 
                </div>
            </div> 
      </div>
    <div style="background-color:teal;width:50%;padding:10px;margin:20px;float:left;">
       <div class="page_content">
    	  Comments Goes Here ...
        </div>	
        <div id="comment_input">
            <form name="form1">
        	    <span style="color:black;"><input type="text" name="name" placeholder="Name..."/></span><br><br>
                <textarea name="comments"  style="color:black;" placeholder="Leave Comments Here..." style="width:610px; height:100px;"></textarea><br><br>
                <a href="#" onClick="commentSubmit()" class="button">Comment</a><br>
            </form>
        </div>
        <div id="comment_logs">
    	    Loading comments at the moment...
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