
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            /* width: 100%; */
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
            max-width: 1400px;
            /* margin: 20px auto; */
            /* padding: 20px; */
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>New Connection Records</h1>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "oscd") or die("Unable to connect");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch all records from the user_order table
    $sql = "SELECT * FROM user_order";
    $result = mysqli_query($conn, $sql);

    // Check if there are records
    if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Simcard</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Order Date</th>
                    <th>Order Time</th>
                    <th>Delete</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['simcard']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['area']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['state']}</td>
                    <td>{$row['pincode']}</td>
                    <td>{$row['order_date']}</td>
                    <td>{$row['order_time']}</td>
                    <td><button onclick=\"deleteRecord({$row['id']})\">Delete</button></td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close connection
    mysqli_close($conn);
    ?>

    <script>
        function deleteRecord(recordId) {
            if (confirm("Are you sure you want to delete this record?")) {
                // Redirect to a PHP script to handle the deletion (you can create this script)
                window.location.href = 'delete_record.php?id=' + recordId;
            }
        }
    </script>
</div>

</body>
</html>
