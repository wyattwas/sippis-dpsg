<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rosskur 2026 | Sippis @ DPSG Idstein</title>
    <link rel="icon" type="image/png" href="../assets/rochen_logo-circle.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
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
    <a class="navbar-brand" href="../index.php"><img src="../assets/rochen_logo-circle.png" alt="Sippis"
                                                     style="max-height: 100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Start</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../canada.php">Kanada 2026</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Rosskur 2026<span class="sr-only">(current)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contact.php">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content">
    <div class="page">
        <h1>Rosskur 2026</h1>
        <p>
            <img src="../assets/Save_the_date_Rosskur_26.png" alt="Flyer Rosskur 2026"
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
            <a href="../assets/rosskur.ics"
               class="link-button text-white bg-danger">In den Kalender eintragen</a>
        </p>
        <p>
            <a href="https://www.instagram.com/sippis_idstein"
               class="link-button text-white bg-danger">Unser Instagram Profil</a>
        </p>
    </div>
    <div class="page">
        <h1>Informationen an alle Kriminalpolizisten</h1>
        <p>
            Die Ermittlungen werden <b>am 11.09.2026 ab 16:00 Uhr</b> aufgenommen. Ihr könnt mit euren Streifenwaagen an
            die unten angegebene Adresse fahren oder mit den öffentlichen Verkehrsmitteln bis zum Bahnhof Idstein, wo
            wir euch nach Absprache mit einem Shuttle abholen können. Vor Ort könnt ihr eure Zelte aufbauen bevor ihr
            euch an die Ermittlungen macht. <b>Der Teilnehmerbeitrag pro Person beträgt 20 €.</b> Falls ihr keine
            eigenen Zelte mitbringen könnt, könnt ihr uns das im Anmeldeformular mitteilen. Für dringliche Mitteilungen
            stehen wir euch unter den <a href="../contact.php">Kontaktdaten</a> auf unserer Kontaktseite zur Verfügung.
        </p>
    </div>
    <div class="page w-100">
        <h1>Anmeldung</h1>
        <form action="submitted.php" method="post">
            <p>
                <label>Stamm:<a class="text-danger">*</a><br>
                    <input type="text" id="stamm" name="stamm" placeholder="Stamm..." class="form-control" required>
                </label>
            </p>
            <p>
                <label>Anzahl:<a class="text-danger">*</a><br>
                    <input type="number" id="anzahl" name="anzahl" min="1" class="form-control" required>
                </label>
            </p>
            <p>
                Als was tretet ihr an:<a class="text-danger">*</a><br>
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
                <label>Ankunftszeit:<a class="text-danger">*</a><br>
                    <input type="time" id="ankunft" name="ankunft" class="form-control" required>
                </label>
            </p>
            <p>
                Art der Anreise:<a class="text-danger">*</a><br>
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
                <label>Wie viele von euch übernachten von Samstag auf Sonntag:<a class="text-danger">*</a><br>
                    <input type="number" id="schlafen" name="schlafen" class="form-control" required>
                </label>
            </p>
            <p>
                <label>Informationen zu Allergien, Unverträglichkeiten, vegetarisch/vegan, etc.:<br>
                    <input type="text" id="vegi" name="vegi" class="form-control">
                </label>
            </p>
            <h2>Ansprechperson 1</h2>
            <p>
                <label>Vorname:<a class="text-danger">*</a><br>
                    <input type="text" id="vorname1" name="vorname1" placeholder="Vorname..." class="form-control"
                           required>
                </label>
            </p>
            <p>
                <label>Nachname:<a class="text-danger">*</a><br>
                    <input type="text" id="nachname1" name="nachname1" placeholder="Nachname..." class="form-control"
                           required>
                </label>
            </p>
            <p>
                <label>Telefonnummer:<a class="text-danger">*</a><br>
                    <input type="tel" id="tele1" name="tele1" placeholder="+49 123 123456789"
                           pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                           class="form-control"
                           required>
                </label>
            </p>
            <p>
                <label>E-Mail:<br>
                    <input type="email" id="mail1" name="mail1" placeholder="E-Mail..." class="form-control">
                </label>
            </p>
            <p>
                Wir werden eine WhatsApp-Gruppe erstellen, um während der Veranstaltung wichtige Informationen mit euch
                teilen zu können. Bitte markiert mindestens eine Ansprechperson dafür.
                <label>
                    <input type="checkbox" id="whatsapp1" name="whatsapp1" class="form-check">
                    Füge mich in die WhatsAp-Gruppe hinzu
                </label>
            </p>
            <h2>Ansprechperson 2</h2>
            <p>
                <label>Vorname:<a class="text-danger">*</a><br>
                    <input type="text" id="vorname2" name="vorname2" placeholder="Vorname..." class="form-control"
                           required>
                </label>
            </p>
            <p>
                <label>Nachname:<a class="text-danger">*</a><br>
                    <input type="text" id="nachname2" name="nachname2" placeholder="Nachname..." class="form-control"
                           required>
                </label>
            </p>
            <p>
                <label>Telefonnummer:<a class="text-danger">*</a><br>
                    <input type="tel" id="tele2" name="tele2" placeholder="+49 123 123456789"
                           pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                           class="form-control"
                           required>
                </label>
            </p>
            <p>
                <label>E-Mail:<br>
                    <input type="email" id="mail2" name="mail2" placeholder="E-Mail..." class="form-control">
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" id="whatsapp2" name="whatsapp2" class="form-check">
                    Füge mich in die WhatsAp-Gruppe hinzu
                </label>
            </p>
            <p>
                <label>Falls ihr weitere Anmerkungen oder Mitteilungen an uns habt, könnt ihr das gerne hier tun:<br>
                    <textarea id="anmerkungen" name="anmerkungen" rows="5" class="form-check"
                              placeholder="Wir bräuchten ein Zelt zum übernachten und einen Shuttle vom Bahnhof..."></textarea>
                </label>
            </p>
            <p>
                <a class="text-danger">*</a> Benötigte Angaben<br>
            </p>
            <input name="submit" type="submit" value="Absenden" class="btn btn-primary btn-danger border-radius-8">
        </form>
    </div>
</div>
</body>
</html>
