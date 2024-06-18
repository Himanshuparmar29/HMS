<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}
$username = $_SESSION['username'];
$state = $_POST['state'];
if ($state == "all") {
    $sql = "SELECT ope.operation_id as operation_id,opd.doctor_id as doctor_id,ope.patient_id as patient_id,ope.started_at as started_at,ope.completed_at as completed_at,payment.amount as amount,payment.status as status  FROM operation ope join payment on ope.operation_id=payment.operation_id join ope_doctor opd on opd.operation_id=ope.operation_id WHERE ope.hospital_id='$username';";
} else if ($state == "pending") {
    $sql = "SELECT ope.operation_id as operation_id,opd.doctor_id as doctor_id,ope.patient_id as patient_id,ope.started_at as started_at,ope.completed_at as completed_at,payment.amount as amount,payment.status as status  FROM operation ope join payment on ope.operation_id=payment.operation_id join ope_doctor opd on opd.operation_id=ope.operation_id WHERE ope.hospital_id='$username' and payment.status='pending';";
} else {
    $sql = "SELECT ope.operation_id as operation_id,opd.doctor_id as doctor_id,ope.patient_id as patient_id,ope.started_at as started_at,ope.completed_at as completed_at,payment.amount as amount,payment.status as status  FROM operation ope join payment on ope.operation_id=payment.operation_id join ope_doctor opd on opd.operation_id=ope.operation_id WHERE ope.hospital_id='$username' and payment.status='completed';";
}
$result = mysqli_query($conn, $sql);
$str="<thead>
        <tr class=\"ligth\">
            <th>Operation Id</th>
            <th>Doctor's User Name</th>
            <th>Patient Id</th>
            <th>Started At</th>
            <th>Completed At</th>
            <th>Charge</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>";
while ($row = mysqli_fetch_array($result)) {
    $str.="<tr>
            <td>".$row['operation_id']."</td>
            <td>".$row['doctor_id']."</td>
            <td>".$row['patient_id']."</td>
            <td>".$row['started_at']."</td>
            <td>".$row['completed_at']."</td>
            <td>".$row['amount']."</td>
            <td>".$row['status']."</td>
        </tr>";
}
$str.="</tbody>";
echo $str;
?>