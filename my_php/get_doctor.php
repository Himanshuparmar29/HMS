<?php
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$state=$_POST['state'];
if($state=='all'){
    $sql="SELECT count(operation.operation_id) as total from doctor join ope_doctor on doctor.doctor_id=ope_doctor.doctor_id join operation on operation.operation_id=ope_doctor.operation_id where  operation.status='in-progress';";
}else if($state=='today'){
    $sql="SELECT count(operation.operation_id) as total from doctor join ope_doctor on doctor.doctor_id=ope_doctor.doctor_id join operation on operation.operation_id=ope_doctor.operation_id where started_at=curdate() and operation.status='in-progress';";}
else if($state=='week'){
    $sql="SELECT count(operation.operation_id) as total from doctor join ope_doctor on doctor.doctor_id=ope_doctor.doctor_id join operation on operation.operation_id=ope_doctor.operation_id where YEARWEEK(started_at) = YEARWEEK(CURDATE()) and operation.status='in-progress';";
}
else if($state=='month'){
    $sql="SELECT count(operation.operation_id) as total from doctor join ope_doctor on doctor.doctor_id=ope_doctor.doctor_id join operation on operation.operation_id=ope_doctor.operation_id where MONTH(started_at) = MONTH(CURDATE()) and YEAR(started_at) = YEAR(CURDATE()) and operation.status='in-progress';";
}
else {
    $sql="SELECT count(operation.operation_id) as total from doctor join ope_doctor on doctor.doctor_id=ope_doctor.doctor_id join operation on operation.operation_id=ope_doctor.operation_id where year(started_at)=year(curdate()) and operation.status='in-progress';";
}
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['total'];
?>