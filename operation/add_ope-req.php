<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}
$requested_by = $_SESSION["username"];
$Description = $_POST["des"];
$Priority = $_POST["pri"];
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];
$allergies = $_POST['allergies'];
$medications = $_POST['medications'];
$medical_history = $_POST['medical_history'];
$symptoms = $_POST['symptoms'];
if ($_POST['check'] == "update") {
    $sql = "UPDATE patients SET name='$pname',gender='$gender',contact='$contact',email='$email',address='$address',allergies='$allergies',medications='$medications',medical_history='$medical_history',symptoms='$symptoms' WHERE patient_id='$pid'";
    if (mysqli_query($conn, $sql)) {
        $sql = "INSERT INTO ope_request (requested_by,Description,patient_id,Priority,requested_at) values ('$requested_by','$Description','$pid','$Priority',now())";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Request Submitted Successfully');window.location='../app/hospital-profile.php';</script>";
        } else {
            echo "<script>alert('Request Submission Failed');window.location='../app/hospital-profile.php';</script>";
        }
    } else {
        echo "<script>alert('Patient Update Failed');window.location='../app/hospital-profile.php';</script>";
    }
} else {
    $sql = "INSERT INTO patients (patient_id,name, gender, contact, email, address, allergies, medications, medical_history, symptoms) 
        VALUES ('$pid','$pname', '$gender', '$contact', '$email', '$address', '$allergies', '$medications', '$medical_history', '$symptoms')";
    if (mysqli_query($conn, $sql)) {
        $sql = "SELECT * FROM patients WHERE name='$pname' AND contact='$contact'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $pid = $row['patient_id'];
        $sql = "INSERT INTO ope_request (requested_by,Description,patient_id,Priority,requested_at) values ('$requested_by','$Description','$pid','$Priority',now())";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Request Submitted Successfully');window.location='../app/hospital-profile.php';</script>";
        } else {
            echo "<script>alert('Request Submission Failed');window.location='../app/hospital-profile.php';</script>";
        }
    } else {
        echo "<script>alert('Patient Addition Failed');window.location='../app/hospital-profile.php';</script>";
    }
}

?>