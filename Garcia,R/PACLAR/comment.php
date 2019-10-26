<?php 
if (isset($_POST['in'])) {
    $name = $_POST['name'];
    $com = $_POST['content'];
    $query = mysqli_query($conn,"INSERT INTO `tbl_blog`( `cname`,`comment`) VALUES ('$name','$com')");
    if (!$query) {
        echo 'comment failure!!';
    }
}
?>  