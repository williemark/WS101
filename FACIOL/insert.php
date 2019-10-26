<?php
if (isset($_POST['in'])){
    $com = $_POST['input'];
    $query = mysqli_query($conn,"INSERT INTO `blog`(`comment`) VALUES ('$com')");
    if (!$query) {
        echo ("");
} 
}
?>