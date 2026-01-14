include 'connect.php';

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="table-container">
    <h2>Registered Students</h2>

    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Year of study</th>
            <th>Email</th>
        </tr>
 
        <?php
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['course']}</td>
                        <td>{$row['year']}</td>
                        <td>{$row['email']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No students found.</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>

