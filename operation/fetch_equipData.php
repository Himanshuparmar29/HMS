<?php
    $conn=mysqli_connect("localhost","root","","hms");
    if(!$conn){
        die('Could not Connect My Sql:' .mysqli_connect_error());
    }
    $sql = "SELECT equipment_id,name FROM medical_equipments where 	available_count>0";
    $result = mysqli_query($conn, $sql);
    $str = "";
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $str = $str . "<option value='".$row['equipment_id']."'>".$row['name']."</option>";
        }
    }
    echo $str;
?>