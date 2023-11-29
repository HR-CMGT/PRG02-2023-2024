<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Lesopdrachten les 4</title>
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            Overzicht van de lesopdrachten van les 4
        </p>
    </div>
</section>
<section class="section">
    <h1 class="title">Validatie</h1>
    <h2 class="subtitle">
        Opdracht 1: Server-side controle op velden uit een formulier
    </h2>
    <div class="content">
        <p class="mb-4">
            In deze opdracht ga je ervoor zorgen dat verzonden informatie in een formulier valide is. De enige
            veilige plek
            om dit te controleren is op de server. In dit geval zal je dat dus met PHP moeten doen.
        </p>
        <p>
            Technieken die je hierbij nodig hebt zijn:
        </p>
        <ul>
            <li>
                Postback, meer info is te vinden in het
                <a href="https://brightspace.hr.nl/d2l/le/lessons/28859/topics/244606" target="_blank">filmpje
                    over Post en Postback</a> van les 2.
                <a href="../../les2/examples/" target="_blank">Code voorbeeld</a> in <code>les2/examples</code>
            </li>
            <li>
                Validatie, <a href="../../les4/examples/validation" target="_blank">voorbeeld</a> van deze les
                in <code>les4/examples/validation</code>
            </li>
        </ul>
        <blockquote>
            In het bestand <a href="opdr1-validation.php" target="_blank">opdr1-validation.php</a> zie je een formulier. Zorg
            ervoor dat het formulier in PHP wordt gecontroleerd (dus niet met
            het attribuut <code>required</code> in de HTML). Wanneer het veld leeg gelaten wordt, moet er een
            foutmelding
            in de HTML getoond worden.
        </blockquote>
    </div>
</section>

<section class="section">
    <h1 class="title">SQL: INSERT query</h1>
    <h2 class="subtitle">
        Opdracht 2: Het toevoegen van een nieuw item aan de database
    </h2>
    <div class="content">
        <p class="mb-4">
            Open <a href="http://localhost/phpmyadmin/" target="_blank">PhpMyAdmin</a> en klik op de database <a
                    href="http://localhost/phpmyadmin/index.php?route=/database/sql&db=music_collection"
                    target="_blank">music_collection</a> en vervolgens op de tabel <a
                    href="http://localhost/phpmyadmin/index.php?route=/table/sql&db=music_collection&table=albums"
                    target="_blank">albums</a>.
            Klik vervolgens op de tab 'SQL'.
        </p>
        <blockquote>
            Noteer voor het volgende album de INSERT query.

            <ul>
                <li>album: <span class="is-italic">The Dark Side Of The Moon</span></li>
                <li>artist: <span class="is-italic">Pink Floyd</span></li>
                <li>genre: <span class="is-italic">Progressive Rock</span></li>
                <li>year: <span class="is-italic">1973</span></li>
                <li>tracks: <span class="is-italic">9</span></li>
            </ul>
        </blockquote>

        Klik nu op de tab 'Insert' / 'Invoegen'.
        <blockquote>
            Voeg hier een album naar keuze toe d.m.v. het formulier (voer de <strong>id</strong> niet in).
            <br>
            Zie je een groene balk met de tekst: '1 row inserted.' / '1 rij toegevoegd.', dan is het gelukt.
            Hieronder staat een query. Vergelijk
            deze query met jouw query.
        </blockquote>
    </div>
</section>

<section class="section">
    <h1 class="title">Pseudocode create.php</h1>
    <h2 class="subtitle">
        Opdracht 3: De stappen bedenken voordat je ze in code gaat schrijven
    </h2>
    <div class="content">
        <blockquote>
            <ul>
                <li>
                    Doorloop weer de drie vragen op
                    <a href="https://brightspace.hr.nl/d2l/le/lessons/28859/topics/247561" target="_blank">Brightspace</a> (nu
                    individueel). Bij
                    de laatste stap schrijf je de pseudocode.
                </li>
                <li>
                    Neem de pseudocode over in je editor en plaats deze als comments bovenaan de create.php
                    pagina
                    van <code>les4/start/create.php</code>
                </li>
            </ul>
        </blockquote>
    </div>
</section>

<section class="section has-background-primary-light">
    <h1 class="title">Createpagina</h1>
    <h2 class="subtitle">
        Opdracht 4: Het toevoegen van een nieuw album aan de database
    </h2>
    <div class="content">
        <p class="mb-4">
            Je hebt nu alle ingrediënten om de createpagina te kunnen maken. Gebruik bij de uitwerking de
            pseudocode
            uit de vorige opdracht. Werk je code stap voor stap uit (dus per regel comment) en test elke stap of
            deze werkt.
            Ga dan pas verder met de volgende regel.
        </p>
        <p>
            Loop je tegen een error aan, kijk dan of het <a
                    href="https://brightspace.hr.nl/d2l/le/lessons/28859/units/231506" target="_blank">Debugstroomdiagram</a> je
            kunt helpen.
        </p>
        <blockquote>
            Werk de createpagina uit, zodat je een album kunt toevoegen aan de database.
            <ul>
                <li>Alle velden zijn verplichte velden. Voeg server-side validatie toe</li>
                <li>Zijn niet alle velden ingevuld, toon dan een foutmelding</li>
                <li>Bij een foutmelding moeten de velden die goed waren, teruggeschreven worden in het
                    formulier
                </li>
                <li>
                    Na het succesvol toevoegen aan de database moet de gebruiker doorgestuurd worden naar de
                    indexpagina.
                    Hiervoor kan je gebruik maken van de PHP-functie <a
                            href="https://www.php.net/manual/en/function.header.php"
                            target="_blank">header()</a>
                </li>
            </ul>
        </blockquote>
    </div>
</section>

<!--ERD-->
<section class="section">
    <h1 class="title">Entity Relationship Diagram</h1>
    <h2 class="subtitle">
        Opdracht 5: Hulpmiddel bij het ontwerpen van de database
    </h2>
    <div class="content">
        <p class="mb-4">
            Gegeven is het volgende:
            <br>
            <span class="is-italic">
                De case betreft een webshop waarbij gebruikers producten kunnen bestellen. Elke order bevat 1 of meerdere producten.
                Ook staat bij elke order opgeslagen hoe vaak elk product besteld is en de volgorde waarin de producten besteld zijn.

                Bovenaan de order staat de naam en het banknummer van de klant en onderaan het totaalbedrag van alle
                bestelde producten bij elkaar.
            </span>
        </p>
        <blockquote>
            Maak het ERD voor bovenstaande case (bijvoorbeeld met <a href="https://drawsql.app/"
                                                             target="_blank">DrawSQL</a>).
            Let goed op dat de informatie in de juiste tabel wordt opgeslagen
            en op de notatie van de relaties.
        </blockquote>
    </div>
</section>

<!--Aanvullende opdrachten-->
<section class="section">
    <h1 class="title">Verder werken</h1>
    <h2 class="subtitle">
        Opdracht 6: Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:
    </h2>
    <div class="content">
        <p>
            <strong>Validatie per veld</strong>
        </p>
        <blockquote>
            De bezoeker wil de foutmeldingen van de validatie niet samen boven het formulier hebben, maar elke
            losse foutmelding netjes onder het
            betreffende veld zien.
        </blockquote>
        <p>
            <strong>Images</strong>
        </p>
        <blockquote>
            <p>
                De bezoeker wil nu ook graag een afbeelding uploaden bij het muziekalbum. Voeg een veld toe waar
                je een plaatje kan uploaden en sla dit
                plaatje op in de map 'images'. Zorg ervoor dat je geen BLOB-datatype gebruikt in de database
                voor het plaatje, maar enkel de naam van het plaatje
                hier als VARCHAR opslaat. Toon de afbeelding ook in de tabel en op de detailpagina.
            </p>
        </blockquote>
        <p class="is-italic">
            <strong>Tips:</strong>
        </p>
        <ul class="is-italic">
            <li>
                Gebruik de PHP-functie <a href="https://www.php.net/manual/en/function.move-uploaded-file.php"
                                          target="_blank">move_uploaded_file()</a>
                om het bestand te verplaatsen van de tijdelijke locatie naar de map 'images'.
                Verder is het handig om de <a
                        href="https://www.php.net/manual/en/features.file-upload.post-method.php"
                        target="_blank">PHP-documentatie</a> te raadplegen.
            </li>
            <li>
                Ook moet je de <a href="https://www.geeksforgeeks.org/define-multipart-form-data/"
                                  target="_blank">HTML aanpassen</a>,
                zodat je een bestand kunt uploaden. Gebruik hiervoor het attribuut
                <code>enctype="multipart/form-data"</code>
                in de <code>form</code>-tag.
            </li>
        </ul>
    </div>
</section>
</body>
</html>