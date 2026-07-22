<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rosskur 2026 | Sippis @ DPSG Idstein</title>
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
            <li class="nav-item">
                <a class="nav-link" href="canada.php">Kanada 2026</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="rosskur2026.php">Rosskur 2026<span class="sr-only">(current)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content">
    <div class="page">
        <h1>Rosskur 2026</h1>
        <p>
            <img src="assets/Save_the_date_Rosskur_26.png" alt="Flyer Rosskur 2026"
                 class="w-100 border-radius-8 gray-border">
        </p>
        <p>
            Nachdem wir im letzten Jahr den ersten Platz, bei der Rosskur in Eschborn geholt haben,
            freuen wir uns, die Rosskur dieses Jahr bei uns ausrichten zu dürfen.<br>
            Vom <b>11.09. bis 13.09.2026</b> dürfen wir euch in Idstein begrüßen.<br>
            Unter dem Motto "Murder? Mystery!" werden wir euch in, beim Lösen eines spannenden Tatfalls durch Idsteiner
            Land führen.<br>
            Die Anmeldung und weitere Informationen folgen. Um nichts zu verpassen, folgt uns gerne auf Insta.
        </p>
        <p>
            <a href="assets/rosskur.ics"
               class="link-button text-white bg-danger">In den Kalender eintragen</a>
        </p>
        <p>
            <a href="https://www.instagram.com/sippis_idstein"
               class="link-button text-white bg-danger">Unser Instagram Profil</a>
        </p>
    </div>
    <div class="page">
        <h1>Anmeldung</h1>
        <form action="submitted.php" method="post">
            <p>
            <p>
                <label>Stamm:<a class="required">*</a><br>
                    <input type="text" id="stamm" name="stamm" placeholder="Stamm..." required>
                </label>
            </p>
            <p>
                <label>Anzahl:<a class="required">*</a><br>
                    <input type="number" id="anzahl" name="anzahl" min="1" required>
                </label>
            </p>
            <p>
                Als was tretet ihr an:<a class="required">*</a><br>
                <label>
                    <input type="radio" id="rover" name="art" value="rover" required>
                    Rover*innen
                </label>
                <label>
                    <input type="radio" id="leiter" name="art" value="leiter">
                    Leiter*innen
                </label>
            </p>
            <p>
                <label>Ankunftszeit:<a class="required">*</a><br>
                    <input type="time" id="ankunft" name="ankunft" required>
                </label>
            </p>
            <p>
                Art der Anreise:<a class="required">*</a><br>
                <label>
                    <input type="radio" id="auto" name="anreise" value="auto" required>
                    Auto
                </label>
                <label>
                    <input type="radio" id="bus" name="anreise" value="bus">
                    Öffis
                </label>
            </p>
            <p>
                <label>Anzahl der Übernachtenden:<a class="required">*</a><br>
                    <input type="number" id="schlafen" name="schlafen" required>
                </label>
            </p>
            <p>
                <label>Anzahl Vegetarier:<br>
                    <input type="number" id="vegi" name="vegi" min="0">
                </label>
            </p>
            <p>
                <label>Anzahl Veganer:<br>
                    <input type="number" id="vegan" name="vegan" min="0">
                </label>
            </p>
            </p>
            <p>
            <h2>Ansprechperson 1</h2>
            <p>
                <label>Vorname:<a class="required">*</a><br>
                    <input type="text" id="vorname1" name="vorname1" placeholder="Vorname..." required>
                </label>
            </p>
            <p>
                <label>Nachname:<a class="required">*</a><br>
                    <input type="text" id="nachname1" name="nachname1" placeholder="Nachname..." required>
                </label>
            </p>
            <p>
                <label>Telefonnummer:<a class="required">*</a><br>
                    <input type="tel" id="tele1" name="tele1" placeholder="+49 123 123456789"
                           pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                           required>
                </label>
            </p>
            <p>
                <label>E-Mail:<a class="required">*</a><br>
                    <input type="email" id="mail1" name="mail1" placeholder="E-Mail..." required>
                </label>
            </p>
            </p>
            <p>
            <h2>Ansprechperson 2</h2>
            <p>
                <label>Vorname:<a class="required">*</a><br>
                    <input type="text" id="vorname2" name="vorname2" placeholder="Vorname..." required>
                </label>
            </p>
            <p>
                <label>Nachname:<a class="required">*</a><br>
                    <input type="text" id="nachname2" name="nachname2" placeholder="Nachname..." required>
                </label>
            </p>
            <p>
                <label>Telefonnummer:<a class="required">*</a><br>
                    <input type="tel" id="tele2" name="tele2" placeholder="+49 123 123456789"
                           pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                           required>
                </label>
            </p>
            <p>
                <label>E-Mail:<a class="required">*</a><br>
                    <input type="email" id="mail2" name="mail2" placeholder="E-Mail..." required>
                </label>
            </p>
            </p>
            <p>
                <a class="required">*</a> Benötigte Angaben<br>
            </p>
            <input type="submit">
        </form>
    </div>
</div>
</body>
</html>
