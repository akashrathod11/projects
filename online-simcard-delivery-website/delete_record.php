<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "oscd") or die("Unable to connect");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $recordId = $_GET['id'];

    // Perform the DELETE query
    $sql = "DELETE FROM user_order WHERE id = $recordId";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record deleted successfully'); window.location.href='view_records.php';</script>";

    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. 'id' parameter not found in the URL.";
}

// Close connection
mysqli_close($conn);
?>
