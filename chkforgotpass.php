<?php
// Get user input
$em = $_POST['email'];
$us = $_POST['username'];

// Include the database connection
include('connection.php');

// Check if the username and email exist in the database
$sql = "SELECT * FROM tb_users WHERE username='$us' AND email='$em'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " - Username: " . $row['username'] . " - Email: " . $row['email'] . "<br>";

        // สร้างตัวแปรเก็บไอดี แบบ POST ชื่อ mID ใส่ไป ?mID= เพื่อให้แสดงที่ URL หน้าเว็บถัดไป
     header("Location: reset-password.php?mID=" . $row['id'] . "");

    }
    //     exit(); 
} else {
    echo "<script>alert('User not found. Please try agian.'); window.location.href = 'forgot-password.php';</script>";
}

// Close the database connection
mysqli_close($con);
?>
