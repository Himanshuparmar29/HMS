<?php
session_start();
$username = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}

$state = $_POST['state'];
if($state == "all"){
    $sql="SELECT * FROM operation join ope_doctor on operation.operation_id=ope_doctor.operation_id WHERE hospital_id='$username';";}
else{
$sql="SELECT * FROM operation join ope_doctor on operation.operation_id=ope_doctor.operation_id WHERE hospital_id='$username' and status='$state';";}
$result = mysqli_query($conn, $sql);
$str = " <thead>
            <tr class=\"ligth\">
                <th>Doctor's User Name</th>
                <th>Patient Id</th>
                <th>Approved Date</th>
                <th>Status</th>
                <th style=\"min-width: 100px\">Action</th>
            </tr>
        </thead>
        <tbody>";
while ($row = mysqli_fetch_array($result)) {
    $str .= "<tr>
                <td>" . $row['doctor_id'] . "</td>
                <td>" . $row['patient_id'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['status'] . "</td>
                <td><a href='../operation/view_operation.php?operation_id=" . $row["operation_id"] . "'><svg fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M15.1614 12.0531C15.1614 13.7991 13.7454 15.2141 11.9994 15.2141C10.2534 15.2141 8.83838 13.7991 8.83838 12.0531C8.83838 10.3061 10.2534 8.89111 11.9994 8.89111C13.7454 8.89111 15.1614 10.3061 15.1614 12.0531Z\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.998 19.355C15.806 19.355 19.289 16.617 21.25 12.053C19.289 7.48898 15.806 4.75098 11.998 4.75098H12.002C8.194 4.75098 4.711 7.48898 2.75 12.053C4.711 16.617 8.194 19.355 12.002 19.355H11.998Z\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                                    </svg></a></td>
            </tr>";
}
$str .= "</tbody>";
echo $str;
?>