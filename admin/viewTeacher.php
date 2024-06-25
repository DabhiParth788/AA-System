<?php echo "view teacher";?>
<?php
    include "include/dbconn.php";


    $sql = "SELECT * FROM `teacher` WHERE `school` LIKE '$detail[2]'";

    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
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
            <th scope="col">Contact Number</th>
            <th scope="col">Details</th>
        </tr>
    </thead>
    <?php 
    $sr = 1;
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$sr."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['class']."</td>";
                echo "<td>".$row['phone_no']."</td>";
                echo "</tr>";
                $sr++;
            }     
        }else{
            echo "<tr><td colspan='5'>No Data Found</td></tr>";
        }
        $conn ->close();

    ?>
</table>
</div>