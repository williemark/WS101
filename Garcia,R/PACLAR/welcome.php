<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
include 'config.php';
include 'update.php';
include 'delete.php';
?>
<!DOCTYPE html>
<html >
<head>
    <title>Welcome Users Page</title>
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
<body id = "you" >
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
                <a class='dropdown-trigger btn' href='logout.php' data-target='dropdown1' id="wq">Log out</a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="#!">three</a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                  </ul>
            </div>
            <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="shop.php">Shop</a></li>
            
        </ul>
    </header>
    <center><h1 class="q1">Welcome <?php echo $_SESSION['uname']; ?></h1>
<br><br>
      <a class="waves-effect waves-light btn" href="register.php">Register</a>  <table class="container" class="responsive-table" class="highligt">
    <th class='q1'>User ID</th>
    <th class='q1'>Account ID</th>
    <th class='q1'>User name</th>
    <th class='q1'>Password</th>
    <th class='q1'>Option's</th>
    
    <?php $result = mysqli_query($conn,"SELECT userID,accountID,username,passwd FROM tbl_user") ;
    while ($row = mysqli_fetch_assoc($result)) {
    
    ?> <tr> 
    <td><?php echo $row['userID'];?></td>
    <td><?php echo $row['accountID'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['passwd'];?></td>
    <td>
    <a data-deleteid = "<?php echo $row['userID'];?>"class = "btndelete btn-floating btn-medium waves light red btn modal-trigger" href="#dModal"> <i class="material-icons ">delete</i></a>
    <a data-update = "<?php echo $row['userID'];?>" data-uname ="<?php echo $row['username'];?>"  data-passwd ="<?php echo $row['passwd'];?>" class = "bedit btn-floating btn-medium waves light lightblue btn modal-trigger" href="#eModal"> <i class="material-icons ">edit</i></a>
    </td>
    </tr> 
    
    <?php
    }
    ?>
    </table>
    <div id ="eModal" class ="modal">
    <div class = "modal-content">
    <form action="" method="post">
    <h4> Update Information</h4>
    <input type="text" name="id" id="id" hidden="">
    <label>Username:</label>
    <input type="text" name="username" id="username">
    <label>Password:</label>
    <input type="password" name="passwd" id="passwd">
    <label>Confirm Password:</label>
    <input type="password" name="conpasswd" id="conpasswd">
    </div>
    <div class = "modal-footer">
    <button type="submit" name="confirm" class="modal-close waves effect waves-green btn-flat windows.reload">Confirm </button>|
    <button type="submit" name="nconfirm" class="modal-close waves effect waves-green btn-flat windows.reload">Cancel </button>   
    </form>
    </div>
    </div>
    
    <div id="dModal" class="modal">
            <div class="modal-=content">
                <div class="container"><br>
                    <h4 class=center>Delete</h4>
                    <p class="center">Are you sure you want to delete this user </p>
                    <form action="" method="post">
                    <input type="text" id="deleteid" name="deleteid" hidden="">
                    <p class> </p>
                    <center>
                        
                            <button type="submit" class="waves-effect waves-teal btn-flat" name="deleteyes">Yes</button> | <button type="submit" class="waves-effect waves-teal btn-flat" name="Cancel">No</button>
                        </form>
                    </center>  
                </div>  
                <div class="modal-footer">
                </div>
            </div>
        </div>
        <div class = "modal-footer">
        
    </div>

<footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved To Paclar as of 2019 © WS101
                <?php
                    if ($conn->connect_error) {
                        die(" Not connected to". $conn->connect_error);
                    }else {
                        echo " Connected to ". $db ;
                    }
                ?>
            </div>
        </div>
    </footer>
    <script src="./assets/javascript/materialize-css.min.js"></script>

    <script>
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
            });

let buttonedit = document.querySelectorAll(".bedit");
let buttondelete = document.querySelectorAll(".btndelete");

for (var x = 0; x < buttonedit.length; x++){
    buttonedit[x].addEventListener('click',ed);

}
for (var y = 0; y < buttondelete.length; y++){
    buttondelete[y].addEventListener('click',del);

}

function ed(e){
    let id = document.querySelector("#id");
    let usename = document.querySelector("#username");
    let pass= document.querySelector("#passwd");
    let passs = document.querySelector("#conpasswd");
    id.value=this.dataset.update;
    usename.value = this.dataset.uname;
    pass.value = this.dataset.passwd;
    passs.value = this.dataset.passwd;
    console.log(this.dataset.uname);
    console.log(this.dataset.passwd);
    
}
function del(e) {
let deleteid = document.querySelector("#deleteid");
deleteid.value= this.dataset.deleteid;
                
}
</script>
</body>
</html>