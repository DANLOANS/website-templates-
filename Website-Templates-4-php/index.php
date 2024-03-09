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
<?php
// โค้ด PHP ส่วนนี้สามารถใช้สำหรับการประมวลผลข้อมูลหรือสร้างเนื้อหาได้ตามต้องการ
// ตัวอย่างเช่นการดึงข้อมูลจากฐานข้อมูล หรือการสร้างเนื้อหาตามเงื่อนไขต่าง ๆ
// ในที่นี้เราจะเขียนโค้ด PHP ที่แสดงตัวอย่างข้อความ
echo "<p>This is a sample PHP content.</p>";
?>

</body>
</html>
