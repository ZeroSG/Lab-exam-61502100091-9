<?php
require_once("sql.php");
$sql = "UPDATE movies SET 
        movie_name = '{$_POST['movie_name']}',
        movie_time = '{$_POST['movie_time']}',
        movie_fname = '{$_POST['movie_fname']}',
        movie_PIN = '{$_POST['movie_PIN']}'
 WHERE movie_id = '{$_POST['movie_id']}'";
 
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
 
$conn->close();
?>
<br>
<a href="select.php">กลับหน้าหลัก</a>