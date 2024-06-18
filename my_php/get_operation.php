<?php
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$state=$_POST['state'];
if($state=='all'){
    $sql="SELECT count(operation_id) as total from operation where status='completed';";
}
else if($state=='today'){
    $sql="SELECT count(operation_id) as total from operation where status='completed' and completed_at=curdate();";
    //INSERT into operation VALUES("","Nidhim","1",curdate(),"completed",'2023-01-01','2023-05-01',"");
}
else if($state=='week'){ 
    $sql="SELECT COUNT(operation_id) AS total from operation where status='completed' AND YEARWEEK(completed_at) = YEARWEEK(CURDATE());";
}
else if($state=='month'){
    $sql="SELECT COUNT(operation_id) AS total 
FROM operation 
WHERE status='completed' AND MONTH(completed_at) = MONTH(CURDATE()) AND YEAR(completed_at) = YEAR(CURDATE());
";
}
else {
    $sql="SELECT count(operation_id) as total from operation where status='completed' and year(completed_at)=year(curdate());";
}
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['total'];
 ?>