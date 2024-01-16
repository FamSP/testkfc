<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = '409'; //Lab room 408 or 409 - 12345678
$dbname = 'kfc2';

//โปรแกรมนี้ไว้สำหรับการเชื่อมระหว่าง web sever กับ database sever

try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname=$dbname;charset=UTF8",
         $userName
        
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '';

} catch (PDOException $e) {
    echo ' ' . $e->getMessage();
}
?>