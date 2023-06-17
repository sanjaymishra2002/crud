<?php

     $id=$_GET['id'];
 

    $conn = mysqli_connect("localhost", "root", "", "employee") or die("connection error");

$sql = "DELETE FROM tbl_employee WHERE id='$id'";
$res = mysqli_query($conn, $sql) or die("query unsuccesfull");

header("Location: http://localhost/emp/index.php");
mysqli_close($conn);
?>