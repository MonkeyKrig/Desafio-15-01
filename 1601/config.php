<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Connect to the database
    $conn = mysqli_connect("host", "username", "password", "database");

    // Insert the form data into the table
    $sql = "INSERT INTO form_submissions (name, email, message) VALUES ('$name', '$email', '$message')";
    mysqli_query($conn, $sql);

    // Close the connection
    mysqli_close($conn);

    // Redirect to the thank you page
    header("Location: thank-you.php");
}

?>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form method="post" action="form.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>