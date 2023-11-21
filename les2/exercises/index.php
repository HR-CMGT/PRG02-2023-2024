<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Lesopdrachten week 1</title>
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            Overzicht van de lesopdrachten van les 2
        </p>
    </div>
</section>


<!--Opdracht 1 en 2-->
<section class="section">
    <h1 class="title">GET Request</h1>
    <h2 class="subtitle">

    </h2>
    <div class="content">
        <p>
            <strong>Opdracht 1: Informatie doorsturen via een link.</strong>
        </p>

        <blockquote>
            <p>In <a href="opdr1-get-pagina1.html" target="_blank">pagina 1</a> staat een link die informatie moet doorgeven
                naar
                <a href="opdr1-get-pagina2.php" target="_blank">pagina 2</a>. Maak pagina1 kloppend zodat op pagina2 de tekst
                "Geweldig, het is
                gelukt om de tag 'techniek' door te sturen." komt te staan.</p>
        </blockquote>
        <p>
            <strong>Opdracht 2: Blue Pill or Red Pill?</strong>
        </p>
        <blockquote>
            Op <a href="opdr2-get-pagina1.html" target="_blank">pagina 1</a> kun je klikken op de Blue Pill of de Red Pill. Maak
            zowel
            <a href="opdr2-get-pagina1.html" target="_blank">pagina 1</a> als <a href="opdr2-get-pagina2.php" target="_blank">pagina2</a>
            kloppend, zodat pagina2 de
            naam van de aangeklikte Pill laat zien.
        </blockquote>
    </div>
</section>

<!--Details-->
<section class="section has-background-primary-light">
    <h1 class="title">Detailpagina</h1>
    <h2 class="subtitle">
        De details van een muziekalbum
    </h2>
    <div class="content">
        <p>
            <em>
                Maak een webpagina met de detailinformatie van een muziekalbum (details.php).
                Voeg achter elk album op de <strong>indexpagina</strong> een detaillink toe. Deze verwijst naar
                <code>details.php</code>, deze staat al klaar in de map <a href="../start/details.php" target="_blank">start</a>.
                Alle albums verwijzen naar dezelfde details.php, maar tonen toch alleen de details van het album
                waarop geklikt is
                (op de indexpagina)
            </em>
        </p>
        <p>
            <strong>Details (ontwerp tweetallen)</strong>
        </p>

        <blockquote>
            <p>Werk in tweetallen en één persoon beantwoordt de vragen in <a
                        href="https://brightspace.hr.nl/d2l/le/lessons/28859/topics/244611"
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

        <p>
            <strong>Details (uitwerking individueel)</strong>
        </p>
        <blockquote>
            Werk de <a href="../start" target="_blank"><strong>opdracht</strong></a> uit in je persoonlijke map in de htdocs
            folder.
            De startcode staat in de map <code>start</code>.
        </blockquote>
    </div>
</section>

<!--Opdracht 3 en 4-->
<section class="section">
    <h1 class="title">POST Request</h1>
    <h2 class="subtitle">

    </h2>
    <div class="content">
        <p>
            <strong>Opdracht 3: Informatie doorsturen via een formulier.</strong>
        </p>

        <blockquote>
            <p>
                Pas <a href="opdr3-post-pagina1.html" target="_blank">pagina 1</a> aan zodat je ingevulde voornaam getoond wordt
                op
                <a href="opdr3-post-pagina2.php" target="_blank">pagina 2</a>.
            </p>
        </blockquote>
        <p>
            <strong>Opdracht 4: Informatie uit een formulier afhandelen in dezelfde pagina.</strong>
        </p>
        <p>
            In deze opdracht vult een bezoeker een formulier in, maar deze data wordt afgehandeld in dezelfde
            pagina. Dit noemen we een Postback.
            Er is dus geen pagina 2 die de data verwerkt. Je zult de beslissing of de data verwerkt moet worden
            dus op dezelfde pagina moeten nemen
            als waar het formulier te zien is.
        </p>
        <blockquote>
            Beantwoord voor deze opdracht eerst de drie vragen uit de werkmethode.
        </blockquote>

        <p>Nadat je het ontwerp gemaakt hebt, bepaal je per stap de techniek die je daarbij nodig hebt. Werk de
            techniek stap voor stap uit en
            gebruik <code>print_r()</code> om informatie te loggen. Zo kan je zien of je de stap goed uitgewerkt
            hebt.</p>
        <blockquote>
            <p>
                Zorg ervoor dat de data van het formulier verzonden wordt naar <a
                        href="opdr4-post-postback.php" target="_blank">dezelfde pagina</a>.
                Je kunt deze pagina dus op 2 manieren bezoeken
            </p>
            <ul>
                <li>(GET) Het formulier is dan nog leeg en er is nog niet op "submit" geklikt</li>
                <li>(POST) Het formulier is verzonden (door klik op "submit"). De $_POST array bevat alle
                    data.
                </li>
            </ul>
            <p>
                De functie <a href="https://www.php.net/manual/en/function.isset" target="_blank">isset()</a> kun je gebruiken
                om te controleren of het
                formulier verzonden is op de volgende manier:
            </p>
            <p>
                <code>
                    if(isset($_POST['submit'])) { <br/>
                    // Post data uitlezen <br/>
                    }
                </code>
            </p>
        </blockquote>
    </div>
</section>

<!--Create-->
<section class="section has-background-primary-light">
    <h1 class="title">Createpagina</h1>
    <h2 class="subtitle">
        Het toevoegen van een nieuw muziekalbum
    </h2>
    <div class="content">
        <p>
            <em>
                Voeg een "Create" link toe, boven de tabel op de indexpagina. Na het aanklikken van de link
                wordt de
                bijbehorende <code>create.php</code> geladen met een formulier waarvan de velden overeenkomen
                met de
                gegevens van een album. De createpagina zal je nog in de map <strong>start</strong> moeten aanmaken.
                Stuur de data van het formulier terug naar dezelfde pagina (Postback) en controleer of alle
                velden zijn
                ingevuld. Laat een notificatie zien als alle velden correct zijn ingevuld.
                <br/>
                Vind je dit lastig dan mag je ook een aparte pagina <code>(store.php)</code> maken die de
                ingevuld
                data laat zien.
            </em>
        </p>
        <p>
            <strong>Create (ontwerp tweetallen)</strong>
        </p>

        <blockquote>
            <p>Werk in tweetallen en één persoon beantwoordt de vragen in <a
                        href="https://brightspace.hr.nl/d2l/le/lessons/28859/topics/244613"
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

        <p>
            <strong>Create (uitwerking individueel)</strong>
        </p>
        <blockquote>
            Werk de <a href="../start" target="_blank"><strong>opdracht</strong></a> uit in je persoonlijke map in de htdocs
            folder.
            De startcode staat in de map <code>start</code>.
        </blockquote>
    </div>
</section>

<!--Aanvullende opdrachten-->
<section class="section">
    <h1 class="title">Aanvullende opdrachten</h1>
    <h2 class="subtitle">
        Maak de onderstaande opdrachten om met verschillende onderwerpen te oefenen
    </h2>
    <div class="content">
        <p>
            <strong>GET met Postback.</strong>
        </p>
        <blockquote>
            Werk <a href="opdr5-get-postback.php" target="_blank"><strong>opdracht 5</strong></a> uit.
        </blockquote>
        <p>
            <strong>POST en GET met Postback op dezelfde pagina.</strong>
        </p>
        <blockquote>
            Werk <a href="opdr6-post-en-get-postback.php" target="_blank"><strong>opdracht 6</strong></a> uit.
        </blockquote>
    </div>
</section>
</body>
</html>