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
    <title>Payment || Tankaman</title>
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

        .overlay-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            overflow: auto;
        }

        .modal {
            background-color: #414840;
            color: white;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border: 1px solid #888;
            max-width: 500px;
            width: 80%;
            max-height: 80vh;
            overflow-y: auto;
            z-index: 10000;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-check {
            margin-bottom: 10px;
        }

        .form-check-label {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-check-input {
            margin-right: 10px;
        }

        .metode-gambar {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .btn-primary {
            background-color: #198754;
            color: #fff;
            margin-top: 30px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <section class="homepage-2">

    </section>
    <?php
    $booking = $_GET['value'];
    $id = $_GET['id'];
    ?>
    <form action="php/proses-payment.php?value=<?= $booking ?>&id=<?= $id ?>" method="post">
        <div id="modal-pembayaran" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Pilih Metode Pembayaran</h3>
            <div class="form-check">
                <label class="form-check-label" for="metode1">
                    <img src="../assets/dana.png" alt="Gambar Metode Pembayaran 1" class="metode-gambar">
                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="metode1" value="dana" checked>
                    Dana
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="metode2">
                    <img src="../assets/spay.jpg" alt="Gambar Metode Pembayaran 2" class="metode-gambar">
                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="metode2" value="spay">
                    Shopee Pay
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="metode2">
                    <img src="../assets/gopay.png" alt="Gambar Metode Pembayaran 2" class="metode-gambar">
                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="metode2" value="gopay">
                    Gopay
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="metode2">
                    <div class="form-group">
                        <label for="nomor-hp">Nomor HP:</label>
                        <input type="text" id="nomor-hp" name="rekening" class="form-control">
                    </div>
                </label>
            </div>
            <button class="btn btn-primary" onclick="inputnomor()">Bayar</button>
        </div>
    </form>
    <script src=" https://kit.fontawesome.com/a20a32b1ba.js" crossorigin="anonymous"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        function inputnomor() {
            document.getElementById("modal-pembayaran").style.display = "none";
            document.getElementById("modal-nomor-hp").style.display = "block";
        }

        function closeModal() {
            document.getElementById("modal-nomor-hp").style.display = "none";
            document.getElementById("modal-pembayaran").style.display = "block";
        }
    </script>

</body>

</html>