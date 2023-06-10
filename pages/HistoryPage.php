<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>History || Tankaman</title>
    <link rel="stylesheet" href="../css/fontstyle.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-lbxWdBUkjsdSzOv2KoyEK4yir08DnokQscZfLd9/2CDVtlisCQbAVOsmKQrxd8lGh6jpO93PN21z5PthqhQUvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
    }

    .ticket-container .ticket-image {
        width: 60%;
        height: auto;
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
    </style>
</head>

<body>
    <div id="navbar-placeholder"></div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- <div class="container section3">
        <h2 class="subheader">Riwayat Pemesanan</h2>
        <div class="filter-container">
            <label for="filter"><i class="fas fa-filter"></i> Filter</label>
            <select id="filter">
                <option value="all">Semua</option>
                <option value="completed">Selesai</option>
                <option value="pending">Belum Bayar</option>
                <option value="expired">Expired</option>
            </select>
        </div>
        <div class="ticket-container" style="margin-top: 20px">
            <img src="../assets/camp.jpg" alt="Foto Pemesanan" class="ticket-image" />
            <div class="ticket-info">
                <div class="field">
                    <label>Id Pesan:</label>
                    <span>John Doe</span>
                </div>
                <div class="field">
                    <label>Tanggal Masuk:</label>
                    <span>01 Juni 2023</span>
                </div>
                <div class="field">
                    <label>Tanggal Keluar:</label>
                    <span>01 Juni 2023</span>
                </div>
                <div class="field">
                    <label>Harga:</label>
                    <span>$50</span>
                </div>
            </div>
            <button class="payment-button btn1">Bayar</button>
        </div>

        <div class="ticket-container">
            <img src="../assets/camp.jpg" alt="Foto Pemesanan" class="ticket-image" />
            <div class="ticket-info">
                <div class="field">
                    <label>Id Pesan:</label>
                    <span>John Doe</span>
                </div>
                <div class="field">
                    <label>Tanggal Masuk:</label>
                    <span>01 Juni 2023</span>
                </div>
                <div class="field">
                    <label>Tanggal Keluar:</label>
                    <span>01 Juni 2023</span>
                </div>
                <div class="field">
                    <label>Harga:</label>
                    <span>$50</span>
                </div>
            </div>
            <button class="payment-button btn1">Bayar</button>
        </div>

        <div class="ticket-container">
            <img src="../assets/camp.jpg" alt="Foto Pemesanan" class="ticket-image" />
            <div class="ticket-info">
                <div class="field">
                    <label>Id Pesan:</label>
                    <span>John Doe</span>
                </div>
                <div class="field">
                    <label>Tanggal Masuk:</label>
                    <span>01 Juni 2023</span>
                </div>
                <div class="field">
                    <label>Tanggal Keluar:</label>
                    <span>01 Juni 2023</span>
                </div>
                <div class="field">
                    <label>Harga:</label>
                    <span>$50</span>
                </div>
            </div>
            <button class="payment-button btn1">Bayar</button>
        </div>
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
</body>

</html>