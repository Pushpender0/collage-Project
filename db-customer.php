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
// i have to fix this when i start!!!!!!!
    $Cname = $_POST['name'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $cAddress = $_POST['address'];
    $fromLocation = $_POST['fromLocation'];
    $toLocation = $_POST['toLocation'];
    $cStatus = $_POST['status'];

    // SQL query to insert data
    $sql = "INSERT INTO customer_tourist (Cname, contactNo, email, caddress, fromLocation, toLocation, cStatus)
            VALUES ('$Cname', '$contactNo', '$email', '$cAddress', '$fromLocation', '$toLocation', '$cStatus')";

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