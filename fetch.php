<?php 
session_start(); 
include "db_conn.php";
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,"Select id FROM users where password ='root'");
$row = mysqli_fetch_assoc($result);
 echo ($row['id']);