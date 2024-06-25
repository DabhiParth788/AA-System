<?php 
    if($_SESSION["login"] and $_SESSION["admin"]){
        $school = $detail[2];

        $sql = "SELECT name FROM teacher WHERE school LIKE '$school' AND class IS NULL";

        $result = mysqli_query($conn, $sql);
        $teacher = array();
        while($row = mysqli_fetch_assoc($result)){
            $teacher[] = $row["name"];
        }
    }
?>

<div class="card p-4 m-5">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="teacher_name" class="form-label">Teacher Name</label>
                                <br>
                                <select name="teacher_name" id="teacher_name">
                                    <?php 
                                        foreach($teacher as $item){
                                    ?>
                                        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="d-flex gap-5">
                                <div class="mb-3">
                                    <label for="std" class="form-label">Standard</label>
                                    <br>
                                    <select name="std" id="std">
                                        <?php 
                                            for($x = 1; $x < 13; $x++){
                                        ?>
                                        <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="div" class="form-label">Division</label>
                                    <br>
                                    <select name="div" id="div">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center">
                                <input class="btn btn-primary btn-lg" type="submit" name="class_add" value="Create Class" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>

<?php 
    if($_SESSION["login"] and isset($_POST["class_add"])){
        $teacher_name = sanitize_input($_POST["teacher_name"]);
        $std = sanitize_input($_POST["std"]);
        $div = sanitize_input($_POST["div"]);
        $class = $std . "_" . $div;

        $sql = "INSERT INTO class (name, teacher_name, school) VALUES ('$class', '$teacher_name', '$school')";

        mysqli_query($conn, $sql);
        
        $sql = "UPDATE teacher SET class = '$class' WHERE name = '$teacher_name'";
        if (mysqli_query($conn, $sql)) {
            echo "<h3>  Image uploaded successfully!</h3>";
            echo "<script type = \"text/javascript\">
                        window.location = (\"admin.php\")
                        </script>";
        } else {
            echo "<h3>  Failed to upload!</h3>";
        }
    }
?>