<?php
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
body  {
    font-family: 'Prompt', sans-serif;
  background-image: url("https://images.unsplash.com/photo-1542370512244-4a99a9ab9e28?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=60");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;

}
.btn {
    font-family: 'Prompt', sans-serif;
}
</style>
<body>
    
    <div class="header">
        <h2>สมัครสมาชิก</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">ชื่อผู้ใช้งาน</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">อีเมลล์</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">รหัสผ่าน</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">ยืนยืนรหัสผ่าน</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">ตกลง</button>
        </div>
        <p>เป็นสมาชิกแล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
    </form>

</body>
</html>