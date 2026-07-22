<?php
require("../database.php");

if (isset($_POST["submit"])) {
    $stamm = $_POST["stamm"];
    $anzahl = $_POST["anzahl"];
    $art = $_POST["art"];
    $ankunft = $_POST["ankunft"];
    $anreise = $_POST["anreise"];
    $schlafen = $_POST["schlafen"];
    $vegi = $_POST["vegi"];

    $vorname1 = $_POST["vorname1"];
    $nachname1 = $_POST["nachname1"];
    $tele1 = $_POST["tele1"];
    $mail1 = $_POST["mail1"];
    $whatsapp1 = $_POST["whatsapp1"];

    $vorname2 = $_POST["vorname2"];
    $nachname2 = $_POST["nachname2"];
    $tele2 = $_POST["tele2"];
    $mail2 = $_POST["mail2"];
    $whatsapp2 = $_POST["whatsapp2"];

    $stmt = PDO->prepare("
        INSERT INTO rosskur (
                  stamm, anzahl, art, ankunft, anreise, schlafen, vegi,
                  vorname1, nachname1, tele1, mail1, whatsapp1,
                  vorname2, nachname2, tele2, mail2, whatsapp2
        ) VALUES (
                  :stamm, :anzahl, :art, :ankunft, :anreise, :schlafen, :vegi,
                  :vorname_one, :nachname_one, :tele_one, :mail_one, :whatsapp_one,
                  :vorname_two, :nachname_two, :tele_two, :mail_two, :whatsapp_two
        )");

    $stmt->execute([
            ':stamm' => $stamm,
            ':anzahl' => $anzahl,
            ':art' => $art,
            ':ankunft' => $ankunft,
            ':anreise' => $anreise,
            ':schlafen' => $schlafen,
            ':vegi' => $vegi,

            ':vorname_one' => $vorname1,
            ':nachname_one' => $nachname1,
            ':tele_one' => $tele1,
            ':mail_one' => $mail1,
            ':whatsapp_one' => $whatsapp1,

            ':vorname_two' => $vorname2,
            ':nachname_two' => $nachname2,
            ':tele_two' => $tele2,
            ':mail_two' => $mail2,
            ':whatsapp_two' => $whatsapp2
    ]);
}
?>
<html lang="de">
<head>
    <title>Du bist angemeldet! - Rosskur 2026</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
Hallo <?php echo $art == 'rover' ? 'Rover*innen' : 'Leiter*innen'; ?> vom Stamm <?php echo $stamm; ?>!<br>
Ihr seid angemeldet zur Rosskur 2026 in Idstein. Bereitet euch vor einen schwierigen Kriminalfall aufzunehmen.<br>
Wir freuen uns auf euch!
</body>
</html>
