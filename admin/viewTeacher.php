<?php
    $sql = "SELECT * FROM `teacher` WHERE `school` LIKE '$detail[2]'";
    $teacherDetail = array();
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $teacherDetail[] = array($row["name"], $row["email"], $row["school"], $row["class"], $row["phone_no"]);
    }

?>

<!-- Hoverable Rows -->
<div class="card">
<table class="table table-hover table-nowrap mb-0 ">
    <thead>
        <tr>
            <th scope="col">sr no.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Class</th>
            <th scope="col">Contact Number</th>
        </tr>
    </thead>
    <?php 
    $sr = 1;
        if(mysqli_num_rows($result) > 0){
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
        }else{
            echo "<tr><td colspan='5'>No Data Found</td></tr>";
        }
    ?>
</table>
</div>