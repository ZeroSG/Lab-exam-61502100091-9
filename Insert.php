<?php
  require_once("sql.php");
  $sql = "INSERT INTO movies (movie_name, movie_time,movie_fname,movie_PIN)
VALUES ('{$_POST['movie_name']}', '{$_POST['movie_time']}', '{$_POST['movie_fname']}', '{$_POST['movie_PIN']}')";
 
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
  ?>  
<br>
<a href="select.php">กลับหน้าหลัก</a>