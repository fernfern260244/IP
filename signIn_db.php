<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['signin'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($email)) {
            array_push($errors, "Email is requird");
        }
        if (empty($password)) {
            array_push($errors, "Password is requird");
        }

        $user_check_query = "SELECT * FROM member WHERE member_email = '$email' AND member_password = '$password'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['member_email'] === $email and $result['member_password'] === $password) {
                header('location: index.php');
            }
            

           
        }
        else {
            $_SESSION['Unsuccess'] = "Password is incorrect.";
            header('location: signIn.php');
        }

    }
?>
