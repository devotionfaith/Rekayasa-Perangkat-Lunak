<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HomePage || Tankaman</title>
  <link rel="stylesheet" href="../css/fontstyle.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-lbxWdBUkjsdSzOv2KoyEK4yir08DnokQscZfLd9/2CDVtlisCQbAVOsmKQrxd8lGh6jpO93PN21z5PthqhQUvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    h1 {
      font-size: 50px;
    }

    .container {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .container-section2 {
      text-align: center;
      width: 40%;
    }

    .container-section2 h1 {
      margin-bottom: 20px;
      font-size: 40px;
    }

    .container-section2 h6 {
      margin-bottom: 10px;
      font-size: 14px;
    }

    .container-section2 .button {
      margin-top: 20px;
    }

    .column {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "LibreRegular", sans-serif;
    }

    .title {
      color: #343d33;
    }

    .half-rounded {
      width: 360px;
      height: 480px;
      border-radius: 500px 500px 0 0;
      background-image: url("../assets/campfire.jpg");
      background-size: cover;
      background-position: center;
      margin-right: 60px;
    }

    .article-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 200px;
    }

    .column-article {
      flex: 1;
    }

    .column-left {
      display: flex;
      justify-content: center;
    }

    .article-left {
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .article-left img {
      width: 360px;
      height: 270px;
    }

    .article-left .content {
      flex: 1;
      padding-left: 20px;
      max-width: 360px;
    }

    .article-left .content h4 {
      margin: 0;
      font-size: 18px;
    }

    .article-left .content p {
      margin: 0;
      margin-top: 10px;
      font-size: 12px;
      font-family: "Footer", sans-serif;
    }

    .article-right {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .article-right img {
      width: 100px;
      height: 100px;
    }

    .article-right .content {
      flex: 1;
      max-width: 300px;
    }

    .article-right .content h4 {
      margin: 0;
      font-size: 18px;
    }

    .article-right .content p {
      margin: 0;
      margin-top: 10px;
      font-size: 12px;
      font-family: "Footer", sans-serif;
    }

    .title-artikel {
      align-self: flex-start;
      padding-left: 60px;
    }

    .view-all-post {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
      margin-bottom: 40px;
    }

    .view-all-post h6 {
      align-items: center;
      font-family: "Buttons", sans-serif;
      font-size: 16px;
    }

    .view-all-post hr {
      flex: 1;
      border: none;
      height: 2px;
      width: 60px;
      background-color: #000;
    }

    .button {
      font-family: "Buttons", sans-serif;
      letter-spacing: 0.5;
      font-weight: lighter;
      color: inherit;
      background-color: #475f45;
      padding: 7px 20px;
      border: none;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div id="navbar-placeholder"></div>
  <section class="homepage-1">
    <div class="container">
      <div class="column">
        <div class="title" style="width: 60%">
          <h1>The Taste Of Nature</h1>
          <p>Recreation Site, Camping Site, Gowes Rest Site</p>
        </div>
      </div>
      <div class="column">
        <div class="half-rounded"></div>
      </div>
    </div>
  </section>
  <section class="homepage-2">
    <div class="container-section2">
      <h1>Discover Yourself With Nature</h1>
      <h6>
        Tankaman Natural Park terletak di area hutan rakyat di dusun Kaliurang
        Timur, salah satu dusun yang berada di lingkar ujung utara garis
        imajiner Yogyakarta.
      </h6>
    </div>
    <div class="image-container">
      <div class="image-wrapper img-hover">
        <img src="../assets/camp.jpg" alt="Gambar 1" />
        <p class="image-label">Camp Area</p>
      </div>
      <div class="image-wrapper img-hover">
        <img src="../assets/trek.jpg" alt="Gambar 2" />
        <p class="image-label">Trekking</p>
      </div>
      <div class="image-wrapper img-hover">
        <img src="../assets/pendapa.jpg" alt="Gambar 3" />
        <p class="image-label">Pendopo</p>
      </div>
    </div>
    <a href="BookingPage.php">
      <button class="button" style="color: inherit">BOOKING</button>
    </a>
  </section>
  <section class="homepage-3">
    <div class="title-artikel">
      <h2>Artikel</h2>
      <div class="view-all-post">
        <hr />
        <a href="ArtikelListPage.html">
          <h6>
            VIEW ALL POST<i class="fa-sharp fa-solid fa-arrow-right" style="margin-left: 10px"></i></h6>
        </a>
      </div>
    </div>
    <div class="article-container">
      <div class="column-left">
        <div class="article-left">
          <img src="../assets/thumbnail1.jpg" alt="Gambar 1" />
          <div class="content">
            <h4>Fakta Jembatan Plunyon</h4>
            <p>
              Pernah melihat jembatan ini ketika mengunjungi Tankaman Natural
              Park?. Yak, jembatan yang memiliki bentuk unik ini....
            </p>
          </div>
        </div>
      </div>
      <div class="column-article">
        <div class="article-right">
          <img src="../assets/thumbnail1.jpg" alt="Gambar 4" />
          <div class="content">
            <h4>Judul Artikel 4</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur donec adipiscing elit.
              Tincidunt facilisis nunc lorem ...
            </p>
          </div>
        </div>
        <div class="article-right">
          <img src="../assets/thumbnail1.jpg" alt="Gambar 5" />
          <div class="content">
            <h4>Judul Artikel 5</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur donec adipiscing elit.
              Tincidunt facilisis nunc lorem ...
            </p>
          </div>
        </div>
        <div class="article-right">
          <img src="../assets/thumbnail1.jpg" alt="Gambar 6" />
          <div class="content">
            <h4>Judul Artikel 6</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur donec adipiscing elit.
              Tincidunt facilisis nunc lorem ...
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="footer-placeholder"></div>
  <script src="https://kit.fontawesome.com/a20a32b1ba.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function() {
      $("#footer-placeholder").load("component/Footer.html");
    });
  </script>
  <script>
    $(function() {
      $("#navbar-placeholder").load("component/Navbar.php");
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>
</body>

</html>