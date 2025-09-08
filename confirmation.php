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
        "ssssssssssi",
        $firstName, $lastName, $idNumber, $dob, $email, $phone,
        $tentType, $checkin, $checkout, $tents, $guests
    );

    if ($stmt->execute()) {
          echo "<script>
    alert('Reservation successfully submitted!');
    window.location.href = 'reservation.php';
</script>";

    } 
    else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
