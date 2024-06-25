<?php
    if($_SESSION["login"] and $_SESSION["admin"]){
        $school = $detail[2];

        $sql = "SELECT * FROM class WHERE school LIKE '$school'";

        $result = mysqli_query($conn, $sql);
        $classes = array();
        while($class = mysqli_fetch_assoc($result)){
            $classes[] = array($class["name"], $class["teacher_name"], $class["school"]);
        }
    }
?>

<!-- Hoverable Rows -->
<div class="card">
<table class="table table-hover table-nowrap mb-0 ">
    <thead>
        <tr>
            <th scope="col">sr no.</th>
            <th scope="col">Class Name</th>
            <th scope="col">Teacher Name</th>
        </tr>
    </thead>
    <?php 
    $sr = 1;
        if(mysqli_num_rows($result) > 0){
            foreach($classes as $class){
                echo "<tr>";
                echo "<td>".$sr."</td>";
                echo "<td>".$class[0]."</td>";
                echo "<td>".$class[1]."</td>";
                echo "</tr>";
                $sr++;
            }     
        }else{
            echo "<tr><td colspan='5'>No Data Found</td></tr>";
        }
    ?>
</table>
</div>