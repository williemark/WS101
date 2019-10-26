<?php 

if (isset($_post['del'])) {
    $id=$_post['id'];
    $query = mysqli_query($conn,"DELETE FROM tbl_login WHERE id = '$id'");
    header ("location:user.php");}
?>