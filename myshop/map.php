<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location:index.html');
	exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/footer.css">


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
                  <a class="nav-link">สวัสดี <?php echo $_SESSION['username'];?></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="signout.php">ออกจากระบบ</a>
              </li>
          </ul>
      </div>
  </nav>

    <div>
        <p>นี่คือ google map แบบไม่ใช้ API Key</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.636307683088!2d100.72674655050054!3d14.039559590113425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d78a3cf303805%3A0x298cef6207b64026!2sScience%20and%20Technology!5e0!3m2!1sen!2sth!4v1616654073896!5m2!1sen!2sth" width=100% height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    </div>
    <div class="footer">
        <div class="row" id="footer-row">
            <div class="col-sm-6">
                <p>IT-Gadgets
                <br>เวลาทำการ
                <br>จันทร์-ศุกร์ 10.00-20.00น.
                <br>เสาร์-อาทิตย์ 12.00-18.00น.</p>
            </div>
            <div class="col-sm-6">
                <p>ติดต่อ
                <br>063-2658388</p>
            </div>
        </div>
            

    </div>

</body>
</html>