<?php
include_once 'upload.php'; 

$name_ = $_POST['name_']; 
$Address_ = $_POST['Address_'];
$Phone = $_POST['Phone'];
$Orders = $_POST['Orders'];
$Request = $_POST['Request'];
$id = $_POST['id'];


    $sql = "INSERT INTO customer (name_, Address_, Phone, Orders, Request)
     VALUES('$name_', '$Address_', '$Phone', '$Orders', '$Request');";
    mysqli_query($conn, $sql);

header("Location: ../Request.php?order success");

?>
