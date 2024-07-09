<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airbus";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name1'];
    $loginId = $_POST['Id'];
    $password = password_hash($_POST['pass'], PASSWORD_BCRYPT); // Hash the password
    $email = $_POST['email'];

    // Validate form data (you can add more validation as needed)
    if (empty($name) || empty($loginId) || empty($password) || empty($email)) {
        echo "Please fill out all fields.";
    } else {
        // Perform database insertion (use prepared statements to prevent SQL injection)
        $stmt = $conn->prepare("INSERT INTO administrator (name1,loginId,pass,email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $loginId, $password, $email);

        if ($conn->query($sql) === TRUE) {
            // Redirect to confirmation page
            header("Location: confirmation.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}

?>