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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-lbxWdBUkjsdSzOv2KoyEK4yir08DnokQscZfLd9/2CDVtlisCQbAVOsmKQrxd8lGh6jpO93PN21z5PthqhQUvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
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
        }

        .form-group input,
        .form-group select {
            flex: 1;
        }

        .form-group input[type="tel"],
        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group input[type="time"],
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
        form-group input[type="time"]:focus {
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

        .textfield-side {
            display: flex;
            flex-direction: row;
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

        .table-container {
            display: flex;
            justify-content: center;
            align-items: baseline;
            height: 400px;
        }

        .table-container table {
            border-collapse: collapse;
            width: 100%;
            color: #ffffff;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            font-weight: bold;
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
                        <img src="../assets/trek.jpg" alt="Gambar 2" />
                        <p class="image-label">
                            Trekking <br />
                            160.000/4 pax
                        </p>
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="BookingPendopo.php" class="img-hover">
                        <img src="../assets/pendapa.jpg" alt="Gambar 3" style="border: 3px solid #ffffff" />
                        <p class="image-label">
                            Pendopo <br />
                            100.000/2 jam
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
    <h3 class="header">Booking Pendopo Page</h3>
    <section class="section2">
        <div class="column">
            <form id="pendopoForm" action="php/pendopo_proses.php" method="post">
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
                    <input type="date" name="tanggal" id="tanggal" required />
                </div>

                <div class="form-group">
                    <label for="jamMasuk">Jam Mulai :</label>
                    <input type="time" name="jamMasuk" id="jamMasuk" required />
                </div>
                <div class="form-group"">
              <label for=" jamKeluar">Jam Selesai :</label>
                    <input type="time" name="jamKeluar" id="jamKeluar" required />
                </div>
                <div class="cost">
                    <label for="cost">Biaya:</label>
                    <span name="cost" id="cost"></span>
                </div>

                <div class="form-group">
                    <input type="submit" value="BOOKING" </input>
                </div>
            </form>
        </div>
        <div class="column">
            <div class="table-container">
                <table id="tabelData">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan='4'>Tidak ada data</td>
                        </tr>
                    </tbody>
                </table>

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
        var tabelData = document.getElementById("tabelData");
        tabelData.style.display = "none";
        var tanggalInput = document.getElementById("tanggal");
        tanggalInput.addEventListener("change", getData);

        function getData() {
            var tanggal = tanggalInput.value;
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    populateTable(data);
                }
            };

            xhttp.open("GET", "php/get_data_pendopo.php?tanggal=" + tanggal, true);
            xhttp.send();
        }


        function populateTable(data) {
            var tabelData = document.getElementById("tabelData");
            var tbody = tabelData.getElementsByTagName("tbody")[0];
            tbody.innerHTML = "";

            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    var row = "<tr>";
                    row += "<td>" + data[i].name + "</td>";
                    row += "<td>" + data[i].tanggal + "</td>";
                    row += "<td>" + data[i].start_time + "</td>";
                    row += "<td>" + data[i].end_time + "</td>";
                    row += "</tr>";
                    tbody.innerHTML += row;
                }
                tabelData.style.display = "table";
            } else {
                tbody.innerHTML = "<tr><td colspan='4'>Tidak ada data</td></tr>";
                tabelData.style.display = "table";
            }
        }
    </script>
    <script>
        var jamMasukInput = document.getElementById("jamMasuk");
        var jamKeluarInput = document.getElementById("jamKeluar");
        var costSpan = document.getElementById("cost");
        jamMasukInput.addEventListener("input", hitungBiaya);
        jamKeluarInput.addEventListener("input", hitungBiaya);

        function hitungBiaya() {
            var jamMasuk = jamMasukInput.value;
            var jamKeluar = jamKeluarInput.value;

            if (jamMasuk && jamKeluar) {
                var biaya = 0;

                var selisihJam = hitungSelisihJam(jamMasuk, jamKeluar);

                if (selisihJam > 0) {
                    var jumlahDuaJam = Math.ceil(selisihJam / 2);
                    biaya = jumlahDuaJam * 100000;
                }

                document.getElementById("cost").innerHTML = biaya.toLocaleString();
            }
        }

        function hitungSelisihJam(jamMasuk, jamKeluar) {
            var masuk = new Date("2000-01-01T" + jamMasuk + ":00");
            var keluar = new Date("2000-01-01T" + jamKeluar + ":00");

            var selisih = keluar - masuk;

            var selisihJam = selisih / 1000 / 60 / 60;
            return selisihJam;
        }
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