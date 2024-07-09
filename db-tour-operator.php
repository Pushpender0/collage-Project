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

    // Retrieve form data
    $operatorName = $_POST['operatorName'];
    $operatorID = $_POST['operatorID'];
    $location = $_POST['locationByOp'];
    $contactNo = $_POST['contactNo'];
    $operatorEmail = $_POST['operatorEmail'];
    $operatorAddress = $_POST['operatorAddress'];

    // SQL query to insert data
    $sql = "INSERT INTO tour_operators (operatorName, operatorID, locationByOp, contactNo, operatorEmail, operatorAddress)
            VALUES ('$operatorName', '$operatorID', '$location', '$contactNo', '$operatorEmail', '$operatorAddress')";

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