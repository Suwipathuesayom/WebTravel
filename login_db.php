<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "ต้องระบุชื่อผู้ใช้");
        }

        if (empty($password)) {
            array_push($errors, "ต้องระบุรหัสผ่าน");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM ures WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "";
                header("location: Index2.php");
            } else {
                array_push($errors, " username หรือ password อีกครั้ง");
                $_SESSION['error'] = "username  หรือ password ไม่ถูกต้อง";
                header("location: login.php");
            }
        }
    }

?>