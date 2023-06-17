<?php
 $name=$_POST['name'];

$email_id=$_POST['email_id'];

$mobile_no=$_POST['mobile_no'];

$address=$_POST['address'];

$state=$_POST['state'];

$city=$_POST['city'];

$dob=$_POST['dob'];

$conn = mysqli_connect("localhost", "root", "", "employee") or die("connection error");

$sql = "INSERT INTO tbl_employee(name,email_id,mobile_no,address,sno,cno,dob) VALUES ('$name','$email_id','$mobile_no','$address','$state','$city','$dob')";
$res = mysqli_query($conn, $sql) or die("query unsuccesfull");

header("Location: http://localhost/emp/index.php");
mysqli_close($conn);
?>