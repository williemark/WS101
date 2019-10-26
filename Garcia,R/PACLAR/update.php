<?php
    if(isset($_POST['confirm'])){
        $id = mysqli_real_escape_string($conn,$_POST['id']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $passwd = mysqli_real_escape_string($conn,$_POST['passwd']);
        $conpasswd = mysqli_real_escape_string($conn,$_POST['conpasswd']);
        
        if ($passwd != $conpasswd){
            echo 'The two passwords do not match';
        }else{
           $query = mysqli_query($conn,"UPDATE `tbl_user` SET  username = '$username', passwd = '$conpasswd' WHERE userID = '$id'");
           if (!$query){
            echo 'Update Not Successfull';
            }else{
            echo 'Update Successfull';
        }
    }
    }
?>