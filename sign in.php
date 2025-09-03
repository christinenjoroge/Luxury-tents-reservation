<?php
include "dbconnection.php";

include "includes/header.php";
?>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 100%; max-width: 400px;" >
            <div class="card-header text-center">
                <h4>Admin Login</h4>
            </div>
            <div class="card-body">
                <form action="admin_login.php" method="POST">
                    <!-- Email input -->
                    <div class="mb-3">
                        <input type="email" name="Emailaddress" class="form-control" placeholder="Email" required>
                    </div>
                    
                    <!-- Password input -->
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    
                    <!-- Hidden role input -->
                    <input type="text" name="role" value="user"hidden>

                    <!-- Submit button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger btn-lg">login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




