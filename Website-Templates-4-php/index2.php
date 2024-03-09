<?php
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
echo "Connected successfully";
?>
