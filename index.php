<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sippis @ DPSG Idstein</title>
    <link rel="icon" type="image/png" href="img/rochen_logo-circle.png">
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
    <a class="navbar-brand" href="#"><img src="img/rochen_logo-circle.png" alt="Sippis" style="max-height: 100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Start <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content">
    <div class="page page-canada">
        <h1>Rover auf großer Fahrt</h1>
        <p>
            2026 wollen wir unsere Abschlussfahrt veranstalten.<br>
            Unser Ziel ist Kanada. Da wir dafür noch jede Menge finanzielle Unterstützund benötigen,
            bieten wir unsere Hilfe an.<br>
            Wir können für euch Aufgaben übernehemen und würden uns über eine Spende freuen.
            Z.B. Gartenarbeit, Einkäufe, Hilfe beim Umzug, Computerhilfe, oder Ähnliches<br>
        </p>
        <p>
            Wenn ihr etwas habt, bei dem ihr Hilfe braucht, meldet euch gerne bei uns.<br>
            <br>
            E-Mail: <a href="mailto:kontakt@sippis-dpsg.de">kontakt@sippis-dpsg.de</a><br>
            Telefon: <a href="tel:+4917655233953">+49 176 55233953</a>
        </p>
        <p>
            <img src="img/Rover-auf-großer-Fahrt.png" alt="Rover auf großer Fahrt"
                 class="w-100 border-radius-8 gray-border">
        </p>
    </div>
    <div class="page">
        <h1>Einen Schritt näher</h1>
        <p>
            Am 08.03. haben wir unseren ersten Auftrag absolviert.<br>
            von 11 Uhr bis 17 Uhr haben wir mit unserem Stammesanhänger Grünschnitt und Renovierungsmüll zum Grünschnitt
            und zur Deponie gefahren.<br>
            Insgesamt sechs Hänger Ladungen haben wir bewegt.<br>
        </p>
        <p>
            Wir haben einige Möglichkeiten dir mit Gartenarbeit zu helfen.<br>
            Unser Stamm verfügt über einen Anhänger mit dem Wir ca. 4 cm³ transportieren können.<br>
            Wir haben auch einiges an Gartenwerkzeug was wir für unsere Arbeit mitbringen können, fragt im Zweifel gerne nochmal nach.
        </p>
        <p>
            <a href="https://www.instagram.com/p/DG8yxo9OhE1/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
               class="link-button text-white">Instagram
                Post</a>
        </p>
        <div>
            <img src="https://dpsg-idstein.de/images/Rover/IMG_20250308_160408973.jpg"
                 alt="Drei Sippis bringen Grünschnitt weg"
                 class="border-radius-8 w-100 padding-3"/>
            <div style="display: flex; flex-direction: row;">
                <img src="https://dpsg-idstein.de/images/Rover/IMG_20250308_153946165.jpg" alt="Ein Sippi zägt Holz"
                     class="border-radius-8 padding-3 w-50"/>
                <img src="https://dpsg-idstein.de/images/Rover/IMG_20250308_160344226.jpg"
                     alt="Unser vollbeladener Stammesanhänger"
                     class="border-radius-8 padding-3 w-50"/>
            </div>
        </div>
    </div>
    <div class="page">
        <h1>Auch Digital</h1>
        <p>
            Wir sind auch digitale Helfer.<br>
            Ob es um das Einrichten eines Druckers, oder komplexere Dinge, wie das aufsetzen eines Docker Containers
            oder Erstellen einer Website geht.<br>
            Frag gerne nach und wir helfen dir.
        </p>
    </div>
    <div class="page">
        <h1>So viel haben wir schon gesammelt</h1>
        <p>
            <?= $money_amount[0] ?>
        </p>
    </div>
</div>
</body>
</html>