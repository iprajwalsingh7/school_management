<?php include 'includes/header.php'; ?>
<main>
    <h2>Add Student</h2>
    <form action="add_student.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
        <button type="submit" name="submit">Add Student</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'includes/db.php';

        $name = $_POST['name'];
        $age = $_POST['age'];
        $class = $_POST['class'];

        $sql = "INSERT INTO students (name, age, class) VALUES ('$name', '$age', '$class')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Student added successfully!</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>
</main>
</body>
</html>
