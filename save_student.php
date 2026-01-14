<?php
include 'connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$course = $_POST['course'];
$year = $_POST['year'];
$email = $_POST['email'];

$sql = "INSERT INTO students (name, age, course, year_of_study, email)
        VALUES ('$name', '$age', '$course', '$year', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Student data saved successfully.<br>";
    echo "<a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
