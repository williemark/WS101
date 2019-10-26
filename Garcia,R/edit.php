<?php 
// if (isset($_GET['edit'])) {
//     $id = $_GET['edit'];
//     $res = mysqli_query($conn,"SELECT username,passwrd FROM tbl_login WHERE id = $id");
//     $row = mysqli_fetch_assoc($res);
// }
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $uname = $_POST['username'];
    $pwd = $_POST['passwd'];
    $query = mysqli_query($conn,"UPDATE `tbl_login` SET username = '$uname', passwd = '$pwd' WHERE id = '$id' ");
    if (!$query) {
        echo "Update failed!";
    }else {
        echo "successfully updated";
        // echo "<script>alert('regitered!!');</script>";
        header("location: user.php");
    }
}
// if (isset($_POST['uname'])) {
//     $uname = mysqli_real_escape_string($conn,$_POST['uname']);
//     $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
//     $query = mysqli_query($conn,"UPDATE tbl_login SET username = $uname , passwd= $pwd WHERE id= $id");
//     if (!$query) {
//         echo "<p>faild registering</p>";
//     }else {
//         // echo "<a onclick='M.toast({html:''I am a toast'}) class='btn'>Toast!</a>";
//         echo "<p>Successfully registerd</p>";
//     }
// }
?> 
                         