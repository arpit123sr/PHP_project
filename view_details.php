<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
         body {
            background-image: url('images/imp1.avif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .container h2 {
            margin-bottom: 20px;
        }

        /* Table styles */
        .table-container {
            overflow: hidden;
        }

        .table {
            width: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff; /* Set table text color to white */
        }

        .table th,
        .table td {
            border-color: #fff;
            color: #fff; /* Set header and cell text color to white */
        }

        .table th {
            background-color: rgba(0, 0, 0, 0.4); /* Darken the header background */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Additional custom styles can be added here */
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center" style="color:red">User Details</h2>

        <!-- Add the search bar -->
        <div class="form-group">
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
        </div>

        <?php
        // Database connection configuration
        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $database = "userdata";

        // Create a connection to the database
        $conn = new mysqli($servername, $username_db, $password_db, $database);

        // Check for connection errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve user details from the database
        $sql = "SELECT * FROM userdetail";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $row["username"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["mobile"] . '</td>
                        <td>' . $row["comment"] . '</td>
                    </tr>';
            }
            echo '</tbody>
                </table>';
        } else {
            echo "No user details found.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <!-- Include Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Add JavaScript to handle table filtering -->
    <script>
        $(document).ready(function () {
            $("#searchInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("table tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
</body>
</html>
