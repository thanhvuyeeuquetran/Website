<?php
// Start the session if not already started
session_start();

// Perform your logout logic here (destroy session, clear cookies, etc.)

// Return a response (you can customize this based on your needs)
header('Content-Type: application/json');
echo json_encode(['status' => 'success', 'message' => 'Logout successful']);

// Make sure no further output is sent
exit();
?>
