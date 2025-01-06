<?php



// เชื่อมต่อฐานข้อมูล Database configuration

// $servername = "localhost";  // Hostname
// $username = "root";         // Database username
// $password = "";             // Database password
// $dbname = "db_project2";  // Database name

// // Create connection
// // $conn = new mysqli($servername, $username, $password, $dbname);
// session_start();

// $con=mysqli_connect('127.0.0.1:3308','root','','db_project2');

// // Check connection
// if (!$con) {
//     die("Connection failed");
// }else{
//     echo "Connected successfully";
// }

// ใน [] คือชื่อของ for/id

$us = $_POST['username'];
$pss = $_POST['password'];
// // ปุ่ม remember me
$remember = isset($_POST['remember']) ? $_POST['remember'] : null; 

// แสดงการรับค่า ให้้เข้าใจ concept
// IF($us != "" && $pss !="") {
//     echo $us . "<br>" ."". $pss;
// }else{
//     echo "Null Parameter";
// }


// ใส่เพื่อเชื่อมฐานข้อมูลกับไฟล์ที่สร้างแยก
include('connection.php');



$sql = "SELECT * FROM tb_users 
Where username='$us' AND password ='$pss'" ;

// Execute the query
$result = mysqli_query($con, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display data
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "ID: " . $row['id'] . " - Name: " . $row['firstname'] . " - Email: " . $row['email'] . "<br>"; ปิดการ echo แล้วเก็บ session
        // session_start();
        // $_SESSION['Fname'] = $row['firstname'];
        // $_SESSION['Lname'] = $row['lastname'];
        // $_SESSION['user_id'] = $row['id'];



        // ตรวจสอบว่ามีการเลือก Remember Me หรือไม่
        if ($remember) {
            // ถ้ามีการเลือก Remember Me ให้บันทึกข้อมูลในคุกกี้เป็นเวลา 1 ปี
        setcookie('remember_user', $row['firstname'], time() + (86400 * 365), "/"); // เก็บ username
                    // เก็บข้อมูลในคุกกี้ (เช่น ชื่อ, นามสกุล, user_id)
        setcookie('firstname', $row['firstname'], time() + (86400 * 365), "/"); // เก็บชื่อจริง
        setcookie('lastname', $row['lastname'], time() + (86400 * 365), "/"); // เก็บนามสกุล
        setcookie('user_id', $row['id'], time() + (86400 * 365), "/"); // เก็บ user id

            // echo "The 'บันทึกการเข้าสู่ระบบเป็นเวลา 1 ปีเรียบร้อยแล้ว: " . $_COOKIE['remember_user'];
        } else {
            // ถ้าไม่ได้เลือก Remember Me ให้บันทึกข้อมูลในคุกกี้เป็นเวลา 3 วัน
        setcookie('remember_user', $row['firstname'], time() + (86400 * 3), "/"); // เก็บ username
        // เก็บข้อมูลในคุกกี้ (เช่น ชื่อ, นามสกุล, user_id)
        setcookie('firstname', $row['firstname'], time() + (86400 * 3), "/"); // เก็บชื่อจริง
        setcookie('lastname', $row['lastname'], time() + (86400 * 3), "/"); // เก็บนามสกุล
        setcookie('user_id', $row['id'], time() + (86400 * 3), "/"); // เก็บ user id

            // echo "The 'บันทึกการเข้าสู่ระบบเป็นเวลา 3 วันเรียบร้อยแล้ว: " . $_COOKIE['remember_user'];
            
        }
        // ไปที่หน้า index.php
        header("Location: index.php");
        exit();
    }
} else {
    // แจ้งเตือนเมื่อกรอกข้อมูลผิด
    echo "<script>alert('Invalid username or password.'); window.location.href = 'login.php';</script>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$con->close();
?>


