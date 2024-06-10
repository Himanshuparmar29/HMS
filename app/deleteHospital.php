<?php
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$username=$_REQUEST['userid'];
$sql="DELETE FROM hospital WHERE hospital_id='$username'";
if(mysqli_query($conn,$sql)){
    echo "<script type='text/javascript'>alert('Hospital Information Deleted Successfully!')
    window.location.href='../app/hospital-list.php';
    </script>";
}
?>