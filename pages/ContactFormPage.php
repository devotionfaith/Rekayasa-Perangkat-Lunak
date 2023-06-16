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
    <title>Contact Form || Tankaman</title>
    <link rel="stylesheet" href="../css/fontstyle.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-lbxWdBUkjsdSzOv2KoyEK4yir08DnokQscZfLd9/2CDVtlisCQbAVOsmKQrxd8lGh6jpO93PN21z5PthqhQUvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        hr {
            border: none;
            height: 1px;
            width: 300px;
            background-color: #ccc;
            margin-bottom: 20px;
        }

        .qna-section hr {
            border: none;
            height: 1px;
            width: 90%;
            background-color: #475f45;
            margin-bottom: 20px;
        }

        .contact-section {
            background-color: #475f45;
            min-height: calc(100vh - 47px);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container {
            width: 500px;
            padding: 20px;
            background-color: #c4c4c4;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-section h1 {
            text-align: center;
            margin: 20px 0;
            color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
            margin-right: 10px;
            display: grid;
            grid-template-columns: 100px 1fr;
            align-items: center;
            font-family: "Poppins", sans;
            font-size: 14px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            margin-left: 30px;
            margin-right: 50px;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 90%;
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .form-group input[type="submit"] {
            padding: 10px 20px;
            width: 20%;
            background-color: #4caf50;
            color: #fff;
            border: none;
            justify-self: end;
            margin-right: 30px;
            border-radius: 3px;
            cursor: pointer;
        }

        .data-group {
            display: grid;
            grid-template-columns: 200px 1fr;
            position: relative;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="navbar-placeholder"></div>
    <section class="contact-section">
        <h1>Kontak Kami</h1>
        <hr />
        <div class="container">
            <form id="contact-form" action="php/cf_proses.php" method="post">
                <div class="form-group" style="margin-top: 30px">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required />
                </div>
                <div class="form-group">
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <label></label>
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </section>
    <section class="qna-section">
        <h1>Contact Response</h1>
        <hr />
        <div class="question-list">

            <?php
            // SELECT a.id, a.id_question, a.id_admin, a.answer, a.time, q.nama, q.question, q.time FROM `answer` as a INNER JOIN question as q on q.id = a.id_question;
            include 'php/connector.php';
            $sqlquestion = "SELECT * FROM question";
            $query = mysqli_query($connect, $sqlquestion) or die(mysqli_error($connect));
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="question">
                    <div class="data-group">
                        <p><?= $data['nama'] ?></p>
                        <p style="justify-self: end;"><?= $data['time'] ?></p>
                    </div>
                    <div class="question-heading">
                        <p>Pertanyaan: <?= $data['question'] ?></p>
                        <div class="icon"><i class="fa-solid fa-caret-down"></i></div>
                    </div>
                    <?php
                    $id_question = $data['id'];
                    $sqlanswer = "SELECT * FROM answer WHERE id_question = '$id_question'";
                    $queryanswer = mysqli_query($connect, $sqlanswer) or die(mysqli_error($connect));
                    while ($answer = mysqli_fetch_array($queryanswer)) {
                    ?>
                        <div class="answer">
                            <p>Jawaban: <?= $answer['answer'] ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
    </section>

    <div id="footer-placeholder"></div>
    <script src="https://kit.fontawesome.com/a20a32b1ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const questions = document.querySelectorAll(".question");
            questions.forEach(function(question) {
                const questionHeading = question.querySelector(".question-heading");
                const answer = question.querySelector(".answer");
                questionHeading.addEventListener("click", function() {
                    question.classList.toggle("active");
                    if (question.classList.contains("active")) {
                        answer.style.maxHeight = answer.scrollHeight + "px";
                    } else {
                        answer.style.maxHeight = 0;
                    }
                });
            });
        });
    </script>
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
</body>

</html>