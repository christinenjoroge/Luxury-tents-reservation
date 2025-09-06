<?php
include 'dbconnection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "DELETE FROM reservation WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        header("Location: admin-dashboard.php?msg=deleted");
        exit();
    } else {
        echo "Error deleting reservation: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
