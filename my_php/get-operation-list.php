<?php
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}
$state = $_POST['state'];
if ($state == 'all') {
    $sql = "SELECT * FROM operation ;";
} else {
    $sql = "SELECT * FROM operation WHERE status='$state'";
}
$result = mysqli_query($conn, $sql);
$str = "<thead>
            <tr></tr>
            <tr class=\"ligth\">
                <th>Operation Id</th>
                <th>Hospital's User Name</th>
                <th>Patient Id</th>
                <th>Approved Date</th>
                <th>Status</th>
                <th>Started At</th>
                <th>Completed At</th>
                <th>Note</th>
            </tr>
        </thead>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $str .= "<tr>
                <td>" . $row['operation_id'] . "</td>
                <td>" . $row['hospital_id'] . "</td>
                <td>" . $row['patient_id'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['status'] . "</td>
                <td>" . $row['started_at'] . "</td>
                <td>" . $row['completed_at'] . "</td>
                <td>" . $row['note'] . "</td>
                
            </tr>";
    }
} else {
    $str .= "<tr>
            <td colspan=\"9\">No Data Found</td>
        </tr>";
}
echo $str;
?>