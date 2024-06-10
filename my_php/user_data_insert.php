<?php
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$add = $_POST["add"];
$email = $_POST["email"];
$pno = $_POST["pno"];
$city = $_POST["city"];
$username = $_POST["uname"];
$mNum=$_POST["mobno"];
$doctor_specialization = $_POST["doctor-specializations"];
$doctor_job_titles = $_POST["doctor-job-titles"];
$experience = $_POST["experience"];
$pass = $_POST["pass"];
$current_date = date("Y-m-d");
$targetpath = "uploads/";
$flag = 0;
if (!empty($_FILES["profile"]["name"])) {
    $filename = basename($_FILES["profile"]["name"]);
    $targetFilePath = $targetpath . $filename;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)) {
            // $sql = "INSERT INTO doctor() values();";
            $sql="INSERT INTO doctor(doctor_id,password,first_name,last_name,gender,address,city,pincode,phone_number,email,specialization,current_position,Joining_Date,updated_at,years_of_experience,img_path) values('$username','$pass','$fname','$lname','$gender','$add','$city','$pno','$mNum','$email','$doctor_specialization','$doctor_job_titles','$current_date','$current_date','$experience','$targetFilePath');";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Photo upload filed! Try again.";
            } else {
                $flag = 1;
            }
        } else {
            echo "Sorry! There was an error to upload photo";
        }
    } else {
        echo "Sorry!only jpg,png,jpeg and pdf file are allowed!";
    }
} else {
    echo "Please Select file to upload!";
}
if ($flag) {
    $qualifications = $_POST["qualifications"];
    foreach ($qualifications as $qualification) {
        $sql = "INSERT INTO doctor_qualifications (doctor_id, qualification) VALUES ('$username', '$qualification')";
        if (mysqli_query($conn, $sql) === FALSE) {
            echo "Error: " . mysqli_error($conn);
            $flag=0;
        }
    }
}
// if($flag)
// {
//     $num=$_POST["mobno"];
//     foreach($num as $mobno){
//         $sql="INSERT INTO doctor_phone_number(doctor_id,phone_number) values('$username','$mobno')";
//         if(mysqli_query($conn,$sql)===FALSE){
//             echo "Error: " . mysqli_error($conn);
//             $flag=0;
//         }
//     }
// }
if($flag){
    echo"<h2>Data inserted successfully!</h2>";
}else{
    echo"Can't  to able insert data!";
}
mysqli_close($conn)
?>