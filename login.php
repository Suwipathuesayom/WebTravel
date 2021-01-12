<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
.btn{
    font-family: 'Prompt', sans-serif;

}
</style> 
<body>
    
    <div class="header">
        <h2>ล็อคอิน</h2>
    </div>

    <form action="login_db.php" method="post">
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
            <label for="username">ชื่อผู้ใช้</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">เข้าสู่ระบบ</button>
        </div>
        <p>ยังไม่ได้สมัครสมาชิก? <a href="register.php">Sign Up</a></p>
    </form>

</body>
</html>