<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}
$username=$_POST["uname"];
$pass=$_POST["pass"];
$sql = "SELECT * FROM doctor where doctor_id='$username' and password='$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==1)
{
    $_SESSION["username"]=$username;
    header("Location:../app/user-profile.php");
}
else
{
    echo "<script>alert(`Incorrect Username/Password`);
        window.location.href = '../auth/sign-in.php';</script>";
}
?>
