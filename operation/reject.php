<?php
    $conn=mysqli_connect("localhost","root","","hms");
    if(!$conn){
        die('Could not Connect My Sql:' .mysqli_connect_error());
    }
    $request_id=$_REQUEST['request_id'];
    $sql = "UPDATE ope_request SET status='Rejected' WHERE request_id='$request_id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Request Rejected Successfully');
        location.href='../index.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
?>