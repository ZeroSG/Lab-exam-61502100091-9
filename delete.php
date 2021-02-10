<?php
require_once("sql.php");
// sql to delete a record
$sql = "DELETE FROM movies WHERE movie_id = '{$_GET['id']}'";
 
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
 
$conn->close();
?>
<br>
<a href="select.php">กลับหน้าหลัก</a>
