<?php ?>
<html lang="de">
<head>
    <title>Rosskur 2026</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
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

        .nav {
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            background-color: rgb(255, 195, 0);

            a {
                padding: 10px;
                color: #000000;
            }
        }

        iframe {
            width: 100%;
            border: none;
        }

        .footer {
            border-top: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            gap: 20px;
            padding: 10px 0 10px 0;

            div {
                display: flex;
                flex-direction: column;
                gap: 5px
            }
        }
    </style>
</head>
<body>
<div class="nav">
    <a href="#">Rosskur 2026</a>
    <a href="#blog">Infos</a>
    <a href="#anmelden">Anmelden</a>
</div>
<iframe src="main.php" onload="resizeIframe(this)"></iframe>
<div class="footer">
    <div>
        Diese Seite ist eine Spaßseite zur Anmeldung einer Pfadfinderveranstaltung des DPSG Stamm Sankt Martin
        Idstein.<br>
        Die Informationen auf dieser Seite sind mit entsprechender Retorik gestaltet und mit Vorsicht zu genießen.
    </div>
    <div>
        <a href="https://sippis-dpsg.de/impressum">Impressum</a>
        <a href="https://sippis-dspg.de">Rover Idstein</a>
        <a href="https://www.dpsg-idstein.de">DPSG Stamm Sankt Martin Idstein</a>
        <a href="mailto:kontakt@sippis-dpsg.de">Kontakt per Mail</a>
    </div>
</div>
<script>
    function resizeIframe(iframe) {
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
</script>
</body>
</html>
