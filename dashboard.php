<!-- User dashboard -->

<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
    exit;
}
?>

<h2>Welcome, <?php echo $_SESSION["email"]; ?>!</h2>
<a href="auth/logout.php">Logout</a>