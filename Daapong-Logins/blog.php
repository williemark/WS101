<?PHP
include 'config.php';
// require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Blog</title>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src=".assets/js/jquery.min.js"></script>
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
        xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); 
        xmlhttp.send();
    }

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
    });
    </script>
    <style>
        body{
            background-color: Tomato;
            
        }
        #r1{
          color: tomato;
        }
        </style>
    
</head>
<body class=  "grey lighten-1">
<nav>
    <div class="nav-wrapper  grey darken-1">
      <a href="#" class="material-icons">home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      
      <li><a href="blog.php">Blog</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
  </nav>
        <center><h1 id="r1">WELCOME TO MY BLOG</h1></center>
        <center><img src="./assets/img/wildapz.jpg" alt="my pic." width="200" height="200" title="my pic."></center>
            <h3 id="g">
    <center><pre style="font-size: 45%; text-align">
              
    Welcome to My Blog everyone, I have one thing to say to you guys. You know what?
    making a webpage is very fun to do especially if your the one  who designing it.
    Because if you are making a webpage you can express your feelings. 
    Have a nice day.   
    
    </pre></center>
            </h3>

         <?php
    $find_comments = mysqli_query($conn,"SELECT * FROM comments");
    while($row=mysqli_fetch_assoc($find_comments)){

        $comment_name = $row['name'];
        $comment = $row['comments'];

        echo "$comment_name - $comment<p>";
    }
    if(isset($_GET['error'])){
        echo "<p> erorrrrr!!! 100 character LIMIT!!!!";
    }
    
    ?>     
<div style="background-color:teal;width:50%;padding:10px;margin:20px;float:left;">
    <div class="page_content">
    	Comments Goes Here ...
    </div>	
        <div id="comment_input">
            <form action= "comment.php" name="form1" method= "post">
        	    <span style="color:black;"><input type="text" name="name" placeholder="Name..."/></span><br><br>
                <textarea name="comments"  style="color:black;" placeholder="Leave Comments Here..." style="width:610px; height:100px;"></textarea><br><br>
                <button type="submit" class="btn waves-effect waves-light ">Comment</button>
            </form>
        </div>
        <div id="comment_logs">
    	    Loading comments at the moment...
        </div>
    </div>
    <footer class="page-footer" style="background-color:#00897b;">            
        <div class="footer-copyright">
            <div class="container">
            All Rights Reserved to Daapong
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