<?php

require("db_config.php");
$result = mysqli_query($conn, "SELECT * FROM tbl_comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h6><a href='deletedelete.php?id=" . $row['id'] . "'>x</a></h6>";
echo "<h5>" . $row['name'] . "</h5>";
echo "<h6>" . $row['date_publish'] . "</h6></br></br>";
echo "<h6>" . $row['tbl_comments'] . "</h6>";
echo "</div>";
}
mysqli_close($conn);

?>