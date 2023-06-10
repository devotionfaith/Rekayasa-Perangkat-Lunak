<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artikel || Tankaman</title>
    <link rel="stylesheet" href="../css/fontstyle.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-lbxWdBUkjsdSzOv2KoyEK4yir08DnokQscZfLd9/2CDVtlisCQbAVOsmKQrxd8lGh6jpO93PN21z5PthqhQUvA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      body {
        font-family: "LibreRegular", sans-serif;
        margin: 0;
        padding: 0;
      }
      a {
        text-decoration: none;
        color: inherit;
      }
      h1 {
        padding-left: 60px;
        font-weight: lighter;
        margin-bottom: 10px;
      }

      h3 {
        font-weight: lighter;
      }

      hr {
        border: none;
        height: 1.5px;
        clear: both;
        width: 120px;
        background-color: #475f45;
        margin-bottom: 60px;
        float: left;
        margin-left: 60px;
      }

      .container hr {
        width: 100%;
        margin-left: 0;
        margin-bottom: 0;
      }
      .container {
        clear: both;
        margin: 0 90px;
        display: flex;
        flex-wrap: wrap;
      }

      .article-recommendations {
        flex-basis: 100%;
      }

      .article {
        display: flex;
        margin-bottom: 20px;
        padding: 10px;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .article img {
        width: 400px;
        height: 300px;
        margin-right: 10px;
      }

      .article-content {
        flex: 1;
      }
      .article-content h3 {
        flex: 1;
        color: #475f45;
        margin-bottom: 0;
        text-align: left;
        padding-left: 80px;
        margin-right: 100px;
      }
      .article-content p {
        font-size: 12px;
        padding-right: 60px;
        text-align: left;
        padding-left: 80px;
        margin-right: 100px;
      }

      .row {
        display: flex;
        justify-content: space-between;
      }

      .col {
        flex-basis: 48%;
      }
    </style>
  </head>
  <body>
    <div id="navbar-placeholder"></div>
    <h1>Artikel</h1>
    <hr />
    <div class="container">
      <div class="article-recommendations">
        <div class="row">
          <div class="col">
            <a href="ArtikelPage.html">
              <div class="article">
                <img
                  src="../assets/thumbnail1.jpg"
                  alt="Thumbnail Artikel Rekomendasi 1"
                />
                <div class="article-content">
                  <h3>Fakta Jembatan Plunyon</h3>
                  <p>
                    Pernah melihat jembatan ini ketika mengunjungi Tankaman
                    Natural Park?. Yak, jembatan yang memiliki bentuk unik
                    ini....
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <a href="ArtikelPage.html">
                <div class="article">
                    <img
                      src="../assets/thumbnail2.jpg"
                      alt="Thumbnail Artikel Rekomendasi 2"
                    />
                    <div class="article-content">
                      <h3>Si Jago Sembunyi</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur donec adipiscing elit.
                        Tincidunt facilisis nunc lorem ...
                      </p>
                    </div></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <a href="ArtikelPage.html">
                <div class="article">
                    <img
                      src="../assets/thumbnail1.jpg"
                      alt="Thumbnail Artikel Rekomendasi 1"
                    />
                    <div class="article-content">
                      <h3>Fakta Jembatan Plunyon</h3>
                      <p>
                        Pernah melihat jembatan ini ketika mengunjungi Tankaman
                        Natural Park?. Yak, jembatan yang memiliki bentuk unik ini....
                      </p>
                    </div>
                  </div>
            </a>
          </div>

          <div class="col">
            <a href="ArtikelPage.html">
                <div class="article">
                    <img
                      src="../assets/thumbnail2.jpg"
                      alt="Thumbnail Artikel Rekomendasi 2"
                    />
                    <div class="article-content">
                      <h3>Si Jago Sembunyi</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur donec adipiscing elit.
                        Tincidunt facilisis nunc lorem ...
                      </p>
                    </div>
                  </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="footer-placeholder"></div>
    <script
      src="https://kit.fontawesome.com/a20a32b1ba.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(function () {
        $("#footer-placeholder").load("component/Footer.html");
      });
    </script>
    <script>
      $(function () {
        $("#navbar-placeholder").load("component/Navbar.php");
      });
    </script>
  </body>
</html>
