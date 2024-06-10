<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$add = $_POST["add"];
$email = $_POST["email"];
$pno = $_POST["pno"];
$city = $_POST["city"];
$doctor_job_titles = $_POST["doctor-job-titles"];
$experience = $_POST["experience"];
$pass = $_POST["pass"];
$active=$_POST["active"];
$mNum = $_POST["mobno"];
$username = $_SESSION["username"];
$current_date = date("Y-m-d");
$targetpath = "uploads/";
$flag = 0;

// Get the existing image path from the database
$sql = "SELECT img_path FROM doctor WHERE doctor_id='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$existingImagePath = $row['img_path'];

if (!empty($_FILES["profile"]["name"])) {
    $filename = basename($_FILES["profile"]["name"]);
    $targetFilePath = $targetpath . $filename;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)) {
            $imagePathToUpdate = $targetFilePath;
        } else {
            echo "Sorry! There was an error to upload photo";
            exit();
        }
    } else {
        echo "Sorry! Only jpg, png, jpeg and pdf files are allowed!";
        exit();
    }
} else {
    // If no new file is uploaded, use the existing image path
    $imagePathToUpdate = $existingImagePath;
}

// Update the doctor information
$sql = "UPDATE doctor SET 
            password='$pass',
            first_name='$fname',
            last_name='$lname',
            address='$add',
            city='$city',
            pincode='$pno',
            phone_number='$mNum',
            email='$email',
            updated_at='$current_date',
            years_of_experience='$experience',
            img_path='$imagePathToUpdate',
            is_active='$active'
        WHERE doctor_id='$username'";
        
$result = mysqli_query($conn, $sql);
if ($result) {
    $flag = 1;
} else {
    echo "Failed to update data: " . mysqli_error($conn);
}

// Uncomment and modify the following code blocks if needed for qualifications and phone numbers

// if ($flag) {
//     $qualifications = $_POST["qualifications"];
//     foreach ($qualifications as $qualification) {
//         $sql = "INSERT INTO doctor_qualifications (doctor_id, qualification) VALUES ('$username', '$qualification')";
//         if (mysqli_query($conn, $sql) === FALSE) {
//             echo "Error: " . mysqli_error($conn);
//             $flag = 0;
//         }
//     }
// }

// if ($flag) {
//     $num = $_POST["mobno"];
//     foreach ($num as $mobno) {
//         $sql = "INSERT INTO doctor_phone_number (doctor_id, phone_number) VALUES ('$username', '$mobno')";
//         if (mysqli_query($conn, $sql) === FALSE) {
//             echo "Error: " . mysqli_error($conn);
//             $flag = 0;
//         }
//     }
// }

if ($flag) {
    echo "<script type='text/javascript'>alert('Data Updated successfully!')
    window.location.href='../app/user-list.php';
    </script>";
} else {
    echo "Can't able to insert data!";
}
mysqli_close($conn);
?>
