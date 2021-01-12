
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>

    <title>Home Page</title>

    <link rel="stylesheet" href="style1.css">
</head>
<body>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Duotravel</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

  body {
  font-family: 'Kanit', sans-serif;
  margin-left: 120px;
  margin-right: 120px;
  padding: 0%;
}

.nav-link {
  font-family: 'Kanit', sans-serif;
}


.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
.card mb-4 shadow-sm,h6{
  margin-top: 10px;
  margin-left: 5px;
}
.btn-group:hover{
  transform: scale(1.1);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}
strong {
            color: white;
        }

.demo {
  opacity: 0.6;
}
.text-danger{
  margin-left: 15px;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.font-small {
        background-color: #e1f5fe;
}

   
button:hover {
        transform: scale(1.1);
}

 li:hover {
        transform: scale(1.2);
      }

</style>

</style>
<body>



<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
<a class="navbar-brand" href="#">
            <img src="img/333.png" width="90px" alt="Responsive image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link " href="index.php">หน้าแรก </a>
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


            <a class="nav-link btn btn-dark " href="Booking2.html">จองที่พัก</a>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาสถานที่หรืออื่นๆ" aria-label="ค้นหาสถานที่หรืออื่นๆ">
                <button class="btn btn-success my-2 my-sm-0" type="submit">ค้นหา</button>
            </form>
            </form>
                <a href="login.php" class="btn btn-secondary  fa fa-user" role="button" aria-disabled="true">เข้าสู่ระบบ</a>
            </div>

    </nav>


    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img height="600" width="300" src="img/01.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>WELCOME TO THAILAND!</h4>
                    <p>"ประเทศไทยมีอะไรน่าเที่ยวกว่าที่คุณคิด"</p>
                    <p>"credit : unsplash.com/@robinnoguier"</p>
                </div>
            </div>
            <div class="carousel-item">
                <img height="600" width="300" src="img/02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>BUTIFUL SEA!</h4>
                    <p>"ทะเลไทยสวยงามไม่แพ้ชาติใด"</p>
                    <p>"Credit : unsplash.com/@sumit_ac"</p>
                </div>
            </div>
            <div class="carousel-item">
                <img height="600" width="300" src="img/04.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>THAILAND IS AMEZING! </h4>

                    <p>"Credit : unsplash.com/@cadop"</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    </nav>
    <p>
        <h4><b>ข้อมูลแหล่งท่องเที่ยว</b></h4>
    </p>
    <hr>

<center>
    <iframe width="400" height="215" src="https://www.youtube.com/embed/TCVnAM60jh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="400" height="215" src="https://www.youtube.com/embed/kJc1MBHzbYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="400" height="215" src="https://www.youtube.com/embed/fT4rFo__5mE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </center>
        <Br>
        <certer>
        <div class="d-flex justify-content-center">
        <div class="" role="status">
                <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
                <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
                <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
                <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
                <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
                <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
               <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
               <span class="sr-only">Loading...</span>
        </div>
        </div>
    </div>
      </certer>
    <center><p><h3><u>รวมสถานที่ท่องเที่ยวแนะนำ</u></h3></p></center>
    <div class="row">
  <div class="column">
    <img  src="https://img.kapook.com/u/2018/sutasinee/03/w7.jpg"  style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <a href="#" class="text-dark"><p><b>หัวหิน: img/kapook.com </b></p></a>
</div>
  <div class="column">
    <img src="https://img.kapook.com/u/2019/Tanapol/january/march/Huahin/f5.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
    <a href="#" class="text-dark"><p><b>หัวหิน: img/kapook.com </b></p></a>
</div>
  <div class="column">
    <img src="https://img.kapook.com/u/2019/sutasinee/10/z10.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    <a href="#" class="text-dark"><p><b>เกาะขาม: img/kapook.com </b></p></a>
</div>
  <div class="column">
    <img src="https://img.kapook.com/u/2017/Tanapol/travel/august/krabi/kabei2.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    <a href="#" class="text-dark"><p><b>กระบี่: img/kapook.com </b></p></a>
</div>
</div>
<center><p><h3><u>รีวิวสถานที่ท่องเที่ยว</u></h3></p></center><div class="row row-cols-1 row-cols-md-2">

  <div class="col mb-4">
    <div class="card">
      <img src="https://cms.dmpcdn.com/travel/2019/02/13/465dae47-035b-40f9-923d-1b3e4768e203.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title text-danger"> #ที่เที่ยวใกล้กรุงเทพฯ </h5>
        <h5 class="card-title">เกาะขาม</h5>
        <p class="card-text">
      ตามเราไปรับลมทะเล เดินริมหาดน้ำใสๆ เที่ยวใกล้กรุงเทพฯ กันที่ เกาะขาม สัตหีบ กันแบบชิคๆ ชิลๆ ยืนสูดอากาศดีๆ บนสะพานไม้ แลนด์มาร์คสวยๆ</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="https://cms.dmpcdn.com/travel/2019/02/13/8fd0e818-0ebf-458e-bc35-54783cb4fea6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title text-danger"> #ที่เที่ยวใกล้กรุงเทพฯ </h5>
        <h5 class="card-title">CORO Field สวนผึ้ง</h5>
        <p class="card-text">    วันหยุดนี้ ใครที่กำลังมองหาที่เที่ยวใกล้กรุงเทพฯ ขับรถไม่นานแล้วล่ะก็ ต้องห้ามพลาดที่นี่เลยค่ะ CORO Field สวนผึ้ง ฟาร์มเมล่อนสไตล์ญี่ปุ่นแห่งเดียวในประเทศไทยที่ราชบุรีนี่เอง นอกจากจะมีกรีนเฮ้าส์ที่เราจะได้เห็นการเพาะปลูกพืชทั้งเมล่อน</p>
      </div>
    </div>
  </div>
</div>
      <center> <h1><a  class="badge badge-info">จองทัวร์กับเรา</a></h1></center>
<div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://pix6.agoda.net/hotelImages/399677/-1/062539107bfd62b6098c594f98d903ba.jpg?s=1024x768" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Thumbnail">

                        <h6><b>ท่องทะเลกระบี่-สุราษฎร์ธานี 4 วัน 2 คืน</b></h6>
                        <div class="text-secondary">
                        <ul>
                                <li>
                                ทัวร์ : Thailand [ ไทย ]
                                </li>
                                <li>
                                เที่ยวเมือง : Krabi (กระบี่)
                                </li>
                                <li>

                                Code : TMKBV-BS001
                                </li>
                                <li>
                                ประเภททัวร์ : ทัวร์ในประเทศ
                                </li>
                                <li>
                                ระยะเวลา : 4 วัน 2 คืน
                                </li>
                            </ul>
                            <p class="text-danger">ราคาเริ่มต้นที่ </p>

                             <h5><b> <p class="text-danger">฿8,800 </p></b></h5>
                        </div>
                        <div class="card-body" >
                            <h6 class="card-text"></h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="from.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">จองทันที</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="http://www.qualityb2bpackage.com/upload_photo/travel/1583474824.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" tle></title>
                        <h6><b>
                        เที่ยวสมุทรสงคราม-อัมพวา</b></h6>
                        <div class="ttt text-secondary">



                        <div class="text-secondary">
                        <ul>
                                <li>
                                ทัวร์ : Thailand [ ไทย ]
                                </li>
                                <li>
                                เที่ยวเมือง : Samut Songkhram (สมุทรสงคราม)
                                </li>
                                <li>

                                Code : TMSKM-BS001
                                </li>
                                <li>
                                ประเภททัวร์ : ทัวร์ในประเทศ
                                </li>
                                <li>
                                ระยะเวลา : 1 วัน 0 คืน
                                </li>
                            </ul>
                            <p class="text-danger">ราคาเริ่มต้นที่ </p>

                             <h5><b> <p class="text-danger">฿1999 </p></b></h5>
                        </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="from.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">จองทันที</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://d23e6w66rgwdf8.cloudfront.net/images/tours/id/6345/tour_6345_1572418351.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">

                        <h6><b>
แพ็คเกจทัวร์เชียงใหม่ เที่ยววันเดียว ดอยสุเทพ ดอยปุย โปรโมชั่นทัวร์ไทย</b></h6>
                        <div class="text-secondary">
                        <ul>
                                <li>
                                ทัวร์ : Thailand [ ไทย ]
                                </li>
                                <li>
                                เที่ยวเมือง : Chaing-mai (เชียงใหม่)
                                </li>
                                <li>

                                Code : GQNPT-BS001
                                </li>
                                <li>
                                ประเภททัวร์ : ทัวร์ในประเทศ
                                </li>
                                <li>
                                ระยะเวลา : 1 วัน 0 คืน
                                </li>
                            </ul>

                        <p class="text-danger">ราคาเริ่มต้นที่ </p>

                        <h5><b> <p class="text-danger">฿999 </p></b></h5>

                       

                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="from.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">จองทันที</a>
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<p><h5>credit image :https://travel.trueid.net</h5></p>
<p><h5>credit image :https://Kapook.com</h5></p>




<p>
    <div class="alert alert-dark" role="alert">
 ข้อมูลจังหวัดท่องเที่ยว
</div>
				<div class="row" style="font-size:12px; padding:20px;">
					<div class="item clearfix">
						<div class="desc">
							<strong>แอ่วเหนือ : </strong>
																	<a href="" target="_blank"> เชียงราย</a>
																	<a href="" target="_blank">, เชียงใหม่</a>
																	<a href="" target="_blank">, น่าน</a>
																	<a href="" target="_blank">, ปาย</a>
																	<a href="" target="_blank">, พะเยา</a>
																	<a href="" target="_blank">, แพร่</a>
																	<a href="" target="_blank">, แม่ฮ่องสอน</a>
																	<a href="" target="_blank">, ลำปาง</a>
																	<a href="" target="_blank">, ลำพูน</a>
																	<a href="" target="_blank">, อุตรดิตถ์</a>
														</div><!-- desc -->
					</div><!-- item -->
					<div class="item clearfix">
						<div class="desc">
							<strong>ท่องภาคกลาง : </strong>
																	<a href="" target="_blank"> กรุงเทพมหานคร</a>
																	<a href="" target="_blank">, กาญจนบุรี</a>
																	<a href="" target="_blank">, กำแพงเพชร</a>
																	<a href="" target="_blank">, เขาค้อ</a>
																	<a href="" target="_blank">, ชะอำ</a>
																	<a href="" target="_blank">, ชัยนาท</a>
																	<a href="" target="_blank">, ตาก</a>
																	<a href="" target="_blank">, นครนายก</a>
																	<a href="" target="_blank">, นครปฐม</a>
																	<a href="" target="_blank">, นครสวรรค์</a>
																	<a href="" target="_blank">, นนทบุรี</a>
																	<a href="" target="_blank">, ปทุมธานี</a>
																	<a href="" target="_blank">, ประจวบคีรีขันธ์</a>
																	<a href="" target="_blank">, ปราณบุรี</a>
																	<a href="" target="_blank">, พระนครศรีอยุธยา</a>
																	<a href="" target="_blank">, พิจิตร</a>
																	<a href="" target="_blank">, พิษณุโลก</a>
																	<a href="" target="_blank">, เพชรบุรี</a>
																	<a href="" target="_blank">, เพชรบูรณ์</a>
																	<a href="" target="_blank">, ราชบุรี</a>
																	<a href="" target="_blank">, ลพบุรี</a>
																	<a href="" target="_blank">, สมุทรปราการ</a>
																	<a href="" target="_blank">, สมุทรสงคราม</a>
																	<a href="" target="_blank">, สมุทรสาคร</a>
																	<a href="" target="_blank">, สระบุรี</a>
																	<a href="" target="_blank">, สวนผึ้ง</a>
																	<a href="" target="_blank">, สังขละบุรี</a>
																	<a href="" target="_blank">, สิงห์บุรี</a>
																	<a href="" target="_blank">, สุโขทัย</a>
																	<a href="" target="_blank">, สุพรรณบุรี</a>
																	<a href="" target="_blank">, หัวหิน</a>
																	<a href="" target="_blank">, อัมพวา</a>
																	<a href="" target="_blank">, อ่างทอง</a>
																	<a href="" target="_blank">, อุทัยธานี</a>
														</div><!-- desc -->
					</div><!-- item -->
					<div class="item clearfix">
						<div class="desc">
							<strong>เยือนถิ่นอีสาน : </strong>
																	<a href="" target="_blank"> กาฬสินธุ์</a>
																	<a href="" target="_blank">, ขอนแก่น</a>
																	<a href="" target="_blank">, เขาใหญ่</a>
																	<a href="" target="_blank">, ชัยภูมิ</a>
																	<a href="" target="_blank">, เชียงคาน</a>
																	<a href="" target="_blank">, นครพนม</a>
																	<a href="" target="_blank">, นครราชสีมา</a>
																	<a href="" target="_blank">, บึงกาฬ</a>
																	<a href="" target="_blank">, บุรีรัมย์</a>
																	<a href="" target="_blank">, มหาสารคาม</a>
																	<a href="" target="_blank">, มุกดาหาร</a>
																	<a href="" target="_blank">, ยโสธร</a>
																	<a href="" target="_blank">, ร้อยเอ็ด</a>
																	<a href="" target="_blank">, เลย</a>
																	<a href="" target="_blank">, วังน้ำเขียว</a>
																	<a href="" target="_blank">, ศรีสะเกษ</a>
																	<a href="" target="_blank">, สกลนคร</a>
																	<a href="" target="_blank">, สุรินทร์</a>
																	<a href="" target="_blank">, หนองคาย</a>
																	<a href="" target="_blank">, หนองบัวลำภู</a>
																	<a href="" target="_blank">, อำนาจเจริญ</a>
																	<a href="" target="_blank">, อุดรธานี</a>
																	<a href="" target="_blank">, อุบลราชธานี</a>
														</div><!-- desc -->
					</div><!-- item -->
					<div class="item clearfix">
						<div class="desc">
							<strong>เที่ยวตะวันออก : </strong>
																	<a href="" target="_blank"> เกาะกูด</a>
																	<a href="" target="_blank">, เกาะช้าง</a>
																	<a href="" target="_blank">, เกาะล้าน</a>
																	<a href="" target="_blank">, เกาะสีชัง</a>
																	<a href="" target="_blank">, เกาะเสม็ด</a>
																	<a href="" target="_blank">, เกาะหมาก</a>
																	<a href="" target="_blank">, จันทบุรี</a>
																	<a href="" target="_blank">, ฉะเชิงเทรา</a>
																	<a href="" target="_blank">, ชลบุรี</a>
																	<a href="" target="_blank">, ตราด</a>
																	<a href="" target="_blank">, ปราจีนบุรี</a>
																	<a href="" target="_blank">, พัทยา</a>
																	<a href="" target="_blank">, ระยอง</a>
																	<a href="" target="_blank">, สระแก้ว</a>
																	<a href="" target="_blank">, สัตหีบ</a>
														</div><!-- desc -->
					</div><!-- item -->
					<div class="item clearfix">
						<div class="desc">
							<strong>ล่องใต้ : </strong>
																	<a href="" target="_blank"> กระบี่</a>
																	<a href="" target="_blank">, เกาะพะงัน</a>
																	<a href="" target="_blank">, เกาะสมุย</a>
																	<a href="" target="_blank">, ชุมพร</a>
																	<a href="" target="_blank">, ตรัง</a>
																	<a href="" target="_blank">, นครศรีธรรมราช</a>
																	<a href="" target="_blank">, นราธิวาส</a>
																	<a href="" target="_blank">, ปัตตานี</a>
																	<a href="" target="_blank">, พังงา</a>
																	<a href="" target="_blank">, พัทลุง</a>
																	<a href="" target="_blank">, ภูเก็ต</a>
																	<a href="" target="_blank">, ยะลา</a>
																	<a href="" target="_blank">, ระนอง</a>
																	<a href="" target="_blank">, สงขลา</a>
																	<a href="" target="_blank">, สตูล</a>
																	<a href="" target="_blank">, สุราษฎร์ธานี</a>
																	<a href="" target="_blank">, หาดใหญ่</a>
														</div><!-- desc -->
					</div><!-- item -->		
				</div><!-- .row -->
			</div>	
		</div><!-- .group -->
	</div>
<hr>


<!-- Footer -->
<footer class="page-footer font-small blue lighten-5">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h5 class="mb-0"><b>บริการของเรา (Services & Solutions)</b></h5>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a href="#" target="_blank"><img height="20" src="img/facebook.png"></a>
          <!-- Twitter -->
          <a href="#" target="_blank"><img height="20" src="img/twitter.png"></a>

          <!--Linkedin -->
          <a href="#" target="_blank"><img height="20" src="img/instagram.png"></a>
          <!--Instagram-->
          <a href="#" target="_blank"><img height="20" src="img/youtube.png"></a>

          <a href="#" target="_blank"><img height="20" src="img/google.png"></a>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">ที่อยู่</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>ม.สิริเพลส นวนคร ต.เชียงรากน้อง อ.บางปะอิน จ.พระนครศรีอยุธยา 13180</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">เกี่ยวกับเรา</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="-" href=""></i>เกี่ยวกับเรา</p>
        <p>
          <i class="-" href=""></i>เงื่อนไขการใช้บริการ</p>
        <p>
          <i class="-" href=""></i>นโยบายความเป็นส่วนตัว</p>


      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">ช่องทางการติดต่อ</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-home mr-3"></i> THAI LAND, TH 10012</p>
        <p>
          <i class="fa fa-envelope mr-3"></i>gogotravel@gmail.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fa fa-print mr-3"></i> + 02 234 567 89</p>

      </div>


    </div>


  </div>

</footer>

<br>







<!-- Optional JavaScript -->
            <!-- jQ<iframe width="560" height="315" src="https://www.youtube.com/embed/6x6Enm5vdFM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>uery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	        <script type="text/javascript" src="script.js"></script>

</body>
</html>