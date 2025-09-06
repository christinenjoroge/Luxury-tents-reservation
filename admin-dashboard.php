<?php
include 'includes/header.php';
?>

<nav class="navbar navbar-dark bg-dark pt-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Luxury Tents Admin</a>
    <a href="admin_logout.php" class="btn btn-danger btn-sm">Logout</a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 bg-light p-3">
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="reservations.php">Reservations</a></li>
        <li class="nav-item"><a class="nav-link" href="add_reservation.php">Add Reservation</a></li>
        <li class="nav-item"><a class="nav-link" href="tents.php">Manage Tents</a></li>
      </ul>
    </div>

    <!-- Main Content -->
<div class="col-md-10 p-4">
  <h2 class="mb-4">Reservations</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>ID Number</th>
              <th>Date of Birth</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Tent Type</th>
              <th>Check-in</th>
              <th>Check-out</th>
              <th>Tents</th>
              <th>Guests</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'dbconnection.php';

            $query = "SELECT * FROM reservation";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . htmlspecialchars($row["firstname"]) . "</td>
                            <td>" . htmlspecialchars($row["lastname"]) . "</td>
                            <td>" . htmlspecialchars($row["idnumber"]) . "</td>
                            <td>" . htmlspecialchars($row["dob"]) . "</td>
                            <td>" . htmlspecialchars($row["email"]) . "</td>
                            <td>" . htmlspecialchars($row["phone"]) . "</td>
                            <td>" . htmlspecialchars($row["tenttype"]) . "</td>
                            <td>" . htmlspecialchars($row["checkindate"]) . "</td>
                            <td>" . htmlspecialchars($row["checkoutdate"]) . "</td>
                            <td>" . htmlspecialchars($row["tents"]) . "</td>
                            <td>" . htmlspecialchars($row["guests"]) . "</td>
                            <td>" . htmlspecialchars($row["created_at"]) . "</td>
                            <td>
                           <a href='delete.php?id=" . $row["id"] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure you want to delete this reservation?\")'>
  <i class='bi bi-trash'></i> Delete
</a>

                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='14' class='text-center'>No reservations found</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php include "includes/footer.php"; ?>
