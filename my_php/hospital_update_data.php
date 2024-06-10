<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}

$name = $_POST["name"];
$add = $_POST["add"];
$email = $_POST["email"];
$pno = $_POST["pno"];
$city = $_POST["city"];
$pass = $_POST["pass"];
$active=$_POST["active"];
$mNum = $_POST["mobno"];
$username = $_SESSION["username"];
$current_date = date("Y-m-d");
$flag = 0;
$sql="UPDATE hospital SET
        name='$name',
        address='$add',
        email='$email',
        pincode='$pno',
        city='$city',
        password='$pass',
        is_active='$active',
        phone_number='$mNum',
        update_at='$current_date'
        where hospital_id='$username';
";
if(mysqli_query($conn,$sql))
{
    $flag=1;
}
if ($flag) {
    echo "<script type='text/javascript'>alert('Data Updated successfully!')
    window.location.href='../app/hospital-list.php';
    </script>";
} else {
    echo "Can't able to insert data!";
}
mysqli_close($conn);
?>
