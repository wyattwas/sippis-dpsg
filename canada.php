<?php
require('database.php');

$money_overall = 11000;

$money_amount_query = "SELECT SUM(geld) as geld FROM auftrag WHERE status = 'erledigt'";
$stmt = PDO->query($money_amount_query);
$money_amount = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sippis @ DPSG Idstein</title>
    <link rel="icon" type="image/png" href="assets/rochen_logo-circle.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="description" content="Die Roverrunde des DPSG Sankt Martin Idstein">
    <meta name="theme-color" content="#ff4d4d">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="assets/rochen_logo-circle.png" alt="Sippis"
                                                  style="max-height: 100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Start</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="canada.php">Kanada 2026 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rosskur2026.php">Rosskur 2026</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content">
    <div class="page">
        <h1>Kanada 2026</h1>
        <div id="carouselExampleControls" class="carousel slide w-100 border-radius-8 gray-border" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 border-radius-8" src="assets/document(3).png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100 border-radius-8" src="assets/Rover-auf-großer-Fahrt.png" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <p>
            Die Zeit unserer Roverrunde kommt zum Ende.
            Als Abschlussfahrt wollen wir nochmal was Großes machen.
            Ein letztes Sommerlager mit unserer Runde.
            Wir wollen nach Kanada!
        </p>
        <p>
            Ein letztes großes Lager in Kanada.
            Zwei Wochen Hiken in der Natur von British Columbia.
            Rund um Vancouver wollen wir uns umsehen.
            Den nordamerikanischen Kontinent kennenlernen.
        </p>
        <p>
            Leider ist der Weg dort hin nicht ganz einfach und besonders nicht ganz günstig.
            Mit Flügen, Verpflegung und Unternehmen ist es ein teures Unterfangen.
            Um es aber trotzdem möglich zu machen, sind wir bereit für unser Ziel zu arbeiten.
            Wir bieten unsere Hilfe und bitten euch um Unterstützung.
        </p>
        <p>
            Über 1 1/2 Jahre erarbeiten wir uns unser Ziel.
            Wenn ihr Hilfe braucht bei Gartenarbeit, Umzug, Renovierung, Einkauf, im Alltag,
            aber auch mit dem Computer, Drucker oder komplexeren IT-Themen, wie Docker, Linux oder
            anderes,
            meldet euch gerne bei uns.
            Wir sind telefonisch, per Messenger, über Social Media oder per E-Mail erreichbar.
            Wir helfen euch und ihr helft uns unser Ziel zu erreichen.
        </p>
        <h2>So viel Geld wurde uns schon gespendet</h2>
        <p>
            <?php foreach ($money_amount as $money): ?>
                <progress id="file" value="<?= 100 / $money_overall * $money['geld'] ?>"
                          max="100"> <?= $money['geld'] ?>€
                </progress> <?= $money['geld'] ?>€ / <?= $money_overall ?>€
            <?php endforeach; ?>
        </p>
        <h2>Kontakt</h2>
        <p>
            E-Mail: <a class="text-danger" href="mailto:kontakt@sippis-dpsg.de">kontakt@sippis-dpsg.de</a><br>
            Telefon, WhatsApp, Signal: <a class="text-danger" href="tel:+4917655233953">+49 176 55233953</a><br>
            Instagram: <a class="text-danger" href="https://www.instagram.com/sippis_idstein">@sippis_idstein</a><br>
        </p>
        <p>
            <a href="contact.php"
               class="link-button text-white bg-danger">Kontakt Seite</a>
        </p>
    </div>
    <div class="page w-100">
        <h2>Anfrage</h2>
        <form action="submitted.php" method="post">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" placeholder="Name" class="form-control" required><br>
            <label for="mail">E-Mail</label>
            <input id="mail" name="mail" type="email" placeholder="john.doe@example.com" class="form-control"
                   required><br>
            <label for="content">Inhalt</label>
            <textarea id="content" name="content" placeholder="Ich hätte gerne eure Hilfe..." rows="5"
                      class="form-control"
                      required></textarea><br>
            <input name="submit" type="submit" value="Absenden" class="btn btn-primary btn-danger border-radius-8">
        </form>
    </div>
</div>
</body>
</html>