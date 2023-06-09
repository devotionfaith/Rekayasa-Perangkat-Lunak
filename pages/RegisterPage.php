<?php
if (isset($_GET['message'])) {
  if ($_GET['message'] == "failed") {
    $alert = "Registrasi Gagal";
  }
} else {
  $alert = " ";
}
?>
?>

<!DOCTYPE html>
<html>

<head>
  <title>Register || Tankaman</title>
  <link rel="stylesheet" href="../css/fontstyle.css" />
  <style>
    body {
      background-color: #414840;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      width: 400px;
      padding: 20px 20px 0 20px;
      background-color: #d9d9d9;
      border-radius: 80px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      font-family: "Poppins", sans-serif;
    }

    .logo {
      text-align: center;
      margin-top: -18%;
    }

    .logo img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
    }

    .form-group {
      margin: 10px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 5px;
      padding-right: 1px;
      border: none;
      border-bottom: 1px solid #254c27;
      background-color: transparent;
    }

    form-group input[type="password"]:focus,
    form-group input[type="username"]:focus {
      outline: none;
      border-bottom: 2px solid #4caf50;
    }

    .form-group .lupa-password {
      float: right;
      font-size: 10px;
      color: #666;
    }

    .form-group .lupa-password a {
      color: #666;
      text-decoration: none;
    }

    .form-group .forgot-password a:hover {
      color: #4caf50;
    }

    .form-group button {
      width: 50%;
      margin-top: 10px;
      margin-bottom: 0;
      margin-left: 90px;
      padding: 10px;
      background-color: #475f45;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #3a4f38;
    }

    h6 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="../assets/245959803_180882220878709_8626775629138653314_n.jpg" alt="Logo" />
    </div>
    <div style="text-align: center;">
      <p><?= $alert ?></p>
    </div>
    <form action="php/register.php" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan alamat email" />
      </div>
      <div class="form-group">
        <label for="phone">Nomor Telepon:</label>
        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" />
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username" />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password" />
      </div>
      <div class="form-group">
        <button type="submit">Daftar</button>
      </div>
      <h6>Sudah punya akun? <a href="LoginPage.php">Login</a></h6>
    </form>
  </div>
</body>

</html>