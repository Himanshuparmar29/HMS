<?php
session_start();
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$request_id=$_SESSION['request_id'];
$id=$_POST['doct'];
$requested_by=$_SESSION['hospital_id'];
$sql="SELECT patient_id from ope_request where request_id='$request_id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$patient_id=$row['patient_id'];
$sql1="INSERT INTO operation(hospital_id,patient_id,date) values('$requested_by','$patient_id',now());";
mysqli_query($conn,$sql1);
$sql="SELECT operation_id FROM operation where hospital_id='$requested_by' order by operation_id desc limit 1;";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$operation_id=$row['operation_id'];
$sql2="INSERT INTO ope_doctor values('$operation_id','$id');";
mysqli_query($conn,$sql2);
$sql="UPDATE ope_request set status='Assigned' where request_id='$request_id';";
mysqli_query($conn,$sql);
echo "<script>alert('Doctor Assigned Successfully!');window.location.href='../index.php';</script>";
?>