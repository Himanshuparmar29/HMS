<?php
session_start();
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$eid=$_SESSION['equipmentId'];
$sql="DELETE FROM medical_equipments WHERE equipment_id='$eid'";
if(mysqli_query($conn,$sql))
{
    echo "<script>alert('Record deleted successfully');
    location.href='../app/equipment-list.php';</script>";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>