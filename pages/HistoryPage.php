<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: LoginPage.php?login_required=1');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>History || Tankaman</title>
    <link rel="stylesheet" href="../css/fontstyle.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <style>
    body {
        margin: 0;
        padding: 0;
        background-color: #343d33;
    }

    a {
        text-decoration: none;
    }

    .container {
        display: flex;
        align-items: center;
        flex-direction: column;
        height: auto;
        color: #eed9d9;
    }

    .filter-container {
        display: flex;
        align-self: start;
        align-items: center;
        margin-left: 20px;
        margin-bottom: 10px;
        font-family: "Footer", sans-serif;
    }

    .filter-container label {
        margin-right: 5px;
    }

    .filter-container select {
        padding: 5px;
    }

    .ticket-container {
        display: grid;
        grid-template-columns: 200px 1fr;
        gap: 10px;
        background-color: #6d846a;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 20px;
        margin-top: 10px;
        width: 60%;
        position: relative;
        z-index: 1;
    }

    .ticket-container .ticket-image {
        width: 60%;
        height: auto;
        align-items: center;
        margin-left: 30px;
        border-radius: 5px;
    }

    .ticket-container .ticket-info {
        display: flex;
        flex-direction: column;
    }

    .ticket-container .ticket-info .field {
        display: flex;
        font-size: 14px;
        margin-top: 10px;
    }

    .ticket-container .ticket-info .field label {
        font-weight: bold;
        width: 100px;
    }

    .ticket-container .ticket-info .field span {
        margin-left: 10px;
    }

    .ticket-container .payment-button {
        align-self: flex-end;
        position: absolute;
        bottom: 20px;
        right: 40px;
        width: 15%;
        height: 30px;
    }

    .subheader {
        align-self: start;
        margin-left: 20px;
        border-bottom: 1px solid #eed9d9;
    }

    .divider {
        align-self: center;
        border-bottom: 1px solid #eed9d9;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }

    .dialog {
        background-color: #414840;
        color: #eed9d9;
        padding: 50px 100px;
        border-radius: 10px;
        text-align: center;
        position: absolute;
        z-index: 3;
    }
    </style>
</head>

<body>
    <div id="navbar-placeholder"></div>
    <div id="overlay" class="overlay" style="display: none;">
        <div class="dialog">
            <h2>Message</h2>
            <p id="errorMessage"></p>
            <button class="btn-dialog" onclick="hideDialog()">Tutup</button>
        </div>
    </div>
    <div class="container section3">
        <h2 class="subheader">Riwayat Pemesanan</h2>

        <h3 class="divider"> Pemesanan Camp</h3>

        <?php
        include "php/connector.php";
        $user = $_SESSION['user'];
        $sql = "SELECT booking_camp.id,booking_camp.id_user,booking_camp.name,booking_camp.start_date,booking_camp.end_date,booking_camp.cost,booking_camp.status, camp_area.name as camp_area FROM `booking_camp` INNER JOIN camp_area ON camp_area.id = booking_camp.id_camp where id_user = $user";
        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

        while ($data = mysqli_fetch_array($query)) {
        ?>

        <div class="ticket-container" style="margin-top: 20px">
            <img src="../assets/camp.jpg" alt="Foto Pemesanan" class="ticket-image" style="margin-top: 8px;" />
            <div class="ticket-info">
                <div class="field">
                    <label>Id Pesan:</label>
                    <span><?= $data['id'] ?></span>
                </div>
                <div class="field">
                    <label>Camp Area:</label>
                    <span><?= $data['camp_area'] ?></span>
                </div>
                <div class="field">
                    <label>Tanggal Masuk:</label>
                    <span><?= $data['start_date'] ?></span>
                </div>
                <div class="field">
                    <label>Tanggal Keluar:</label>
                    <span><?= $data['end_date'] ?></span>
                </div>
                <div class="field">
                    <label>Harga:</label>
                    <span><?= $data['cost'] ?></span>
                </div>
            </div>
            <?php
                if ($data['status'] == "Paid") {
                ?>
            <button class="payment-button btn1" style:"cursor: default">Selesai</button>
            <?php
                } elseif ($data['status'] == "expired") {
                ?>
            <button class="payment-button btn1" style:"cursor: default">Expired</button>
            <?php
                } else {
                ?>
            <a href="Payment-method.php?value=camp&id=<?= $data['id'] ?>"><button
                    class="payment-button btn1">Bayar</button></a>
            <?php
                }
                ?>
        </div>
        <?php
        }
        ?>
        <h3 class="divider"> Pemesanan Trek</h3>
        <?php
        include "php/connector.php";
        $user = $_SESSION['user'];
        $sql = "SELECT * FROM `booking_trek` where id_user = $user";
        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

        while ($data = mysqli_fetch_array($query)) {
        ?>

        <div class="ticket-container">
            <img src="../assets/trek.jpg" alt="Foto Pemesanan" class="ticket-image" style="margin-top: 5px;" />
            <div class="ticket-info">

                <div class="field">
                    <label>Id Pesan:</label>
                    <span><?= $data['id'] ?></span>
                </div>
                <div class="field">
                    <label>Tanggal:</label>
                    <span><?= $data['date'] ?></span>
                </div>
                <div class="field">
                    <label>Jumlah Orang:</label>
                    <span><?= $data['people'] ?></span>
                </div>
                <div class="field">
                    <label>Harga:</label>
                    <span><?= $data['cost'] ?></span>
                </div>
            </div>
            <?php
                if ($data['status'] == "Paid") {
                ?>
            <button class="payment-button btn1">Selesai</button>
            <?php
                } elseif ($data['status'] == "expired") {
                ?>
            <button class="payment-button btn1" style:"cursor: default">Expired</button>
            <?php
                } else {
                ?>
            <a href="Payment-method.php?value=trek&id=<?= $data['id'] ?>"><button
                    class="payment-button btn1">Bayar</button></a>
            <?php
                }
                ?>
        </div>
        <?php
        }
        ?>
        <h3 class="divider"> Pemesanan Pendapa</h3>
        <?php
        include "php/connector.php";
        $user = $_SESSION['user'];
        $sql = "SELECT * FROM `booking_pendopo` where id_user = $user";
        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

        while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="ticket-container">
            <img src="../assets/pendapa.jpg" alt="Foto Pemesanan" class="ticket-image" style="margin-top: 8px;" />
            <div class="ticket-info">
                <div class="field">
                    <label>Id Pesan:</label>
                    <span><?= $data['id'] ?></span>
                </div>
                <div class="field">
                    <label>Tanggal:</label>
                    <span><?= $data['tanggal'] ?></span>
                </div>
                <div class="field">
                    <label>Jam :</label>
                    <?php
                        $startTime = date('H:i', strtotime($data['start_time']));
                        $endTime = date('H:i', strtotime($data['end_time']));
                        ?>
                    <span><?= $startTime ?> - <?= $endTime ?></span>
                </div>
                <div class="field">
                    <label>Harga:</label>
                    <span><?= $data['cost'] ?></span>
                </div>
            </div>
            <?php
                if ($data['status'] == "Paid") {
                ?>
            <button class="payment-button btn1" style:"cursor: default">Selesai</button>
            <?php
                } elseif ($data['status'] == "expired") {
                ?>
            <button class="payment-button btn1" style:"cursor: default">Expired</button>
            <?php
                } else {
                ?>
            <a href="Payment-method.php?value=pendopo&id=<?= $data['id'] ?>"><button
                    class="payment-button btn1">Bayar</button></a>

            <?php
                }
                ?>
        </div>
        <?php
        }
        ?>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
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
        showDialog("Pembayaran Berhasil");
    } else if (errorMessage === "gagalbayar") {
        showDialog("PPembayaran gagal, silahkan coba lagi");
    }
    </script>
    <script>
    function updateStatus() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'php/updatestatus.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send();
    }

    setInterval(updateStatus, 30000); // 30 detik (30000 milidetik)
    </script>
</body>

</html>