<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Gogobooking</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link href="style1.csss" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
        body {
            font-family: 'Kanit', sans-serif;

        }
        .navbar {
            font-size: 18px;
            font-family: 'Kanit', sans-serif;
        }

        .navbar li:hover{
            transform: scale(1.1);
        }
        .nav-link{
            font-size: 18px;
        }
        strong {
            color: white;
        }

    </style>

    <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
<a class="navbar-brand" href="#">
            <img src="img/333.png" width="90px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link " href="Index2.php">หน้าแรก </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="location.html">แนะนำสถานที่ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="hotel.html">แนะนำที่พัก</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               ภาค
              </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="north.html">เหนือ</a>
                        <a class="dropdown-item" href="Bkk.html">กลาง</a>
                        <a class="dropdown-item" href="esan.html">อีสาน</a>
                        <a class="dropdown-item" href="South.html">ใต้</a>

                    </div>

                </li>

            </ul>

            <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <p><a  href="#" class="btn btn-danger btn-lg ">
          <span class="fa fa-user" ></span>
        </a> <strong><?php echo $_SESSION['username']; ?></strong></p>



        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p><a href="index.php?logout='1'" >ออกจากระบบ</a></p>
        <?php endif ?>

    </div>

    </nav>
    <br>

        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <div class="form-header">
                                <h1>ระบบจองที่พัก</h1>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="เมือง, โรงแรม, ที่พัก...">
                                    <span class="form-label">ปลายทาง</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" required>
                                            <span class="form-label">เช็คอิน</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" required>
                                            <span class="form-label">เช็คเอาท์</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" required>
											<option value="" selected hidden>ห้องนอน</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">ห้องนอน</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" required>
											<option value="" selected hidden>ผู้ใหญ่</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">ผู้ใหญ่</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" required>
											<option value="" selected hidden>เด็ก</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">เด็ก</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="อีเมลล์">
                                            <span class="form-label">อีเมลล์</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" placeholder="เบอร์โทรศัพท์">
                                            <span class="form-label">เบอร์โทรศัพท์</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">จองตอนนี้</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <script src="js/jquery.min.js"></script>
        <script>
            $('.form-control').each(function() {
                floatedLabel($(this));
            });

            $('.form-control').on('input', function() {
                floatedLabel($(this));
            });

            function floatedLabel(input) {
                var $field = input.closest('.form-group');
                if (input.val()) {
                    $field.addClass('input-not-empty');
                } else {
                    $field.removeClass('input-not-empty');
                }
            }
        </script>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>