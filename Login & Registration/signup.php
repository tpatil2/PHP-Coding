<?php
session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//pass all the information to data base

$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";

$result = mysqli_query($conn, $sql);
#$result = $conn->query($sql);

#takes all the registration information in main pages
header("Location: index.php");
?>