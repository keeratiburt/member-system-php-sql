<?php
// conn ย่อมาจาก connect
// db ย่อมาจาก database
// ดังนั้น conn_db คือ connect database

$serverName = "localhost";
$db_username = "root";
$db_password = "";
$dbName = "restaurant";


$conn = new mysqli($serverName, $db_username, $db_password, $dbName);

if($conn->connect_error){
    die("เชื่อมต่อฐานข้อมูลไม่ได้" . $conn->connect_error);
}else{
    echo "เชื่อมต่อสำเร็จ";
}

?>
