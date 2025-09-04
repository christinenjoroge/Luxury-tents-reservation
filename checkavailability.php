<?php
include "dbconnection.php";

// 2. Get form values
$tentType = $_POST['tent_type'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = (int)$_POST['guests'];

// 3. Get total tents available from inventory
$stmt = $conn->prepare("SELECT total FROM tent_inventory WHERE tent_type = ?");
$stmt->bind_param("s", $tentType);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$totalTents = $row['total'] ?? 0;

// 4. Get total tents already booked for that period
$stmt = $conn->prepare("
  SELECT SUM(tents) AS booked_tents 
  FROM reservation 
  WHERE tenttype = ? AND (
    (checkindate < ? AND checkoutdate > ?)
  )
");
$stmt->bind_param("sss", $tentType, $checkout, $checkin);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$bookedTents = $row['booked_tents'] ?? 0;

// 5. Calculate available tents
$availableTents = $totalTents - $bookedTents;

// 6. Show result
if ($availableTents > 0) {
    echo "<h3>$tentType is available!</h3>";
    echo "<p>We have $availableTents tent(s) available for your selected dates.</p>";
} else {
    echo "<h3>Sorry, $tentType is fully booked on those dates.</h3>";
}

$conn->close();