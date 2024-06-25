<?php 
if($_SESSION["login"] and $_SESSION["teacher"]){
    $school = $detail[2];
    $class = $detail[3];

    $sql = "SELECT enrollment_no, name FROM student WHERE `school` LIKE '$school' AND `class` LIKE '$class'";

    $result = mysqli_query($conn, $sql);
    $students = array();
    while($student = mysqli_fetch_assoc($result)){
        $students[] = array($student["name"], $student["enrollment_no"]);
    }
?>
<div class="card p-4 m-5">
                        <h1 class="text-center fs-1">Student Table</h1>
                        <hr>
                        <form action="" method="POST">
                        <table class="table table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Sr.No.</th>
                                    <th scope="col">Enrollment No</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Present</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $index = 0;
                                foreach($students as $student){ 
                                    $index += 1?>
                                <tr>
                                    <td><?php echo $index; ?></td>
                                    <td><?php echo $student[1]; ?></td>
                                    <td><?php echo $student[0]; ?></td>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="activetableCheck01" name="<?php echo $student[1] ?>" checked>
                                            <label class="form-check-label" for="activetableCheck01"
                                                cursor="pointer"></label>
                                        </div>
                                    </th>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <input class="btn btn-primary btn-lg mt-3" type="submit" name="attendance_submit" value="Submit" />
                        </div>
                    </form>
                    </div>
    
<?php 
    if(isset($_POST["attendance_submit"])){
        $tb = "$school". "_" . "1_C";
        $sql = "INSERT INTO $tb (";
        $back = "(";
        $total = 0;
        foreach($students as $student){
            $en = $student[1];
            if(isset($_POST["$en"])){
                $val = TRUE;
                $total += 1;
                $sql = $sql . "`$en`, ";
                $back = $back . "$val, ";
            }
        }
        $sql = $sql . "`total`) VALUES " . $back . "$total)";
        $check = "SHOW TABLES LIKE '$tb'";
        $result = mysqli_query($conn, $check);
        if($result and mysqli_num_rows($result) == 1){
            mysqli_query($conn, $sql);
            echo "<script type='text/javascript'>
                    window.location = 'teacher.php?page=takeAttendance';
                  </script>";
        }
        else{
            $sql1 = "CREATE TABLE $tb (`date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP PRIMARY KEY, ";
            foreach($students as $student){
                $en = $student[1];
                $sql1 = $sql1 . "`$en` BOOLEAN DEFAULT FALSE, ";
            }
            $sql1 = $sql1 . "`total` int NOT NULL)";
            if(mysqli_query($conn, $sql1)){
                echo "Table created";
                if(mysqli_query($conn, $sql)){
                    echo "<script type='text/javascript'>
                    window.location = 'teacher.php?page=takeAttendance';
                    </script>";
                }
            }
        }
    }

}
?>