<?php
$category = $_POST['category'];

$conn = mysqli_connect("localhost", "root", "", "hms");
$sql = "SELECT * FROM doctor WHERE current_position = '$category';";
$result = mysqli_query($conn, $sql);

$options = "<option value='' disabled selected>Select Doctor</option>";
while ($row = mysqli_fetch_assoc($result)) {
    $options .= "<option value='" . $row['doctor_id'] . "'>" . $row['first_name'] . " " . $row['last_name'] . "</option>";
}
echo $options;

mysqli_close($conn);
?>
