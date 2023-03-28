<?php
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $first = test_input($_POST["fname"]);
    $last = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

    // Check that required fields are not empty
    if (empty($first) || empty($last) || empty($email) || empty($subject) || empty($message)) {
        echo "error";
    } else {
        // Insert data into database
        $servername = "localhost";
        $username = "samgray";
        $password = "qhfQpSI1nQ6@qd0v";
        $dbname = "samgray_portfolio";

        // Create database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check for errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL statement
        $stmt = $conn->prepare("INSERT INTO messages (first, last, email, subject, message) VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("sssss", $first, $last, $email, $subject, $message);
        $stmt->execute();

        // Check for errors
        if ($stmt->error) {
            echo "error";
        } else {
            echo "success";
        }

        // Close database connection
        $stmt->close();
        $conn->close();
    }
}

// Helper function to sanitize form data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>