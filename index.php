<?php
$dbserver="127.0.0.1";
$dbuser="root";
$dbpass="";
$dbname="registration";

$name = $_POST['name'];
$uname = $_POST['Username'];
$bldgrup = $_POST['blood_group'];
$eml = $_POST['email'];
$mob = $_POST['contact_no'];
$cty = $_POST['city'];
$pass = $_POST['password'];
$cpass = $_POST['c_password'];

$conn = mysqli_connect($dbserver,$dbuser,$dbpass, $dbname);
if(!$conn)
die("Connection failed".mysqli_connect_error());
echo "db connection successfully";
$sql1 = "insert into registration(name,username,blood_group,email,contact_no,city,password,c_password) values('$name','$uname','
$bldgrup', '$eml', '$mob', '$cty', '$pass', $cpass')";

if(mysqli_query($conn,$sql1))
echo "<br/>new record inserted successfully";
else
echo "<br/> record not inserted";
mysqli_close($conn);
?>