<?php 

// Ensure session is only started once
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$con = mysqli_connect("sql301.infinityfree.com","if0_37698740","BqqseLcjXV81","if0_37698740_watchdb");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} /*else {
    echo "Database connected successfully.";
}*/
/*
if($con){
    echo"database connected";
}
else{
    echo"database not connected";
}
    */

?>