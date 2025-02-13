<?php
session_start(); // เริ่มการทำงาน session
session_destroy(); // ยุติการทำงาน session

header('Location: index.html'); // ไปยังหน้า index.html
?>