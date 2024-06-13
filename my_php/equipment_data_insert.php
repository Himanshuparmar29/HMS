<?php
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$eid=$_POST['eid'];
$ename=$_POST['name'];
$eqty=$_POST['qun'];
$added_date=date('Y-m-d');
$description=$_POST['des'];
$category=$_POST['cat'];

$sql="INSERT INTO medical_equipments(equipment_id ,name,total_count,available_count,description,category,added_at,update_at) VALUES ('$eid','$ename','$eqty','$eqty','$description','$category','$added_date','$added_date')";

if(mysqli_query($conn,$sql))
{
    echo "<script>alert('New record created successfully');
    location.href='../app/add_equipment.php';</script>";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}