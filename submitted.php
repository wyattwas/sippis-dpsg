<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $content = $_POST["content"];
}
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
<script>
    console.log(<?php echo json_encode($_POST); ?>);
</script>
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
            <li class="nav-item">
                <a class="nav-link" href="canada.php">Kanada 2026</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://rosskur2026.de">Rosskur 2026</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content">
    <div class="page">
        <h2>Vielen Dank!</h2>
        <p>
            Wir haben deine Anfrage erhalten.<br>
            Wir werden uns so schnell wie möglich bei dir melden.<br>
        </p>
        <h3>Deine Daten</h3>
        <p>
            Name:<br>
            <?php echo $name; ?><br>
            E-Mail:<br>
            <?php echo $mail; ?><br>
            Inhalt:<br>
            <?php echo $content; ?><br>
        </p>
    </div>
</div>
</body>
</html>