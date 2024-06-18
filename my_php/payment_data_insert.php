<?php
session_start();
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$ope_id=$_SESSION['operation_id'];
$amount=$_POST['opCharge'];
$note=$_POST['note'];
$sql="INSERT INTO payment(operation_id,amount) values('$ope_id','$amount');";
mysqli_query($conn,$sql);
$sql="UPDATE operation set status='completed',completed_at=now(),note='$note' where operation_id='$ope_id';";
mysqli_query($conn,$sql);
$sql="UPDATE doctor set is_available='yes' where doctor_id='".$_SESSION['username']."';";
mysqli_query($conn,$sql);
$sql="SELECT equipment_id from ope_equip_assign where operation_id='$ope_id';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $equip_id=$row['equipment_id'];
    $sql1="SELECT available_count from medical_equipments where equipment_id='$equip_id';";
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $count=$row1['available_count'];
    $count=$count+1;
    $sql2="UPDATE medical_equipments set available_count='$count' where equipment_id='$equip_id';";
    mysqli_query($conn,$sql2);
}
echo "<script>alert('Operation Completed Successfully!');window.location.href='../app/doctor-profile.php';</script>";
?>