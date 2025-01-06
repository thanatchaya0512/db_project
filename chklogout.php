<?php
// session_start();

// session_unset();  
// session_destroy();  
// // ลบคุกกี้
// setcookie('remember_user', '', time() - 3600, '/'); 

// echo "<script>alert('ออกจากระบบ');</script>";

// header("Location: login.php");
// exit(); 

// Clear the cookies by setting them to expire in the past
setcookie('remember_user', '', time() - 3600, '/'); // Delete the 'remember_user' cookie
setcookie('remember_pass', '', time() - 3600, '/'); // Delete the 'remember_pass' cookie
setcookie('firstname', '', time() - 3600, '/'); // Delete the 'firstname' cookie
setcookie('lastname', '', time() - 3600, '/'); // Delete the 'lastname' cookie
setcookie('user_id', '', time() - 3600, '/'); // Delete the 'user_id' cookie

// Optional: Add a message to show the user
echo "<script>alert('ออกจากระบบ');</script>";

// Redirect to login page after logout
header("Location: login.php");
exit();


?>

<!-- ทำการจัดการลบเซสซั่น -->