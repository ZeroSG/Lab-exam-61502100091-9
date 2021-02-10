<?php
 require_once("sql.php");
 $sql = "SELECT * FROM movies";
 if(isset($_GET['search_click'])) {
    $sql = "SELECT * FROM movies WHERE movie_name LIKE '%{$_GET['search']}%'";
    echo "<p>ค้นหา : {$_GET['search']}</p>";
  }
$result = $conn->query($sql);
?>
<form action="." method="get">
<label for="search">ช่องค้นหา</label>
    <input type="text" name="search" id="search" placeholder="ช่องค้นหา...">
    <button type="submit" name="search_click">ค้นหา</button> 
</form>
<br>
<a href="Insert_db.php">เพิ่มนักศึกษา</a>
<br>
<table style="width:100%" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>รหัส PIN 4 ตัว</th>
    <th>เครื่องมือ</th>
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
    <td align = "center">
    <a href="delete.php?id=<?php echo $row['movie_id']; ?>">ลบ</a>
</td>
  </tr>
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
  ?>  
</table>