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
    $date = $_POST['date'];
    $reservationStatus = $_POST['reservationStatus'];
    $journeyFrom = $_POST['journeyFrom'];
    $journeyTo = $_POST['journeyTo'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $paymentDetails = $_POST['paymentDetails'];

    // SQL query to insert data
    $sql = "INSERT INTO reservations (date, reservationStatus, journeyFrom, journeyTo, name, sex, age, paymentDetails)
            VALUES ('$date', '$reservationStatus', '$journeyFrom', '$journeyTo', '$name', '$sex', '$age', '$paymentDetails')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to confirmation page after insertion
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>
