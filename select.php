<?php
 require_once("sql.php");
 $sql = "SELECT * FROM movies";
$result = $conn->query($sql);
?>
<table style="width:100%" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>รหัส PIN 4 ตัว</th>
  </tr>
<?php
 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
    <tr>
    <td><?php echo $row["movie_id"];?></td>
    <td><?php echo $row["movie_name"];?></td>
    <td><?php echo $row["movie_time"];?></td>
    <td><?php echo $row["movie_fname"];?></td>
    <td><?php echo $row["movie_PIN"];?></td>
  </tr>
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
  ?>  
</table>