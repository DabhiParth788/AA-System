<?php 
    if($_SESSION["login"] and $_SESSION["teacher"]){
        $school = $detail[2];
        $class = $detail[3];

        $sql = "SELECT * FROM student WHERE `school` LIKE '$school' AND `class` LIKE '$class'";

        $result = mysqli_query($conn, $sql);
        $students = array();
        while($student = mysqli_fetch_assoc($result)){
            $students[] = array($student["name"], $student["enrollment_number"], $student["school"], $student["class"], $student["gender"], $student["email"], $student["phone_no"]);
        }

    }
?>
<!-- Hoverable Rows -->
<div class="card">
<table class="table table-hover table-nowrap mb-0 ">
    <thead>
        <tr>

            <th scope="col">Enrollment Number</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>210210116029</td>
            <td>Harshit Dodi</td>
            <td>Dodi@gmail.com</td>
            <td>1234567890</td>
            <td><a href="javascript:void(0);">More</a></td>
        </tr>
        <tr>

            <td>210210116031</td>
            <td>Parth The Great</td>
            <td>xyz@gmail.com</td>
            <td>5252552000</td>
            <td><a href="javascript:void(0);">More</a></td>
</tr>
    </tbody>
</table>
</div>