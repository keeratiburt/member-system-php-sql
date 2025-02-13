<?php
session_start();
if (!isset($_SESSION['loggedin'])) { // เช็คว่าได้ login อยู่หรือไม่ isset() (เช็คว่าตัวแปร $_SESSION เป็นจริงหรือเท็จ)
	header('Location:index.html'); // 
	exit;
}

?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title>My Portfolio</title>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
          <ul class="navbar-nav me-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php">หน้าแรก</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="map.php">แผนที่ร้าน</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php">ติดต่อ</a>
          </ul>
      </div>
      <div class="mx-auto order-0">
          <a class="navbar-brand mx-auto" href="index.php">IT Gadgets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link">สวัสดี <?php echo $_SESSION['username'];?></a> <!-- แสดงค่า username จากตัวแปร $_SESSION['username'] -->
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="signout.php">ออกจากระบบ</a>
              </li>
          </ul>
      </div>
  </nav>
    

    <div class="container-lg pt-3 my-3 text-dark">
        <div class="row">
            <h1>Everyday Levitating</h1>
            <p>
                Levitating photography คือ การถ่ายภาพบุคคลหรือสิ่งของในลักษณะที่ดูเหมือนว่ากำลังลอยอยู่ในอากาศ ซึ่งบุคคลหรือสั่งของเหล่านั้นอาจจะลอยได้จริง! ก็เป็นได้
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card px-0" style="width:175px">
                    <img class="card-img-top" src="images/levi1_tiny.png" style="width:100%">
                    <div class="card-body">
                        <h4 class="title">I believe I can fly!</h4>
                        <p class="text">ประวัติคนถ่าย</p>
                        <a href="profile.html" class="btn btn-primary stretched-link">คลิก!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                    <img class="img-fluid" src="images/levi2.jpg" >
            </div>
            <div class="col-sm-4">
                    <img class="img-fluid" src="images/levi3.jpg" >
            </div>
        </div>
    </div>

    <div class="container-12 px-0">
      <div class="row">
        <img class="img-fluid" src="images/levi4_tiny.png" style="max-width: 100%; height: 100%;">
      </div>
    </div>
    <div class="container-lg pt-3 my-3 text-dark">
        <div class="row">
            <h1>Everyday Planking</h1>
            <p>
                Levitating photography คือ การถ่ายภาพบุคคลแบบนอนราบขนานกับพื้นในท่านอนคว่ำหน้า
            </p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                    <img class="img-fluid" src="images/plank1.jpg" >
            </div>
            <div class="col-sm-6">
                    <img class="img-fluid" src="images/plank2.jpg" >
            </div>
        </div>
    </div>
    

  




  </body>
</html>