<?php
  require_once("sql.php");
  $sql = "INSERT INTO movies (movie_name, movie_time)
VALUES ('{$_POST['movie_name']}', '{$_POST['movie_time']}')";
 
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
  ?>  
<br>
<a href="select.php">กลับหน้าหลัก</a>