<?php
require "database.php";

if (isset($_POST["submit"])) {
    $stamm = $_POST["stamm"];
    $anzahl = $_POST["anzahl"];
    $art = $_POST["art"];
    $ankunft = $_POST["ankunft"];
    $anreise = $_POST["anreise"];
    $schlafen = $_POST["schlafen"];
    $vegi = $_POST["vegi"] ?? null;
    $anmerkungen = $_POST["anmerkungen"];

    $vorname1 = $_POST["vorname1"];
    $nachname1 = $_POST["nachname1"];
    $tele1 = $_POST["tele1"];
    $mail1 = $_POST["mail1"] ?? null;
    $whatsapp1 = $_POST["whatsapp1"] ?? null;

    $vorname2 = $_POST["vorname2"];
    $nachname2 = $_POST["nachname2"];
    $tele2 = $_POST["tele2"];
    $mail2 = $_POST["mail2"] ?? null;
    $whatsapp2 = $_POST["whatsapp2"] ?? null;

    $stmt = PDO->prepare("
        INSERT INTO rosskur (
                  stamm, anzahl, art, ankunft, anreise, schlafen, vegi, anmerkungen,
                  vorname1, nachname1, tele1, mail1, whatsapp1,
                  vorname2, nachname2, tele2, mail2, whatsapp2
        ) VALUES (
                  :stamm, :anzahl, :art, :ankunft, :anreise, :schlafen, :vegi, :anmerkungen,
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
            ':anmerkungen' => $anmerkungen,

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
    $id = PDO->lastInsertId();
}
?>

<div class="page">
    <p>
        Hallo <?php echo $art == 'rover' ? 'Rover*innen' : 'Leiter*innen'; ?> vom Stamm <?php echo $stamm; ?>!<br>
        Ihr seid angemeldet zur Rosskur 2026 in Idstein. Bereitet euch vor einen schwierigen Kriminalfall
        aufzunehmen.<br>
        Wir freuen uns auf euch!
    </p>
    <p>
        Bitte überprüft eure Angaben, falls Abweichungen auftreten sollten, meldet euch bitte bei uns.
    </p>
    <table>
        <thead>
        <tr>
            <td colspan="2"><h3>Informationen</h3></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Stamm Name</td>
            <td><?= $stamm ?></td>
        </tr>
        <tr>
            <td>Anzahl</td>
            <td><?= $anzahl ?></td>
        </tr>
        <tr>
            <td>Gruppe</td>
            <td><?= $art == 'rover' ? 'Rover' : 'Leiter' ?></td>
        </tr>
        <tr>
            <td>Ankuftszeit</td>
            <td><?= $ankunft ?></td>
        </tr>
        <tr>
            <td>Art der Anreise</td>
            <td><?= $anreise == 'auto' ? 'Auto' : 'ÖPNV' ?></td>
        </tr>
        <tr>
            <td>Anzahl der Übernachtenden</td>
            <td><?= $schlafen ?></td>
        </tr>
        <tr>
            <td>Informationen zu Allergien, Unverträglichkeiten, vegetarisch/vegan, etc.</td>
            <td><?= $vegi ?></td>
        </tr>
        <tr>
            <td colspan="2"><h3>Kontakt 1</h3></td>
        </tr>
        <tr>
            <td>Vorname</td>
            <td><?= $vorname1 ?></td>
        </tr>
        <tr>
            <td>Nachname</td>
            <td><?= $nachname1 ?></td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td><?= $tele1 ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $mail1 ?></td>
        </tr>
        <tr>
            <td>WhatsApp?</td>
            <td><?= $whatsapp1 == 'on' ? 'Ja' : 'Nein' ?></td>
        </tr>
        <tr>
            <td colspan="2"><h3>Kontakt 2</h3></td>
        </tr>
        <tr>
            <td>Vorname</td>
            <td><?= $vorname2 ?></td>
        </tr>
        <tr>
            <td>Nachname</td>
            <td><?= $nachname2 ?></td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td><?= $tele2 ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $mail2 ?></td>
        </tr>
        <tr>
            <td>WhatsApp?</td>
            <td><?= $whatsapp2 == 'on' ? 'Ja' : 'Nein' ?></td>
        </tr>
        <tr>
            <td>Anmerkungen</td>
            <td><?= $anmerkungen ?></td>
        </tr>
        </tbody>
    </table>
    <p>
        <a href="/rosskur2026"
           class="link-button text-white bg-danger">Zurück zur Rosskur</a>
        <br>
        <a href="mailto:kontakt@sippis-dpsg.de?subject=Rosskur%20Anmeldung%20ID%3A%20<?= $id ?>"
           class="link-button text-white bg-danger">Kontaktiere uns</a>
    </p>
</div>
