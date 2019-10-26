<?php
require('.config.php');
$name = $_POST['name'];
$comment = $POST['comment'];
$comment_length = strlen($comment);

if($comment_length > 100){
    header("location: shop.php?error=1");
}else{
    mysqli+query($conn,"INSERT INTO comment VALUES ('', '$name', '$comment')");

    header("location:shop.php");
}

?>