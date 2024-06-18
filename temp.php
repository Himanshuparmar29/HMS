<?php
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO test values(now());";
mysqli_query($conn,$sql);
?>