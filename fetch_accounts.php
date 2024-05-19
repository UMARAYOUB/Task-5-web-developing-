<?php
include 'db_connect.php';

// Fetch pending account requests from the database
$result = $conn->query("SELECT * FROM accounts WHERE status='pending'");

// Display each account request
while ($row = $result->fetch_assoc()) {
    echo "<div class='account'>";
    echo "<p>Name: " . htmlspecialchars($row['name']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($row['email']) . "</p>";
    echo "<form action='approve_account.php' method='POST'>";
    echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
    echo "<button type='submit'>Approve</button>";
    echo "</form>";
    echo "</div>";
}
?>
