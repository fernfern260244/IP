<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        // $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        // if ($password_1 != $password_2) {
        //     array_push($errors, "The two passwords do not match");
        // }

        $user_check_query = "SELECT * FROM member WHERE member_name = '$username' OR member_email = '$email'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['member_name'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['member_email'] === $email) {
                array_push($errors, "Email already exists");
            }
            
            $_SESSION['unsuccess'] = "This username e-mail already exists.";
            header('location: createAccount.php');
        }
        
        if (count($errors) == 0) {
            // $password = md5($password_1);

            $sql = "INSERT INTO member (member_name, member_email, member_password) VALUES ('$username', '$email', '$password_1')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } 
    }

?>