<?php
    require_once("sql.php");
    $sql = "SELECT * FROM movies WHERE movie_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>
<form action="Update_db.php" method="post">
    <label for="movie_id">id : </label>
    <?php echo $row['movie_id']; ?>
    <input type="hidden" name="movie_id" id="movie_id" value="<?php echo $row['movie_id']; ?>"><br>
    <label for="movie_name">ชื่อภาพยนต์ : </label>
    <input type="text" name="movie_name" id="movie_name" value="<?php echo $row['movie_name']; ?>"><br>
    <label for="movie_time">เวลาที่เริ่มฉาย : </label>
    <input type="text" name="movie_time"id="movie_time"value="<?php echo $row['movie_time']; ?>"><br>
    <label for="movie_fname">ชื่อผู้ใช้งาน : </label>
    <input type="text" name="movie_fname" id="movie_fname"value="<?php echo $row['movie_fname']; ?>"><br>
    <label for="movie_PIN">PIN : </label>
    <input type="text" name="movie_PIN" id="movie_PIN"value="<?php echo $row['movie_PIN']; ?>"><br>
    <input type="submit">
    <input type="reset">
    <br>
    <a href="select.php">กลับหน้าหลัก</a>