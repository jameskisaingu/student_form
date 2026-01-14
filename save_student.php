<?php
include 'connect.php';
if (isset($_POST['submit'])) {

    $name   = $conn->real_escape_string($_POST['name']);
    $age    = $conn->real_escape_string($_POST['age']);
    $course = $conn->real_escape_string($_POST['course']);
    $year   = $conn->real_escape_string($_POST['year']);
    $email  = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO students (name, age, course, year, email) 
            VALUES ('$name', '$age', '$course', '$year', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_students.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
