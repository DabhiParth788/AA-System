<?php
    $sql = "SELECT * FROM `teacher` WHERE `school` LIKE '$detail[2]'";
    $teacherDetail = array();
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $teacherDetail[] = array($row["name"], $row["email"], $row["school"], $row["class"], $row["phone_no"]);
    }

?>


<?php if (mysqli_num_rows($result) > 0): ?>
    <div class="card">
    <!-- Table is displayed only if there is data -->
    <table class="table table-hover table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">sr no.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Class</th>
                <th scope="col">Contact Number</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $sr = 1;
        foreach($teacherDetail as $teacher){
            echo "<tr>";
            echo "<td>".$sr."</td>";
            echo "<td>".$teacher[0]."</td>";
            echo "<td>".$teacher[1]."</td>";
            echo "<td>".$teacher[3]."</td>";
            echo "<td>".$teacher[4]."</td>";
            echo "</tr>";
            $sr++;
        }     
        ?>
        </tbody>
    </table>
<?php else: ?>
    <!-- Message is displayed if there is no data -->
    <div class="alert border-0 alert-danger material-shadow" role="alert">
    <strong>No teachers</strong> found for this school.
        Please <strong>register new Teacher </strong>  <br> <a href="?page=addTeacher">Add New Teacher here</a> -check it out!
    </div>
<?php endif; ?>
</div>
