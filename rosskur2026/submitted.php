<?php
require('../database.php');

if (isset($_POST["submit"])) {
    $stamm = $_POST['stamm'];
    $anzahl = $_POST['anzahl'];
    $art = $_POST['art'];
    $ankunft = $_POST['ankunft'];
    $anreise = $_POST['anreise'];
    $schlafen = $_POST['schlafen'];
    $vegi  = !empty($_POST['vegi'])  ? (int) $_POST['vegi']  : null;
    $vegan = !empty($_POST['vegan']) ? (int) $_POST['vegan'] : null;

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
        INSERT INTO kontakt (name, vorname, telefonnummer, email, anmeldungID)
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
    <title>Du bist angemeldet! - Rosskur 2026</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        div {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div>
    Hallo <?php echo $art == 'rover' ? 'Rover*innen' : 'Leiter*innen';?> vom Stamm <?php echo $stamm;?>!<br>
    Ihr seid angemeldet zur Rosskur 2026 in Idstein. Bereitet euch auf ein spannendes Abenteuer unter dem Motto Verschwörungstheorien vor.<br>
    Wir freuen uns auf euch!
</div>
</body>
</html>
