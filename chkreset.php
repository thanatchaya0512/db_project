<?php

include('connection.php'); 


$new_password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

// รหัสต้องเหมือนกัน

if ($new_password !== $confirm_password) {
    echo "<script>alert('Passwords do not match!'); window.location.href = 'reset-password.php';</script>";
    exit();
}

// เช็ครหัสแล้ว มาทำการเช็คไอดี โดย $mID ใช้ myID ที่เป็น POST เพราะรับมาจาก input id="myID"
if (isset($_POST['myID'])) {
    $mID = $_POST['myID']; // ใช้ mID ในการตรวจสอบ


        // รีเซ็ตรหัสผ่าน โดยการ Where ID เนื่องจากไอดีไม่ซ้ำกัน เอา ID เป็นตัวหลัก
        $sql_update = "UPDATE tb_users SET password = '$new_password' WHERE id = '$mID'";
        if (mysqli_query($con, $sql_update)) {
            echo "<script>alert('Password reset successful!'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Failed to reset password. Please try again.'); window.location.href = 'reset-password.php';</script>";
        }
    } else {
        echo "<script>alert('User not found. Please check your Email .'); window.location.href = 'reset-password.php';</script>";
    }


// Close the database connection
mysqli_close($con);
?>