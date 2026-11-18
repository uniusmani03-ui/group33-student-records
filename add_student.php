<?php
include 'db_connect.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, course, email) VALUES ('$name', '$course', '$email')";
    if ($conn->query($sql) === TRUE) {
        $message = "Student added successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
        }
        button, a {
            padding: 10px 15px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button {
            background: #333;
            color: white;
        }
        a {
            background: #ccc;
            color: black;
        }
        .message {
            margin-bottom: 15px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Student</h1>

        <?php if ($message): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Course</label>
            <input type="text" name="course" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <button type="submit">Add Student</button>
            <a href="index.php">Back</a>
        </form>
    </div>
</body>
</html>