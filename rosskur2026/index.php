<?php
$tab = $_GET['tab'];
?>
<html lang="de">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rosskur 2026</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="nav">
    <a href="?tab=main#">Rosskur 2026</a>
    <a href="?tab=main#blog">Infos</a>
    <a href="?tab=main#anmelden">Anmelden</a>
</div>
<?php include $tab . ".php"; ?>
<div class="footer">
    <div>
        Diese Seite ist eine Spaßseite zur Anmeldung einer Pfadfinderveranstaltung des DPSG Stamm Sankt Martin
        Idstein.<br>
        Die Informationen auf dieser Seite sind mit entsprechender Retorik gestaltet und mit Vorsicht zu genießen.
    </div>
    <div>
        <a href="https://sippis-dpsg.de/contact">Impressum</a>
        <a href="https://sippis-dspg.de">Rover Idstein</a>
        <a href="https://www.dpsg-idstein.de">DPSG Stamm Sankt Martin Idstein</a>
        <a href="mailto:kontakt@sippis-dpsg.de">Kontakt per Mail</a>
    </div>
</div>
</body>
</html>
