<?php 
    if($_GET["date"]){
    $school = $detail[2];
    $class = $detail[3];

    $sql = "SELECT enrollment_number, name FROM student WHERE `school` LIKE '$school' AND `class` LIKE '$class'";

    $result = mysqli_query($conn, $sql);
    $students = array();
    while($student = mysqli_fetch_assoc($result)){
        $students[] = array($student["name"], $student["enrollment_number"]);
    }

    $date = $_GET["date"];
    $tb = "$school". "_" . "$class";
    $sql = "SELECT * FROM $tb WHERE date like $date";
    $result = mysqli_query($conn, $sql);
    $attendance = array();
    if($att = mysqli_fetch_assoc($result)){
        foreach($students as $stu){
            $temp = array();
            $temp[] = $att[$stu];
        }
        $attendance = $temp;
    }
}
?>


<div class="row">
     <div class="col-lg-12">
        <div class="card">
            <div>

                <div class="card-header">
                        <label id="date" name="date" class="card-title mb-0">Date: </>           
                        <select name="date" id="date">
                            <option value="1" selected>
                                <?php
                                $currentDate = date("Y-m-d");
                                echo "$currentDate";
                                ?>
                            </option>
                            
                        </select>
                </div>
            </div>
            <table class="table table-nowrap">
    <thead>
        <tr>
            <th scope="col">SR NO</th>
            <th scope="col">Enrollment Number</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
        </div>
        
        <!-- end card -->
         
    </div>
        <!-- end col -->
         
</div>