<?php
$id =$_POST['id'];

$name=$_POST['name'];

$email_id=$_POST['email_id'];

$mobile_no=$_POST['mobile_no'];

$address=$_POST['address'];

$state=$_POST['state'];

$city=$_POST['city'];

$dob=$_POST['dob'];

$conn = mysqli_connect("localhost", "root", "", "employee") or die("connection error");

$sql = "UPDATE tbl_employee SET name='$name', email_id='$email_id', mobile_no='$mobile_no', address='$address', sno='$state', cno='$city', dob='$dob' WHERE id ='$id'";
$res = mysqli_query($conn, $sql) or die("query unsuccesfull");

header("Location: http://localhost/emp/index.php");
mysqli_close($conn);


?>