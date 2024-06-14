<?php 
    session_start();
    $conn=mysqli_connect("localhost","root","","hms");
    if(!$conn){
        die('Could not Connect My Sql:' .mysqlI_connect_error());
    }
    $user_id = $_SESSION['username'];
    $equipments=$_POST['equip'];
    $flag=1;
    foreach($equipments as $equipment){
        $sql="INSERT INTO ope_equip_assign(doctor_id,operation_id,equipment_id) values('".$user_id."','".$_SESSION['ope_id'] ."','".$equipment."')";
        $result=mysqli_query($conn,$sql);
        $sql1="SELECT available_count FROM medical_equipments WHERE equipment_id='".$equipment."'";
        $result1=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result1);
        $count=$row['available_count'];
        $count=$count-1;
        $sql2="UPDATE medical_equipments SET available_count='$count' WHERE equipment_id='".$equipment."'"; 
        $result2=mysqli_query($conn,$sql2);
        if(!$result && !$result1 && !$result2){
            $flag=0;
            break;
        }
    }
    if($flag==1){
        $sql="UPDATE operation SET status='in-progress' WHERE operation_id='".$_SESSION['ope_id']."'";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script> alert('Your Task is Start!');
            window.location.href='../app/doctor-profile.php';</script>";
        }else{
            echo "<script> alert('Something went wrong!');
            window.location.href='../app/doctor-profile.php';</script>";
        }
    }
    else{
        echo "<script> alert('Something went wrong!');
        window.location.href='../app/doctor-profile.php';</script>";
    }
?>