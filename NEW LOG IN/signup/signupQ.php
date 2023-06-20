<?php
require('conn.php');

session_start();
$errors = 0;
$firstNameErr = $lastNameErr = $emailErr = $genderErr = $passErr = $ageErr = $msgErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = isset($_POST["firstname"]) ? mysqli_real_escape_string($conn, $_POST["firstname"]) : '';
    $lastname = isset($_POST["lastname"]) ? mysqli_real_escape_string($conn, $_POST["lastname"]) : '';
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST["password"]) : '';
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : '';
    $age = isset($_POST["age"]) ? (int)$_POST["age"] : 0;
    $gender = isset($_POST["gender"]) ? mysqli_real_escape_string($conn, $_POST["gender"]) : '';

    // Perform validation on form fields
    $passErr = '<div class="alert alert-danger" role="alert">Password is required</div>';

    if (empty($firstname)) {
        $firstNameErr = "ali";
        $errors++;
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
        $firstNameErr = '<div class="alert alert-danger" role="alert">First name must contain only letters and spaces.</div>';
        $errors++;
    }

    if (empty($lastname)) {
        $lastNameErr = '<div class="alert alert-danger" role="alert">Last name is required</div>';
        $errors++;
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
        $lastNameErr = '<div class="alert alert-danger" role="alert">Last name must contain only letters and spaces</div>';
        $errors++;
    }

    if (empty($password)) {
        $passErr = '<div class="alert alert-danger" role="alert">Password is required</div>';
        $errors++;
    }

    if (empty($email)) {
        $emailErr = '<div class="alert alert-danger" role="alert">Email is required</div>';
        $errors++;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = '<div class="alert alert-danger" role="alert">Invalid email format.</div>';
        $errors++;
    }

    if (empty($age)) {
        $ageErr = '<div class="alert alert-danger" role="alert">Age is required</div>';
        $errors++;
    } elseif (!is_int($age) || $age <= 0) {
        $ageErr = '<div class="alert alert-danger" role="alert">Invalid Age format.</div>';
        $errors++;
    }

    if (empty($gender)) {
        $genderErr = '<div class="alert alert-danger" role="alert">Your Gender is Required</div>';
        $errors++;
    }

    // If there are no validation errors, proceed with registration
    if ($errors > 0) {
        // Registration failed
        header('location: signup.php?msg=failed');
    } else {
        $sql = "SELECT * FROM user WHERE email = ? ";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 0) {
            $insertStmt = mysqli_prepare($conn, "INSERT INTO user (firstname, lastname, password, email, age, gender) VALUES (?, ?, ?, ?, ?, ?)");
            mysqli_stmt_bind_param($insertStmt, "ssssis", $firstname, $lastname, $password, $email, $age, $gender);
            mysqli_stmt_execute($insertStmt);

            if (mysqli_stmt_affected_rows($insertStmt) > 0) {
                // Registration successful
                header('location: ../login.html');
                exit;
            } else {
                // Registration failed
                $msgErr = "Registration failed. Please try again.";
            }
        } else {
            $msgErr = "This person already exists.";
            header('location: signup.php?msg=This person already exists');
                exit;
        }
    }
}
?>
