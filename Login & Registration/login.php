<?php

session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//pass all the information to data base

$sql = " SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd' ";

$result = mysqli_query($conn, $sql);
#$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
    echo "Incorrect";
}else {
    $_SESSION['id'] = $row['id'];
}

#takes all the registration information in main pages
header("Location: index.php");
?>