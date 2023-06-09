<nav class="navbar">
  <div class="navbar-logo">
    <img src="../assets/NavbarLogo.jpg" alt="Logo" />
  </div>
  <ul class="navbar-menu">
    <li><a href="HomePage.php">HOME</a></li>
    <li><a href="BookingPage.php">BOOKING</a></li>
    <li><a href="ContactFormPage.php">CONTACT FORM</a></li>
    <li><a href="ArtikelListPage.php">ARTIKEL</a></li>
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
      echo '<button class="btn-login"><a href="LoginPage.php">LOGIN</a></button>';
    }
    if (isset($_SESSION['user'])) {
      echo '<button class="btn-logout"><a href="php/logout.php">LOGOUT</a></button>';
    } ?>

  </ul>
</nav>