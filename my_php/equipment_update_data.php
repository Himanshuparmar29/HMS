<?php
session_start();
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$ename=$_POST['name'];
$eqty=$_POST['qun'];
$added_date=date('Y-m-d');
$description=$_POST['des'];
$category=$_POST['cat'];
$active=$_POST['active'];
$sql="UPDATE medical_equipments SET name='$ename',total_count='$eqty',description='$description',category='$category',added_at='$added_date',update_at='$added_date',is_active='$active' WHERE equipment_id='".$_SESSION['equipmentId']."'";
if(mysqli_query($conn,$sql))
{
    echo "<script>alert('Record updated successfully');
    location.href='../app/equipment-list.php';</script>";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>