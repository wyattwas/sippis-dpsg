<?php
require('../database.php');

if (isset($_POST["submit"])) {
    $stamm = $_POST['stamm'];
    $anzahl = $_POST['anzahl'];
    $art = $_POST['art'];
    $ankunft = $_POST['ankunft'];
    $anreise = $_POST['anreise'];
    $schlafen = $_POST['schlafen'];
    $vegi = $_POST['vegi'];
    $vegan = $_POST['vegan'];

    $vorname1 = $_POST['vorname1'];
    $name1 = $_POST['nachname1'];
    $tel1 = $_POST['tele1'];
    $mail1 = $_POST['mail1'];

    $vorname2 = $_POST['vorname2'];
    $name2 = $_POST['nachname2'];
    $tel2 = $_POST['tele2'];
    $mail2 = $_POST['mail2'];

    $stmt = PDO->prepare("
        INSERT INTO anmeldung (stamm, anzahl, art, anreise, schlafen, vegi, vegan, ankunft)
        VALUES (:stamm, :anzahl, :art, :anreise, :schlafen, :vegi, :vegan, :ankunft)
    ");
    $stmt->execute([
        ':stamm' => $stamm,
        ':anzahl' => $anzahl,
        ':art' => $art,
        ':anreise' => $anreise,
        ':schlafen' => $schlafen,
        ':vegi' => $vegi,
        ':vegan' => $vegan,
        ':ankunft' => $ankunft,
    ]);

    $anmeldungId = PDO->lastInsertId();

    $stmt = PDO->prepare("
        INSERT INTO kontakt (name, vorname, telefon, email, anmeldungID)
        VALUES (:name, :vorname, :telefon, :email, :anmeldungID)
    ");
    $stmt->execute([
        ':name' => $name1,
        ':vorname' => $vorname1,
        ':telefon' => $tel1,
        ':email' => $mail1,
        ':anmeldungID' => $anmeldungId,
    ]);

    $stmt->execute([
        ':name' => $name2,
        ':vorname' => $vorname2,
        ':telefon' => $tel2,
        ':email' => $mail2,
        ':anmeldungID' => $anmeldungId,
    ]);
}
?>

<html lang="de">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rosskur 2026</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .comic-relief-bold {
            font-family: "Comic Relief", system-ui;
            font-weight: 700;
            font-style: normal;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: min(10vw, 100px);
            background-image: url("https://media.istockphoto.com/id/1137124201/de/foto/mehrere-flugzeuge-am-himmel-mit-chemtrail-verschw%C3%B6rungstheorie-konzept-wei%C3%9Fe-airliner-gegen.jpg?s=612x612&w=0&k=20&c=CvayxwhCopwuAPw19ZH6pozwTGIFKcTbXKt2pEgUH1A=");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right;
            height: 90vh;
            color: white;

            a {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
        }

        .logo-svg {
            width: min(30vw, 300px);
        }

        #angry-emoji {
            width: 150px;
        }

        .blog {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-top: 50px;

            div {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
                gap: 20px;
                max-width: 1000px;

                div {
                    display: flex;
                    flex-direction: column;
                    gap: 0;
                    font-size: 12px;
                }
            }
        }

        .blog-img {
            max-width: 500px;
            max-height: 300px;
        }

        .anmelden {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-top: 50px;

            form {
                width: min(90%, 500px);
            }

            input {
                width: 100%;
            }

            input[type="radio"] {
                width: auto;
            }
        }

        .required {
            color: red;
        }
    </style>
</head>
<body>
<span class="header comic-relief-bold">
    <a>Schluss mit der Gehirnwäsche von</a>
    <a>
        <img alt="ZDF" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/ZDF_logo.svg" class="logo-svg"> & <img
                alt="ARD"
                src="https://upload.wikimedia.org/wikipedia/commons/1/19/ARD_Logo_2019.svg"
                class="logo-svg">
    </a>
    <img src="assets/angry-emoji.png" alt="Angry Emoji Sticker" id="angry-emoji">
</span>
<div class="blog" id="blog">
    <div>
        <div>
            <img class="blog-img" src="https://i.redd.it/45bvrq5d0zqf1.jpeg" alt="Impfen? Nein danke!!">
            <i>Quelle: reddit.com/r/ichbin40undSchwurbler</i>
        </div>
        Hallo Leutchiens und willkommen zurück zu meinem Blog.<br>
        Wenn ihr hier angekommen seit, habt ihr es geschafft und euch endlich entschieden nach oben zu schauen und die
        Augen zu öffnen.
    </div>
    <div>
        Die da oben verpassen und Gehirnwäsche mit deb Öffentlichen. Mit deren Impfungen wollen die uns gehorsam machen
        und die 5G Strahlung soll uns auch Impfen.
        Mit den Chemtrails wollen die uns kaputt machen.<br>
        Die einzige Wahrheit findet ihr hier.<br>
        <div>
            <img class="blog-img" src="https://i.redd.it/esyyj54yxiqf1.jpeg"
                 alt="Menschengemachter Klimawandel ist fake!!!!1!!11">
            <i>Quelle: reddit.com/r/ichbin40undSchwurbler</i>
        </div>
    </div>
    <div>
        <div>
            <img class="blog-img" src="https://i.redd.it/gs3p4qy1zarf1.png" alt="Chemtrails impfen!!">
            <i>Quelle: reddit.com/r/ichbin40undSchwurbler</i>
        </div>
    </div>
    <div>
        Um noch mehr von der Wahrheit zu überzeugen, machen wir so ne Demo.
        Vom 18.09. bis 20.09.2026 treffen wir uns und verbreiten die Wahrheit.
        Denkt dran, nur ungeimpfte dürfen kommen.
    </div>
    <a href="data:text/calendar;charset=utf8,BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Beispiel//DE
BEGIN:VEVENT
UID:20250926T120000-1234@sippis-dpsg.de
DTSTAMP:20260918T170000Z
DTSTART:20260918T170000Z
DTEND:20260920T110000Z
SUMMARY:Rosskur 2026
DESCRIPTION:Agenda\\: Rosskur 2026 unter dem Motto Verschwörungstheorien
LOCATION:Himmelsbornweg 3, 65510 Idstein
END:VEVENT
END:VCALENDAR"
       download="rosskur2026.ics">
        Als .ics herunterladen
    </a>

</div>
<div class="anmelden" id="anmelden">
    <h1>Anmeldung</h1>
    <form action="?tab=submitted" method="post" enctype="multipart/form-data">
        <div>
            <p>
                <label for="stamm">Stamm:<a class="required">*</a></label><br>
                <input type="text" id="stamm" name="stamm" placeholder="Stamm..." required>
            </p>
            <p>
                <label for="anzahl">Anzahl:<a class="required">*</a></label><br>
                <input type="number" id="anzahl" name="anzahl" min="1" required>
            </p>
            <p>
                Als was tretet ihr an:<a class="required">*</a><br>
                <input type="radio" id="rover" name="art" value="rover" required>
                <label for="rover">Rover*innen</label>
                <input type="radio" id="leiter" name="art" value="leiter">
                <label for="leiter">Leiter*innen</label>
            </p>
            <p>
                <label for="ankunft">Ankunftszeit:<a class="required">*</a></label><br>
                <input type="time" id="ankunft" name="ankunft" required>
            </p>
            <p>
                Art der Anreise:<a class="required">*</a><br>
                <input type="radio" id="auto" name="anreise" value="auto" required>
                <label for="auto">Auto</label>
                <input type="radio" id="bus" name="anreise" value="bus">
                <label for="bus">Öffis</label>
            </p>
            <p>
                <label for="schlafen">Anzahl der Übernachtenden:<a class="required">*</a></label><br>
                <input type="number" id="schlafen" name="schlafen" required>
            </p>
            <p>
                <label for="vegi">Anzahl Vegetarier:</label><br>
                <input type="number" id="vegi" name="vegi" min="0">
            </p>
            <p>
                <label for="vegan">Anzahl Veganer:</label><br>
                <input type="number" id="vegan" name="vegan" min="0">
            </p>
        </div>
        <div>
            <h2>Ansprechperson 1</h2>
            <p>
                <label for="vorname1">Vorname:<a class="required">*</a></label><br>
                <input type="text" id="vorname1" name="vorname1" placeholder="Vorname..." required>
            </p>
            <p>
                <label for="nachname1">Nachname:<a class="required">*</a></label><br>
                <input type="text" id="nachname1" name="nachname1" placeholder="Nachname..." required>
            </p>
            <p>
                <label for="tele1">Telefonnummer:<a class="required">*</a></label><br>
                <input type="tel" id="tele1" name="tele1" placeholder="+49 123 123456789"
                       pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                       required>
            </p>
            <p>
                <label for="mail1">E-Mail:<a class="required">*</a></label><br>
                <input type="email" id="mail1" name="mail1" placeholder="E-Mail..." required>
            </p>
        </div>
        <div>
            <h2>Ansprechperson 2</h2>
            <p>
                <label for="vorname2">Vorname:<a class="required">*</a></label><br>
                <input type="text" id="vorname2" name="vorname2" placeholder="Vorname..." required>
            </p>
            <p>
                <label for="nachname2">Nachname:<a class="required">*</a></label><br>
                <input type="text" id="nachname2" name="nachname2" placeholder="Nachname..." required>
            </p>
            <p>
                <label for="tele2">Telefonnummer:<a class="required">*</a></label><br>
                <input type="tel" id="tele2" name="tele2" placeholder="+49 123 123456789"
                       pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                       required>
            </p>
            <p>
                <label for="mail2">E-Mail:<a class="required">*</a></label><br>
                <input type="email" id="mail2" name="mail2" placeholder="E-Mail..." required>
            </p>
        </div>
        <p>
            <a class="required">*</a> Benötigte Angaben<br>
        </p>
        <input type="submit" value="Anmelden" name="submit">
    </form>
</div>
</body>
</html>
