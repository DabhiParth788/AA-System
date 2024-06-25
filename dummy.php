<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "attendance";

    // Connect to the database
    $conn = mysqli_connect($servername, $username, $pass, $database);

    if(!$conn){
        die("Sorry, we failed to connect: " . mysqli_connect_error());
    }
    echo "We Connected Successfully";

    echo "<br>";

    // Insert dummy data into admin table
    $sql = "INSERT INTO admin (name, email, password, school, phone_no) VALUES 
            ('Admin One', 'admin1@school.com', 'password123', 'Springfield Elementary', '555-0001'),
            ('Admin Two', 'admin2@school.com', 'password456', 'Shelbyville High', '555-0002')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data inserted into 'admin' table successfully";
    }else{
        echo "Error occurred while inserting data into 'admin' table ---> " . mysqli_error($conn);
    }

    echo "<br>";

    // Insert dummy data into class table
    $sql = "INSERT INTO class (name, teacher_name, school) VALUES 
            ('Math 101', 'John Doe', 'Springfield Elementary'),
            ('Science 202', 'Jane Smith', 'Springfield Elementary'),
            ('History 303', 'Jim Brown', 'Shelbyville High')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data inserted into 'class' table successfully";
    }else{
        echo "Error occurred while inserting data into 'class' table ---> " . mysqli_error($conn);
    }

    echo "<br>";

    // Insert dummy data into teacher table
    $sql = "INSERT INTO teacher (name, email, school, class, phone_no, password) VALUES 
            ('John Doe', 'johndoe@school.com', 'Springfield Elementary', 'Math 101', '555-1234', 'johnpassword'),
            ('Jane Smith', 'janesmith@school.com', 'Springfield Elementary', 'Science 202', '555-5678', 'janepassword'),
            ('Jim Brown', 'jimbrown@school.com', 'Shelbyville High', 'History 303', '555-8765', 'jimpassword')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data inserted into 'teacher' table successfully";
    }else{
        echo "Error occurred while inserting data into 'teacher' table ---> " . mysqli_error($conn);
    }

    echo "<br>";

    // Insert dummy data into student table
    $sql = "INSERT INTO student (name, enrollment_number, school, class, gender, email, password) VALUES 
            ('Bart Simpson', '0001', 'Springfield Elementary', 'Math 101', 'M', 'bartsimpson@school.com', 'bartpassword'),
            ('Lisa Simpson', '0002', 'Springfield Elementary', 'Science 202', 'F', 'lisasimpson@school.com', 'lisapassword'),
            ('Milhouse Van Houten', '0003', 'Springfield Elementary', 'Math 101', 'M', 'milhouse@school.com', 'milhousepassword'),
            ('Nelson Muntz', '0004', 'Springfield Elementary', 'History 303', 'M', 'nelson@school.com', 'nelsonpassword'),
            ('Martin Prince', '0005', 'Springfield Elementary', 'Science 202', 'M', 'martin@school.com', 'martinpassword')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data inserted into 'student' table successfully";
    }else{
        echo "Error occurred while inserting data into 'student' table ---> " . mysqli_error($conn);
    }

    echo "<br>";

    mysqli_close($conn);
?>
