<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>เว็บไซต์พร้อมเอฟเฟกต์และเมนู</title>
<style>
  /* CSS สำหรับเฟรมเวิร์ก */
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* สีพื้นหลัง */
  }
  
  /* สไลด์เข้าหน้าเว็บ */
  #slideshow {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('your-image.jpg'); /* เปลี่ยน 'your-image.jpg' เป็น URL ของภาพที่คุณต้องการใช้ */
    background-size: cover;
    background-position: center;
    animation: fadein 2s;
  }
  
  @keyframes fadein {
    from { opacity: 0; }
    to { opacity: 1; }
  }
  
  /* เมนูแถบด้านบน */
  .navbar {
    overflow: hidden;
    background-color: #333; /* สีของแถบเมนู */
  }
  
  .navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
  }
  
  .navbar a:hover {
    background-color: #ddd; /* สีพื้นหลังเมื่อเม้าส์ไปชี้ */
    color: black;
  }
</style>
</head>
<body>

<!-- สไลด์เข้าหน้าเว็บ -->
<div id="slideshow">
  <!-- เนื้อหาภายในสไลด์ สามารถเพิ่มเพิ่มเติมได้ตามต้องการ -->
  <h1>Welcome to Our Website</h1>
</div>

<!-- เมนูแถบด้านบน -->
<div class="navbar">
  <a href="#">หน้าแรก</a>
  <a href="#">เกี่ยวกับ</a>
  <a href="#">บริการ</a>
  <a href="#">ติดต่อ</a>
  <a href="#" style="float:right">สไลด์</a>
</div>

<!-- PHP ส่วนของการประมวลผล -->
?php
// เชื่อมต่อฐานข้อมูล MySQL
$servername = "localhost"; // เชื่อมต่อกับ MySQL ที่อยู่ในเซิร์ฟเวอร์ localhost
$username = "username"; // ชื่อผู้ใช้ของ MySQL
$password = "password"; // รหัสผ่านของ MySQL
$dbname = "dbname"; // ชื่อฐานข้อมูลที่ต้องการเชื่อมต่อ

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// เมื่อมีการส่งข้อมูล
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // เพิ่มข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO your_table_name (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ปิดการเชื่อมต่อ MySQL
$conn->close();
?>

<!-- ฟอร์มสำหรับส่งข้อมูล -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  <input type="submit">
</form>

</body>
</html>
