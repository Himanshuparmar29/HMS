<?php
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_POST["type"] == "") {
    $sql = "SELECT DISTINCT(current_position) FROM doctor;";
    $result = mysqli_query($conn, $sql);
    $str = '<option value="" disabled selected>Select Category</option>';
    while ($row = mysqli_fetch_assoc($result)) {
        $str .= "<option value='" . $row['current_position'] . "'>" . $row['current_position'] . "</option>";
    }
    echo $str;
}
else if($_POST["type"]=="doct"){
    $temp=$_POST['id'];
    $sql = "SELECT * FROM doctor where current_position='$temp' and is_active='yes' and is_available='yes';";
    $result = mysqli_query($conn, $sql);
    $str = '<option value="" disabled selected>Select Doctor</option>';
    while ($row = mysqli_fetch_assoc($result)) {
        $str .= "<option value='".$row['doctor_id']."'>" . $row['first_name']." ". $row['last_name']."</option>";
    }
    echo $str;
}

?>