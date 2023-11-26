<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesopdrachten les 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            Overzicht van de lesopdrachten van les 3
        </p>
    </div>
</section>
<section class="section">
    <h1 class="title">Database</h1>
    <h2 class="subtitle">
        Het importeren van een database en het ophalen van informatie
    </h2>
    <div class="content">
        <p>
            <strong>Database importeren</strong>
        </p>
        <p>
            In deze opdracht ga je oefenen met het ophalen van data uit de database. Hiervoor heb je eerst een
            database
            nodig. Er is al een database aangemaakt en deze is geëxporteerd in de vorm van een <code>.sql</code>
            bestand met de
            naam: <a href="music_collection.sql" download>music_collection.sql</a> (in de map les3/exercises)
        </p>
        <blockquote>
            <ul>
                <li>Zorg ervoor dat (in XAMPP) de Apache en SQL server aanstaan</li>
                <li>Download <a href="music_collection.sql" download>music_collection.sql</a></li>
                <li>Ga naar <a href="http://localhost/phpmyadmin/" target="_blank">PhpMyAdmin</a></li>
                <li>Klik op 'Import' / 'Importeren'</li>
                <li>Klik op 'Choose file' / 'Bestand kiezen' en selecteer de zojuist gedownloade
                    music_collection.sql
                </li>
                <li>Klik vervolgens helemaal onderaan de pagina op de knop 'Import' / 'Starten'</li>
            </ul>
        </blockquote>
        <p>
            Aan de linkerkant zie je nu dat er een database is toegevoegd met de naam
            <code>music_collection</code>.
            Door op de plusjes ervoor te klikken kun je de tabellen zien. De inhoud van de tabellen kun je zien
            door op
            de tabelnaam te klikken.
        </p>
        <p>
            <strong>Data selecteren met het SELECT statement</strong>
        </p>
        <p>
            Wanneer je informatie wilt ophalen uit de database zul je dit moeten doen d.m.v. een vraag.
            Via SQL ga je deze specifieke vragen stellen aan de database. De vraag die je stelt noemen we een
            query en dan specifiek een
            <a href="https://www.w3schools.com/sql/sql_select.asp" target="_blank">SELECT Statement</a>.
        </p>
        <p class="is-italic">
            Open de music_collection database
            door op het 'plusje' voor de naam te klikken en klik vervolgens op de naam 'albums'. Klik nu bovenin
            op
            het tabblad 'SQL'. Hier kun je SQL-queries invoeren en zien welk resultaat de database als antwoord
            geeft.
            <strong>Let op! Het resultaat van een SELECT Statement is altijd een tabel, ook als deze leeg
                is</strong>.
        </p>
        <blockquote>
            Formuleer voor onderstaande zinnen de juiste SELECT Statements en voer deze uit op de database.
            <ul>
                <li>Toon alle albums. (Aantal 19)</li>
                <li>Toon alle albums met genre ‘Rock’. (Aantal: 7)</li>
                <li>Toon alle albums die meer dan 10 tracks bevatten. (Aantal: 17)</li>
                <li>Toon alle albums die meer dan 10 tracks bevatten en NA 2014 zijn uitgebracht. (Aantal: 9)
                </li>
                <li>
                    Toon alle albums waarvan de artiest begint met een ‘H’. (Aantal: 3). Gebruik hierbij het
                    <a href="https://www.w3schools.com/sql/sql_like.asp" target="_blank">
                        <code class="is-underlined">LIKE</code></a> keyword
                </li>
                <li>Toon de eerste 5 albums op alfabetische volgorde van de artiest. Gebruik hierbij de
                    <a href="https://www.w3schools.com/sql/sql_orderby.asp" target="_blank">
                        <code class="is-underlined">ORDER BY</code></a> en <a
                            href="https://www.w3schools.com/mysql/mysql_limit.asp" target="_blank"><code
                                class="is-underlined">LIMIT</code></a></li>
            </ul>
        </blockquote>
    </div>
</section>

<section class="section has-background-primary-light">
    <h1 class="title">Indexpagina</h1>
    <h2 class="subtitle">
        De indexpagina waarbij de informatie uit de <strong>database</strong> komt
    </h2>
    <div class="content">
        <blockquote>
            Maak de indexpagina (zie de map 'start' in les3) voor de muziekalbums, maar nu gekoppeld aan de
            <a href="https://www.khanacademy.org/computing/computer-programming/sql/sql-basics/pt/querying-the-table"
               target="_blank">database</a>.
            Dit vervangt de multidimensionale array uit eerdere lessen.
            Gebruik hiervoor de database uit opdracht hierboven. Haal albumdata op uit de database en toon deze
            in (de bestaande) tabel.
        </blockquote>
        <p class="is-italic">
            Tip 1: in het bestand <code>les3/examples/database-query-flow.php</code> staat de volledige code
            beschreven (voorzien van comments) hoe je de data van álle albums uit de database haalt.
            <br/>
            Tip 2: in de map <code>les3/includes</code> staat het bestand <code>connection.php</code>. Dit is
            ook het
            bovenste deel van de code uit <code>database-query-flow.php</code>, dus let op dat je het niet
            dubbel doet.
            Deze kan je importeren met de PHP-functie <code>require_once</code>. Hierna is er verbinding gemaakt
            met de database.
            Dit kun je ook gebruiken bij de volgende opdracht (details.php) om verbinding te maken met de
            database.
        </p>
    </div>
</section>

<section class="section has-background-primary-light">
    <h1 class="title">Detailpagina</h1>
    <h2 class="subtitle">
        De detailpagina waarbij de informatie uit de <strong>database</strong> komt
    </h2>
    <div class="content">
        <blockquote>
            <p>Werk in tweetallen en één persoon beantwoordt de vragen in <a
                        href="https://brightspace.hr.nl/d2l/le/lessons/28859/topics/245748"
                        target="_blank">Brightspace</a>.
            </p>
            <ol>
                <li>Welke informatie / data heb je nodig als input voor deze opdracht?</li>
                <li>Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen
                    technische termen gebruiken het gaat om de functionaliteit.
                </li>
                <li>Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.</li>
            </ol>
        </blockquote>
        <p class="is-italic">
            Tip: Denk goed na <span class="is-underlined">welke</span> informatie je moet doorsturen aan de
            detailpagina vanaf de indexpagina.
        </p>
        <blockquote>
            Maak de detailpagina ook dynamisch vanuit de database. Laat de details zien van het specifieke album
            dat aangeklikt is (op de indexpagina).
        </blockquote>
    </div>
</section>

<!--Aanvullende opdrachten-->
<section class="section">
    <h1 class="title">Verder werken</h1>
    <h2 class="subtitle">
        Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:
    </h2>
    <div class="content">
        <p>
            <strong>Images</strong>
        </p>
        <blockquote>
            Voeg aan de indexpagina en/of aan de detailpagina een afbeelding toe van het album. Hou er rekening mee
            dat afbeeldingen niet als BLOB in de database komen, maar dat je de link naar de afbeelding als tekst opslaat.
        </blockquote>
        <p>
            <strong>Pagination</strong>
        </p>
        <blockquote>
            De eindgebruiker wil nu maar maximaal 5 muziekalbums tegelijk op de index pagina zien. Maak gebruik
            van
            <a href="https://bulma.io/documentation/components/pagination/" target="_blank">paginatie</a> om
            maar 5
            albums per keer te bekijken.
        </blockquote>
        <p>
            <strong>Createpagina met validatie</strong>
        </p>
        <blockquote>
            Ga werken aan de create.php pagina. Let hier vooral op het toevoegen van validatie op alle velden.
            Gaat er iets fout,
            toon dan een foutmelding. Zorg er ook voor dat de eerder ingevulde velden niet verloren gaan.
        </blockquote>
        <p>
            <strong>Toevoegen aan de database</strong>
        </p>
        <blockquote>
            Kijk nu of je dit zelf kunt uitbreiden door de informatie ook op te slaan in je database via een
            INSERT-query.
            (komt volgende keer terug in de les!)
        </blockquote>
        <p>
            <strong>Database voor eindopdracht</strong>
        </p>
        <blockquote>
            Ga alvast nadenken hoe je database voor je eindopdracht eruit moet komen te zien. Noteer de
            onderdelen die
            je wilt opslaan of bijhouden en waar dat stukje informatie bij hoort.
        </blockquote>

    </div>
</section>
</body>
</html>