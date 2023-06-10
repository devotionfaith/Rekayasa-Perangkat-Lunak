<!DOCTYPE html>
<html>

<head>
  <title>Booking Page || Tankaman</title>
  <link rel="stylesheet" href="../css/fontstyle.css" />
  <link rel="stylesheet" href="../css/style.css" />

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    a {
      text-decoration: none;
    }

    .btn-login {
      background-color: transparent;
      font-family: "Buttons", sans-serif;
      padding: 5px;
      border: 2px solid #475f45;
    }

    h2 {
      font-family: "LibreRegular", sans-serif;
    }
  </style>
</head>

<body>
  <div id="navbar-placeholder"></div>

  <section class="section1">
    <a href="HistoryPage.html"><button class="btn1" style="padding: 8px 15px; margin: 20px 40px">
        RIWAYAT
      </button></a>
    <div class="bookingsection" style="margin-bottom: 55px">
      <h2 style="color: white; letter-spacing: 2px">Our Services</h2>
      <div class="image-container">
        <div class="image-wrapper">
          <a href="BookingCampPage.php" class="img-hover">
            <img src="../assets/camp.jpg" alt="Gambar 1" />
            <p class="image-label">
              Camp Area <br />
              25.000/day
            </p>
          </a>
        </div>
        <div class="image-wrapper">
          <a href="BookingTrekPage.php" class="img-hover">
            <img src="../assets/trek.jpg" alt="Gambar 2" />
            <p class="image-label">
              Trekking <br />
              160.000/4 pax
            </p>
          </a>
        </div>
        <div class="image-wrapper">
          <a href="BookingPendopo.php" class="img-hover">
            <img src="../assets/pendapa.jpg" alt="Gambar 3" />
            <p class="image-label">
              Pendopo <br />
              10.000/2 jam
            </p>
          </a>
        </div>
      </div>
    </div>
    <div id="footer-placeholder"></div>
  </section>
</body>
<script src="https://kit.fontawesome.com/a20a32b1ba.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(function() {
    $("#navbar-placeholder").load("component/Navbar.html");
  });
</script>
<script>
  $(function() {
    $("#footer-placeholder").load("component/Footer.html");
  });
</script>

</html>