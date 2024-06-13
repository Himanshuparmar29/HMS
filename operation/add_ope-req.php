<?php 
session_start();
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die('Could not Connect My Sql:' .mysqli_connect_error());
}
$requested_by=$_SESSION["username"];
$Description=$_POST["des"];
$Priority=$_POST["pri"];
$sql="INSERT INTO ope_request (requested_by,Description,Priority,requested_at) values ('$requested_by','$Description','$Priority',now())";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Request Submitted Successfully');window.location='ope_request.php';</script>";
}
else{
    echo "<script>alert('Request Submission Failed');window.location='oope_request.php';</script>";
}
?>