<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-image: url('images/image1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            min-height: 100vh;
            margin: 20;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff; /* Text color for better readability */
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .container h2 {
            margin-bottom: 20px;
            color: red; /* Heading color */
        }

        /* Form styles */
        .form-group label {
            color: red; /* Form label color */
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.1); /* Transparent input background */
            color: #fff; /* Text color for input fields */
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7); /* Placeholder color */
        }

        .btn-primary {
            background-color: #007bff; /* Change the primary button color */
            border-color: #007bff; /* Change the primary button border color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Change the primary button hover color */
            border-color: #0056b3; /* Change the primary button hover border color */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">User Details Form</h2>
        <form action="submit.php" method="post" id="userDetailsForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
               <!-- important -->
                <button type="button" class="btn btn-secondary" onclick="clearForm()">Clear</button>
            </div>
        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function clearForm() {
            document.getElementById("userDetailsForm").reset();
        }
    </script>
</body>

</html>
