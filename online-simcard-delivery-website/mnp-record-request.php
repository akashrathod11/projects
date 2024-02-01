<?php
$conn = mysqli_connect("localhost", "root", "", "oscd") or die("unable to connect");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the mnp_request table
$sql = "SELECT simcard, name, phone, email, area, city, state, pincode, time, date FROM mnp_request";
$result = mysqli_query($conn, $sql);

// Check if there are any rows
if (mysqli_num_rows($result) > 0) {
    echo "<html>";
    echo "<head>";
    echo "<style>";
    echo "body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    // Display data in a table
    echo "<div class='container'>";
    echo "<h1>MNP Request Records</h1>";
    echo "<table>";
    echo "<tr><th>SIM Card</th><th>Name</th><th>Phone</th><th>Email</th><th>Area</th><th>City</th><th>State</th><th>Pincode</th><th>Time</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["simcard"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["area"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["state"] . "</td>";
        echo "<td>" . $row["pincode"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>"; // End of container

    echo "</body>";
    echo "</html>";
} else {
    echo "No records found";
}

// Close connection
mysqli_close($conn);
?>
