<?php include 'includes/header.php'; ?>
<main>
    <h2>View Students</h2>
    <?php
    include 'includes/db.php';

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Age</th><th>Class</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['class'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No students found.</p>";
    }

    $conn->close();
    ?>
</main>
</body>
</html>
