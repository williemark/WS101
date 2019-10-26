<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
include 'config.php';

?>
<!DOCTYPE html>
<html >
<head>
    <title>table's</title>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="login.html">login</a></li>
            </ul>
        </header>
        <!-- =========end of navbar========= -->
    <h1 id="you1" style ="font-size:10mm;">Welcome to user's table</h1>
    <table class="container" class="responsive-table" class="highligt">
    <th class='q1'>No.</th>
    <th class='q1'>user name</th>
    <th class='q1'>password</th>
    <th class='q1'>Option's</th>
    
    <?php $result = mysqli_query($conn,"SELECT id,username,passwd FROM tbl_login") ;
    while ($row = mysqli_fetch_assoc($result)) {
    
    ?> <tr> 
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['passwd'];?></td>
    <td>
    <a data-deleteid = "<?php echo $row['id'];?>"class = "btndelete btn-floating btn-medium waves light red btn modal-trigger" href="#dModal"> <i class="material-icons ">delete</i></a>
    <a data-update = "<?php echo $row['id'];?>" data-uname ="<?php echo $row['username'];?>"  data-passwd ="<?php echo $row['passwd'];?>" class = "bedit btn-floating btn-medium waves light lightblue btn modal-trigger" href="#eModal"> <i class="material-icons ">edit</i></a>
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
    <input type="text" name="username" id="username">
    <input type="text" name="passwd" id="passwd">
    </div>
    <div class = "modal-footer">
    <button type="submit" name="confirm" class="modal-close waves effect waves-green btn-flat windows.reload">Confirm </button>|
    <button type="submit" name="nconfirm" class="modal-close waves effect waves-green btn-flat windows.reload">Cancel </button>   
    </form>
    </div>
    </div>
    <?php
    if(isset($_POST['confirm'])){
        $id = mysqli_real_escape_string($conn,$_POST['id']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $passwd = mysqli_real_escape_string($conn,$_POST['passwd']);
        $query = mysqli_query($conn,"UPDATE `tbl_login` SET username = '$username', passwd = '$passwd' WHERE ID = '$id'");
        if (!$query){
            echo 'Update Not Successfull';
        }else{
            echo 'Update Successfull';
        }
    }
?>
    <div id ="dModal" class ="modal">
        <div class = "modal-content">
            <h4> Delete Information</h4>
            <p> Are you sure you want to delete this information?</p>
            <input type="text" id="dele" name="dele" hidden="">
                    <button type="submit" name="yesconfirm" class="modal-close waves effect waves-green btn-flat windows.reload">Yes</button>| 
                    <button type="submit" name="confirm" class="modal-close waves effect waves-green btn-flat windows.reload">NO</button>
        </form>
        </div>
        <div class = "modal-footer">
        
    </div>

    <?php
    if(isset($_POST['yesconfirm'])) {
        $id=$_POST['dele'];
        $query = mysqli_query($conn,"DELETE FROM `tbl_login` WHERE ID = '$id'");
        if (!$query){
            echo 'Successfull';
        }else{
            echo 'Successfully Deleted';
        }
    }
?>
    
    </center><br><br>
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
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });
    
    let buttonedit = document.querySelectorAll(".bedit");
    let buttondelete = document.querySelectorAll(".btndelete");

    for (var x = 0; x < buttonedit.length; x++){
        buttonedit[x].addEventListener('click',ed);

    }
    for (var y = 0; y < buttondelete.length; y++){
        buttondelete[y].addEventListener('click',de);

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
    function de(e) {
                let dele = document.querySelector("#dele");
                
                dele.value=this.dataset.deleteid;
               
            }
    </script>
</body>
</html>

