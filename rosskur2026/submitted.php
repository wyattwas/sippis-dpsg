<?php ?>
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
    Hallo <?php echo $_POST['art'] == 'rover' ? 'Rover*innen' : 'Leiter*innen';?> vom Stamm <?php echo $_POST['stamm'];?>!<br>
    Ihr seid angemeldet zur Rosskur 2026 in Idstein. Bereitet euch auf ein spannendes Abenteuer unter dem Motto Verschwörungstheorien vor.<br>
    Wir freuen uns auf euch!
</div>
</body>
</html>
