<?php


$username = "";
$email    = "";


// 创建连接
$db = mysqli_connect("db-30bemv1qn.aliwebs.com", "30bemv1qn", "123456", "30bemv1qn");

// 检测连接
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

