<?php 
    if (isset($_POST['reg'])) {
        $uname = $_POST['user'];
        $pwd = $_POST['pass'];
        $query = mysqli_query($conn,"INSERT INTO tbl_login (username,passwd) VALUE ('$uname','$pwd')");
        if (!$query) {
            echo "<p>faild registering</p>";
        }else {
            // echo "<a onclick='M.toast({html:''I am a toast'}) class='btn'>Toast!</a>";
            // echo "<p>Successfully registerd</p>";
            header("loaction: welcome.php");
            echo "<script>alert('regitered!!');</script>";
        }
    }
?> 
                        