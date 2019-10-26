<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
include 'db_config.php';
include 'edit.php';
include 'delete.php';
?>
<!DOCTYPE html>
<html >
<head>
    <title>Register</title>
    <!--Import Google Icon Font-->
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="./asset/css/materializecss-icons.css">
    <link rel="stylesheet" href="./asset/css/materializecss.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        #y{
            background-image: url("./asset/img/24.jpg");
        }#wq{
            float: right; 
            margin-top: 10px;
            /* background-color: transparent;         */
            margin-right: 10px;
        }
        </style>

</head>
<body>
    <!-- =============start of navbar================ -->
<header>
            <nav>
                <div class="nav-wrapper yellow darken-2">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="left hide-on-med-and-down">
                            <li><a href="Home.php"><i class="material-icons">home</i></a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="Blog.php">Blog</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            
                          
                    </ul>
                    <a class='dropdown-trigger btn' href='logout.php' data-target='dropdown1' id="wq">Log_out</a>
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
                <li><a href="Blog.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </header>
        <!-- =========end of navbar========= -->
        <a href="welcome.php"> <i class="material-icons">arrow_back</i></a>
    <h1 id="you1" style ="font-size:10mm;">Welcome to user's table</h1>
    <table class="container" class="responsive-table" class="highligt">
    <th class='q1'>No.</th>
    <th class='q1'>user name</th>
    <th class='q1'>password</th>
    <th class='q1'>Option's</th>
    
    <?php $result = mysqli_query($conn,"SELECT id,username,passwd FROM tbl_login") ;
    while ($row = mysqli_fetch_assoc($result)) {
    
    ?> 
    <tr> 
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['passwd'];?></td>
       <td>
        <a data-id = "<?php echo $row['id'];?>"class = "delete btn-floating btn-medium waves light red btn modal-trigger" href="#dModal"> <i class="material-icons ">delete</i></a>
        <a data-id = "<?php echo $row['id'];?>" data-uname ="<?php echo $row['username'];?>"  data-passwd ="<?php echo $row['passwd'];?>" class = "bedit btn-floating btn-medium waves light lightblue btn modal-trigger" href="#eModal"> <i class="material-icons ">edit</i></a>
      </td>
    </tr> 
    
    <?php
    }
    ?>
    </table>
    <div id ="eModal" class ="modal">
        <form action="" method="post">
        <div class = "modal-content">
            <h4> Update Information</h4>
            <input type="text" name="id" id="id" hidden="">
            <input type="text" name="username" id="username">
            <input type="text" name="passwd" id="passwd">
        </div>
        <div class = "modal-footer">
            <button href="#!" type="submit" name="edit" class="modal-close waves-effect waves-green btn-flat">Agree</button>
        </div>
        </form>
    </div>

    <div id ="dModal" class ="modal">
        <div class = "modal-content">
            <h4> Delete Information</h4>
            <p> Are you sure you want to delete this information?</p>
            <input type="text" name="id" id="iddle" >
        </div>
        <div class = "modal-footer">
            <a href="#!" class="waves-effect waves-green btn-flat">Yes</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
        </div>
        </div>
    
    </center><br><br>
<footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved To limar as of 2019 © WS101
            </div>
        </div>
    </footer>

            <script src="./asset/js/materialize-css.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });

    let buttonedit = document.querySelectorAll(".bedit");
    for (var x = 0; x < buttonedit.length; x++){
        buttonedit[x].addEventListener('click',ed);
    }
    function ed(e){
        let id = document.querySelector("#id");
        let usename = document.querySelector("#username");
        let pass= document.querySelector("#passwd");
        id.value=this.dataset.update;
        usename.value = this.dataset.uname;
        pass.value = this.dataset.passwd;
        console.log(this.dataset.uname);
        console.log(this.dataset.passwd);
        
    }

    let buttondelete = document.querySelectorAll(".delete");
    for (var q = 0; q < buttondelete.length; q++){
        buttondelete[q].addEventListener('click',del);
    }
    function del(e){
        let id = document.querySelector("#id");
        id.value = this.dataset.id;
        console.log(this.dataset.id);
    }
    </script>
</body>
</html>
<?php
    if (isset($_GET ['id'])){
        $id=$_GET['id'];
    }
    if(isset($_POST['confirm'])){
        $id = mysqli_real_escape_string($conn,$_POST['id']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $passwd = mysqli_real_escape_string($conn,$_POST['passwd']);
        $query = mysqli_query($conn,"UPDATE `tbl_login` SET username = '$username', passwd = '$passwd' WHERE id = '$id'");
        if (!$query){
            echo 'Update Not Successfull';
        }else{
            echo 'Update Successfull';
        }
    }
?>