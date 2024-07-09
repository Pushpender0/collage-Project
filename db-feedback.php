<?php



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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $feedback = $_POST['feedback'];

    // SQL query to insert data
    $sql = "INSERT INTO feedback (name, email, contactNo, feedback )
            VALUES ('$name', '$contactNo', '$email', '$feedback' )";

    if ($conn->query($sql) === TRUE) {
        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>