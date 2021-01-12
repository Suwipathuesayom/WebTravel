<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($username)) {
            array_push($errors, "โปรดระบุชื่อผู้ใช้");
        }
        if (empty($email)) {
            array_push($errors, "โปรดระบุอีเมลล์");
        }
        if (empty($password_1)) {
            array_push($errors, "โปรดระบุรหัสผ่าน");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "รหัสผ่านไม่ตรงกัน");
        }

        $user_check_query = "SELECT * FROM ures WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // ถ้ามี user อยู่ในระบบ
            if ($result['username'] === $username) {
                array_push($errors, "มีชื่อผู้ใช้อยู่แล้ว");
            }
            if ($result['email'] === $email) {
                array_push($errors, "มีอีเมลอยู่แล้ว");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO ures (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณได้เข้าสู่ระบบแล้ว";
            header('location: booking.php');
        } else {
            array_push($errors, "มีชื่อผู้ใช้หรืออีเมลแล้ว");
            $_SESSION['error'] = "มีชื่อผู้ใช้หรืออีเมลแล้ว";
            header("location: register.php");
        }
    }

?>