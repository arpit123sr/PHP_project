<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $comment = $_POST["comment"];

    // Database connection configuration
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "userdata";

    // Create a connection to the database
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert data into the table
    $sql = "INSERT INTO userdetail (username, email, mobile, comment) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $mobile, $comment);

    if ($stmt->execute()) {
        echo "Data submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
header("Location: view_details.php");
exit();
?>
