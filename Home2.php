<?php
session_start();

// Check if the user is not authenticated (not logged in)
if (!isset($_SESSION['email'])) {
    echo "error in sending";
    header("Location: signup.php"); // Redirect to the login page if not authenticated
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'link.php' ?>
</head>
<body>
    <a href="signout.php" class="btn btn-primary m-3" id="logoutBtn">Logout</a>

    <!-- Your other HTML content here -->

    <script>
        // Add JavaScript to prevent going back after logout
        document.getElementById('logoutBtn').addEventListener('click', function (event) {
            event.preventDefault();
            window.location.href = 'signout.php';
        });
    </script>
</body>
</html>