<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once("sql.php");
session_start();
  if(isset($_POST['login'])) {
      $sql = "SELECT * FROM movies WHERE movie_fname = '{$_POST['movie_fname']}' AND movie_PIN = '{$_POST['movie_PIN']}'";
      $result = $conn->query($sql);
      if($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $_SESSION["movie_fname"] = $row['movie_fname'];
      } else {
          echo "<p>รหัสผิด</p>";
      }
  }
 
  if(isset($_POST['logout'])) {
      session_unset();
  }
 
  if(isset($_SESSION['movie_fname'])) {
      require_once("select.php");
  } else {
      require_once("login.php");
  }
?>
</body>
</html>