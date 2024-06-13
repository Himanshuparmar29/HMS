<div class="form-group col-md-6">
                                <label for="gender">Select Category:</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="" disabled selected>Select Category</option>
                                    <?php 
                                        $conn=mysqli_connect("localhost","root","","hms");
                                        $sql="SELECT DISTINCT(category) FROM medical_equipments;";
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo "<option value='".$row['category']."'>".$row['category']."</option>";
                                        }
                                     ?>
                                </select>
                            </div>