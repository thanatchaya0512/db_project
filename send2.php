<?php

// ตัวแปรอะไรก็ได้ ตัวนี้ให้เป็น a แล้ว method=post แล้วเอาข้อมูลจาก frist_name
$a=$_POST['frist_name'];

//สร้างตัวแปรสำหรับรับค่า
// $aParameter = $_POST['username'];

//ทำการเช็คว่า ถ้ามีการส่งข้อมูลมาให้แสดงข้อมูลที่ส่งมา
IF($a != ""){
    echo $a;
}else{
    echo "Null Parameter";
}


?>