<?php
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}
$name = $_POST["name"];
$add = $_POST["add"];
$email = $_POST["email"];
$pno = $_POST["pno"];
$city = $_POST["city"];
$username = $_POST["uname"];
$pass = $_POST["pass"];
$type=$_POST["htype"];
$current_date = date("Y-m-d");
$mNum=$_POST['mobno'];
$sql1="INSERT INTO hospital(hospital_id,password,name,type,address,pincode,city,phone_number,email,joining_date,	update_at) VALUES ('$username','$pass','$name','$type','$add','$pno','$city','$mNum','$email','$current_date','$current_date')";
$result=mysqli_query($conn,$sql1);
if(!$result){ 
    echo"<script>alert('Failed to insert data');
    location.href='add_hospital.html';</script>";
}
else{
    echo"Data Inserted Successfully!";
}
?>