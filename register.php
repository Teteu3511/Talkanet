<?php

    require_once "config/connection.php";
    require_once "config/session.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_post['submit'])) {

        $fullname = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        if($query = $db->prepare("SELECT * FROM users WHERE email = ?")) {

            $error = '';

            $query->bind_param('s', $email);
            $query-> execute();
            $query->store_result();

            if($query->num_rows > 0) {

                $error .= '<p class="error">The email address is already registered!</p>';

            } else {

                if(strlen($password) < 6) {

                    $error .= '<p class="error>Password must have at least 6 characters.</p>';

                } else {

                    if (empty($error) && ($password != $confirm_password)) {

                        $error .= '<p class="error">Password did not match</p>';

                    }

                }

            }

            

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h2>Register</h2>
                <p>Please fill this form to create an account.</p>
                <form action="" method="post">

                    <div class="form-group">

                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" required>

                    </div>

                    <div class="form-group">

                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required>

                    </div>

                    <div class="form-group">

                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>

                    </div>

                    <div class="form-group">

                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>

                    </div>

                    <div class="form-group">

                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <p>Already have an account? <a href="login.php">Login Here</a>.</p>

                    </div>

                </form>

            </div>

        </div>

    </div>
</body>
</html>
