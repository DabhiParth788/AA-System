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

// Classes data are available