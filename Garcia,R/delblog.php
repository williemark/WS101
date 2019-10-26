<?php
require("db_config.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM tbl_comments WHERE id='$id'");
header("location: Blog.php");
}
mysqli_close($conn);
?>