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