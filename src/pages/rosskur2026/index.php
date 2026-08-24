<div class="content">
    <div class="page">
        <h1>Rosskur 2026</h1>
        <p>
            <img src="../../assets/Save_the_date_Rosskur_26.png" alt="Flyer Rosskur 2026"
                 class="w-100 border-radius-8 gray-border">
        </p>
        <p>
            Nachdem wir im letzten Jahr den ersten Platz, bei der Rosskur in Eschborn geholt haben,
            freuen wir uns, die Rosskur dieses Jahr bei uns ausrichten zu dürfen.<br>
            Vom <b>11.09. bis 13.09.2026</b> dürfen wir euch in Idstein begrüßen.<br>
            Unter dem Motto "Murder? Mystery!" werden wir euch, beim Lösen eines spannenden Tatfalls durch Idsteiner
            Land führen.
        </p>
        <p>
            <a href="../../assets/rosskur.ics"
               class="link-button text-white bg-danger">In den Kalender eintragen</a>
        </p>
    </div>
    <div class="page">
        <h1>Informationen an alle Kriminalpolizisten</h1>
        <p>
            Ihr dürft <b>freitags ab 16:00 Uhr</b> anreisen. Ihr könnt mit euren Streifenwaagen an die unten angegebene
            Adresse fahren oder mit den öffentlichen Verkehrsmitteln bis zum Bahnhof Idstein, wo wir euch nach Absprache
            mit einem Shuttle abholen können. Vor Ort könnt ihr eure Zelte aufbauen bevor ihr euch an die Ermittlungen
            macht. <b>Der Teilnehmerbeitrag pro Person beträgt 20 €.</b> Falls ihr keine eigenen Zelte mitbringen könnt,
            könnt ihr uns das im Anmeldeformular mitteilen. Der Anmeldeschluss ist am 1. September. Für dringliche
            Mitteilungen stehen wir euch unter den <a href="/contact">Kontaktdaten</a> auf unserer Kontaktseite zur
            Verfügung.
        </p>
        <p>
            <iframe class="border-radius-8 gray-border w-100 height-300"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=8.278525471687319%2C50.21657514126309%2C8.280939459800722%2C50.21821762337608&amp;layer=mapnik&amp;marker=50.21739638938805%2C8.279732465744019"></iframe>
            <br>
            <small class="padding-3">
                <a class="link-button text-white bg-danger"
                   href="https://maps.app.goo.gl/agtKxfj3yg2UY85k8">
                    Größere Karte zeigen
                </a>
            </small>
        </p>
    </div>
    <div class="page w-100">
        <h1>Anmeldung</h1>
        <form action="/rosskur2026/signedup" method="post">
            <p>
                <label for="stamm" class="needed">Stamm:</label>
                <input type="text" id="stamm" name="stamm" placeholder="Stamm..." class="form-control" required><br>

                <label for="anzahl" class="needed">Anzahl:</label>
                <input type="number" id="anzahl" name="anzahl" min="1" class="form-control" required><br>

                <span class="needed">Als was tretet ihr an:</span>
                <input type="radio" id="rover" name="art" value="rover" required>
                <label for="rover">Rover*innen</label>
                <input type="radio" id="leiter" name="art" value="leiter">
                <label for="leiter">Leiter*innen</label><br>

                <label for="ankunft" class="needed">Ankunftszeit:</label>
                <input type="time" id="ankunft" name="ankunft" class="form-control" required><br>

                <span class="needed">Art der Anreise:</span>
                <input type="radio" id="auto" name="anreise" value="auto" required>
                <label for="auto">Auto</label>
                <input type="radio" id="bus" name="anreise" value="bus">
                <label for="bus">Öffis</label><br>

                <label for="schlafen" class="needed">Wie viele von euch übernachten von Samstag auf Sonntag:</label>
                <input type="number" id="schlafen" name="schlafen" class="form-control" required><br>

                <label for="vegi">
                    Informationen zu Allergien, Unverträglichkeiten, vegetarisch/vegan, etc.:
                </label>
                <input type="text" id="vegi" name="vegi" class="form-control"><br>
            </p>

            <h2>Ansprechperson 1</h2>
            <p>
                <label for="vorname1" class="needed">Vorname:</label>
                <input type="text" id="vorname1" name="vorname1" placeholder="Vorname..." class="form-control" required><br>

                <label for="nachname1" class="needed">Nachname:</label>
                <input type="text" id="nachname1" name="nachname1" placeholder="Nachname..." class="form-control"
                       required><br>

                <label for="tele1" class="needed">Telefonnummer:</label><br>
                <b class="text-danger">Auf Format achten! +49 123 123456789</b>
                <input type="tel" id="tele1" name="tele1" placeholder="+49 123 123456789"
                       pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                       class="form-control"
                       required><br>

                <label for="mail1">E-Mail:</label>
                <input type="email" id="mail1" name="mail1" placeholder="E-Mail..." class="form-control"><br>

                Wir werden eine WhatsApp-Gruppe erstellen, um während der Veranstaltung wichtige Informationen mit euch
                teilen zu können. Bitte markiert mindestens eine Ansprechperson dafür.<br>
                <input type="checkbox" id="whatsapp1" name="whatsapp1">
                <label for="whatsapp1">Füge mich in die WhatsAp-Gruppe hinzu</label><br>
            </p>

            <h2>Ansprechperson 2</h2>
            <p>
                <label for="vorname2" class="needed">Vorname:</label>
                <input type="text" id="vorname2" name="vorname2" placeholder="Vorname..." class="form-control" required><br>

                <label for="nachname2" class="needed">Nachname:</label>
                <input type="text" id="nachname2" name="nachname2" placeholder="Nachname..." class="form-control"
                       required><br>

                <label for="tele2" class="needed">Telefonnummer:</label><br>
                <b class="text-danger">Auf Format achten! +49 123 123456789</b>
                <input type="tel" id="tele2" name="tele2" placeholder="+49 123 123456789"
                       pattern="^\+\d{1,3}\s\d{3}\s\d+$"
                       class="form-control"
                       required><br>

                <label for="mail2">E-Mail:</label>
                <input type="email" id="mail2" name="mail2" placeholder="E-Mail..." class="form-control"><br>

                <input type="checkbox" id="whatsapp2" name="whatsapp2">
                <label for="whatsapp2">Füge mich in die WhatsAp-Gruppe hinzu</label><br>
            </p>

            <label for="anmerkungen">Falls ihr weitere Anmerkungen oder Mitteilungen an uns habt, könnt ihr das gerne
                hier tun:</label>
            <textarea id="anmerkungen" name="anmerkungen" rows="5" class="form-control"
                      placeholder="Wir bräuchten ein Zelt zum übernachten und einen Shuttle vom Bahnhof..."></textarea><br>

            <label for="code">Code:</label>
            <input type="text" id="code" name="code" class="form-control"><br>

            <p><a class="text-danger">*</a> Benötigte Angaben</p>
            <input name="submit" type="submit" value="Anmeldung absenden"
                   class="btn btn-primary btn-danger border-radius-8">
        </form>
    </div>
</div>