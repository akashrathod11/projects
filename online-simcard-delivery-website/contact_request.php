<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Table</title>

    <style>
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .styled-table th {
            background-color: #f2f2f2;
        }

        .styled-table tbody tr:hover {
            background-color: #f5f5f5;
        }

        @media (max-width: 600px) {
            .styled-table {
                font-size: 14px;
            }

            .styled-table th,
            .styled-table td {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>
<h1 style="text-align:center;">Contact request</h1>
<?php
// Establishing a connection to the database
$conn = mysqli_connect("localhost", "root", "", "oscd") or die("Unable to connect");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all data from the 'contact' table
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

// Check if there are any rows in the result
if (mysqli_num_rows($result) > 0) {
    echo "<div style='overflow-x:auto;'>";
    echo "<table class='styled-table'>";
    echo "<thead><tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Timestamp</th></tr></thead>";
    echo "<tbody>";

    // Fetch each row from the result and display it in the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["subject"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "<td>" . $row["timestamp"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "No records found";
}

// Close the connection
mysqli_close($conn);
?>

</body>
</html>
