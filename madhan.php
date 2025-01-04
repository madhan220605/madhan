<?php
// Start session to store user data
session_start();

// Database connection (replace with your credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form inputs
$roll_no = $_POST['roll_no'];
$password = $_POST['password'];
$dob = $_POST['dob'];

// Validate inputs
if (empty($roll_no) || empty($password) || empty($dob)) {
    die("All fields are required!");
}

// Check credentials in the database
$sql = "SELECT * FROM users WHERE roll_no = ? AND password = ? AND dob = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $roll_no, $password, $dob);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login successful
    $_SESSION['user'] = $roll_no;
    echo "Login successful! Welcome, $roll_no.";
    // Redirect to dashboard
    header("Location: dashboard.php");
} else {
    // Invalid credentials
    echo "Invalid credentials. Please try again.";
}

// Close database connection
$stmt->close();
$conn->close();
?>
