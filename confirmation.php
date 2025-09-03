<?php
include "dbconnection.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $idNumber = $_POST['idnumber'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tentType = $_POST['tenttype'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $tents = $_POST['tents'];
    $guests = $_POST['guests'];

    // Insert query
    $sql = "INSERT INTO reservation (
        firstname, lastname, idnumber, dob, email, phone,
        tenttype, checkindate, checkoutdate, tents, guests
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssssssiii",
        $firstName, $lastName, $idNumber, $dob, $email, $phone,
        $tentType, $checkin, $checkout, $tents, $guests
    );

    // Debugging: check values before execution
    var_dump($firstName, $lastName, $idNumber);

    if ($stmt->execute()) {
        echo "<h3>Reservation successfully submitted!</h3>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
