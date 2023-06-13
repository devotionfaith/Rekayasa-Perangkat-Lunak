<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: LoginPage.php?login_required=1');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Booking Page || Tankaman</title>
    <link rel="stylesheet" href="../css/fontstyle.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-lbxWdBUkjsdSzOv2KoyEK4yir08DnokQscZfLd9/2CDVtlisCQbAVOsmKQrxd8lGh6jpO93PN21z5PthqhQUvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    .column {
        flex: 1;
        padding: 20px;
    }

    .form-group {
        display: flex;
        align-items: center;
        margin-left: 60px;
        margin-bottom: 20px;
        width: 75%;
    }

    .form-group label {
        flex: 0 0 120px;
        margin-right: 10px;
        color: #ffffff;
        margin-right: 10px;
    }

    .form-group input,
    .form-group select {
        flex: 1;
    }

    .form-group input[type="tel"],
    .form-group input[type="text"],
    .form-group input[type="date"],
    .form-group input[type="number"] {
        padding: 5px;
        padding-right: 1px;
        border: 1px solid #254c27;
        border-radius: 10px;
        background-color: #e3e0e0;
    }

    form-group input[type="tel"]:focus,
    form-group input[type="text"]:focus,
    form-group input[type="date"]:focus,
    form-group select:focus {
        outline: none;
        border-bottom: 2px solid #4caf50;
    }

    .form-group input[type="submit"] {
        width: 50%;
        margin-left: 120px;
        margin-top: 20px;
        padding: 10px;
        background-color: #475f45;
        font-family: "Buttons", sans;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
        background-color: #3a4f38;
    }

    .cost {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        margin-left: 60px;
        color: #ffffff;
    }

    .cost label {
        flex: 0 0 120px;
        margin-right: 10px;
    }

    .image-column-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px;
    }

    .image-column-container img {
        max-width: 100%;
        max-height: 100%;
        border-radius: 50%;
    }
    </style>
</head>

<body>
    <div id="navbar-placeholder"></div>
    <section class="section1">
        <a href="HistoryPage.php"><button class="btn1" style="padding: 8px 15px; margin: 20px 40px">
                RIWAYAT
            </button></a>
        <div class="bookingsection">
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
                        <img src="../assets/trek.jpg" alt="Gambar 2" style="border: 3px solid #ffffff" />
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
                            450.000/2 jam
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div id="overlay" class="overlay" style="display: none;">
        <div class="dialog">
            <h2>Message</h2>
            <p id="errorMessage"></p>
            <button class="btn-dialog" onclick="hideDialog()">Tutup</button>
        </div>
    </div>
    <h3 class="header">Booking Trekking Page</h3>
    <section class="section2">
        <div class="column">
            <form id="campForm" action="php/trek_proses.php" method="post">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" id="name" required />
                </div>

                <div class="form-group">
                    <label for="phone">No. Telepon:</label>
                    <input type="tel" name="phone" id="phone" required />
                </div>

                <div class="form-group">
                    <label for="date">Tanggal:</label>
                    <input type="date" name="date" id="date" required />
                </div>
                <div class="form-group">
                    <label for="jumlahOrang">Jumah Orang :</label>
                    <input type="number" name="jumlahOrang" id="jumlahOrang" required />
                </div>

                <div class="cost">
                    <label for="cost">Biaya:</label>
                    <span name="cost" id="cost"></span>
                    <input type="hidden" id="hiddenCost" name="hiddenCost" />
                </div>

                <div class="form-group">
                    <input type="submit" value="BOOKING" />
                </div>
            </form>
        </div>
        <div class="column">
            <div class="image-column-container">
                <img src="../assets/trek.jpg" alt="Foto" />
            </div>
        </div>
    </section>

    <div id="footer-placeholder"></div>
    <script src="https://kit.fontawesome.com/a20a32b1ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(function() {
        $("#navbar-placeholder").load("component/Navbar.php");
    });
    </script>
    <script>
    $(function() {
        $("#footer-placeholder").load("component/Footer.html");
    });
    </script>
    <script>
    function hitungBiaya() {
        const biayaPerEmpatOrang = 160000;
        const jumlahOrangInput = document.getElementById("jumlahOrang");
        const costSpan = document.getElementById("cost");
        const hiddenCostInput = document.getElementById("hiddenCost");

        const jumlahOrang = parseInt(jumlahOrangInput.value);
        const jumlahKelompok = Math.ceil(jumlahOrang / 4);
        const totalBiaya = jumlahKelompok * biayaPerEmpatOrang;

        costSpan.textContent = totalBiaya.toLocaleString();
        hiddenCostInput.value = totalBiaya;
    }

    const jumlahOrangInput = document.getElementById("jumlahOrang");
    jumlahOrangInput.addEventListener("input", hitungBiaya);
    </script>
    <script>
    function showDialog(message) {
        var overlay = document.getElementById("overlay");
        var errorMessage = document.getElementById("errorMessage");
        errorMessage.textContent = message;
        overlay.style.display = "flex";
    }

    function hideDialog() {
        var overlay = document.getElementById("overlay");
        overlay.style.display = "none";
    }

    function getParameterByName(name) {
        var url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return "";
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    var errorMessage = getParameterByName("message");
    if (errorMessage === "success") {
        showDialog("Booking Berhasil");
    } else if (errorMessage === "gagalbooking") {
        showDialog("Pendopo sudah terpakai");
    }
    </script>
</body>

</html>