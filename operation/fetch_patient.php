<?php 
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}
$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);
$str = "";
$id=$_POST['search'];
$flag=0;
while ($row = mysqli_fetch_assoc($result)) {
    if($row['patient_id']==$id){
        $flag=1;
        break;
    }
}
if($flag){
    $str="<div class=\"form-group col-md-6\">
                                                <label class=\"form-label\" for=\"pid\">Patient Id:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"pid\" id=\"pid\"
                                                    placeholder=\"Enter Patient Id\" value='".$row['patient_id']."'>
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label class=\"form-label\" for=\"pname\">Full Name:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"pname\" id=\"pname\"
                                                    placeholder=\"Enter Patient Name\" value='".$row['name']."'>
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"gender\">Gender:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"gender\" name=\"gender\"
                                                    placeholder=\"Enter Gender\" value='".$row['gender']."'>
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"contact\">Contact Number:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"contact\" name=\"contact\"
                                                    placeholder=\"Enter Contact Number \"  value='".$row['contact']."'required>
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"email\">Email Address:</label>
                                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                                    placeholder=\"Enter Email Address\" value='".$row['email']."' >
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"address\">Address:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\"
                                                    placeholder=\"Enter Address\" value='".$row['address']."'required>
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"allergies\">Allergies:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"allergies\"
                                                    placeholder=\"Enter Allergies\" name=\"allergies\" value='".$row['allergies']."'>
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"medications\">Current Medications:</label>
                                                <input type=\"text\" class=\"form-control\" id=\"medications\"
                                                    placeholder=\"Enter Current Medications\" name=\"medications\" value='".$row['medications']."'>
                                            </div>
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"medicalHistory\">Past Medical History:</label>
                                                <input class=\"form-control\" id=\"medicalHistory\"
                                                    placeholder=\"Enter Past Medical History\"
                                                    name=\"medical_history\" value='".$row['medical_history']."' >
                                            </div>
                                            <input type=\"hidden\" name=\"check\" value=\"update\">
                                            <div class=\"form-group col-md-6\">
                                                <label for=\"symptoms\">Current Symptoms/Reason for Visit:</label>
                                                <input class=\"form-control\" id=\"symptoms\" name=\"symptoms\"
                                                    placeholder=\"Enter Current Symptoms/Reason for Visit\" value='".$row['symptoms']."' required>
                                            </div>";
}
else{
        $str='<div class="form-group col-md-6"><h5>No data found!</h5></div><hr>
        <div class="form-group col-md-12">
                                                <label class="form-label" for="pid">Patient Id:</label>
                                                <input type="text" class="form-control" name="pid" id="pid"
                                                    placeholder="Enter Patient Id">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="pname">Full Name:</label>
                                                <input type="text" class="form-control" name="pname" id="pname"
                                                    placeholder="Enter Patient Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender">Gender:</label>
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="contact">Contact Number:</label>
                                                <input type="text" class="form-control" id="contact" name="contact"
                                                    placeholder="Enter Contact Number " required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email Address:</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter Email Address">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    placeholder="Enter Address" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="allergies">Allergies:</label>
                                                <input type="text" class="form-control" id="allergies"
                                                    placeholder="Enter Allergies" name="allergies">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="medications">Current Medications:</label>
                                                <input type="text" class="form-control" id="medications"
                                                    placeholder="Enter Current Medications" name="medications">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="medicalHistory">Past Medical History:</label>
                                                <input class="form-control" id="medicalHistory"
                                                    placeholder="Enter Past Medical History"
                                                    name="medical_history">
                                            </div>
                                            <input type=\"hidden\" name=\"check\" value=\"insert\">
                                            <div class="form-group col-md-6">
                                                <label for="symptoms">Current Symptoms/Reason for Visit:</label>
                                                <input class="form-control" id="symptoms" name="symptoms"
                                                    placeholder="Enter Current Symptoms/Reason for Visit"required>
                                            </div>
        ';
}
echo $str;
?>