<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}
$user = $_POST["user"];
$username = $_POST["uname"];
$pass = $_POST["pass"];
$flag = 1;
if ($user == "doctor") {
    $sql = "SELECT * FROM doctor where doctor_id='$username' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username;
        header("Location:../app/doctor-profile.php");
    }
    else{
        $flag = 0;
    
    }
} else {
    $sql="SELECT * FROM hospital where hospital_id='$username' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username;
        header("Location:../app/hospital-profile.php");
    }
    else{
        $flag = 0;
    }
}
if($flag == 0){
    echo "<script>alert(`Incorrect Username/Password`);
        window.location.href = '../auth/sign-in.php';</script>";
}
?>