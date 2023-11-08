Overzicht van de lesopdrachten van week 4
-----------------------------------------

### Opdracht 1: Validatie

In deze opdracht ga je ervoor zorgen dat verzonden informatie in een formulier valide is. De enige veilige plek om dit te controleren is op de server. In dit geval zal je dat dus met PHP moeten doen.

Technieken die je hierbij nodig hebt zijn:

*   Postback, meer info is te vinden in het tweede filmpje van les 2 op [Feedbackfruits](https://eu.feedbackfruits.com/courses/).
*   Validatie, [code](../week2/examples/) van (post.php) in `week2/examples` of het [voorbeeld](examples/validation) van deze week in `week4/examples/validation`

> In [opdracht 1](opdr1-validation.php) zie je een formulier. Zorg ervoor dat het formulier in PHP wordt gecontroleerd (dus niet met het attribuut `required` in de HTML). Wanneer het veld leeg gelaten wordt, moet er een foutmelding in de HTML getoond worden.

### Opdracht 2: INSERT query

Open [PhpMyAdmin](http://localhost/phpmyadmin/) en klik op de database [music\_collection](http://localhost/phpmyadmin/index.php?route=/database/sql&db=music_collection) en vervolgens op de tabel [albums](http://localhost/phpmyadmin/index.php?route=/table/sql&db=music_collection&table=albums). Klik vervolgens op de tab 'SQL'.

> Noteer voor het volgende album de INSERT query.
>
> *   album: The Dark Side Of The Moon
> *   artist: Pink Floyd
> *   genre: Progressive Rock
> *   year: 1973
> *   tracks: 9

Klik nu op de tab 'Insert' / 'Invoegen'

> Voeg hier een album naar keuze toe d.m.v. het formulier.  
> Zie je een groene balk met de tekst: '1 row inserted.' / '1 rij toegevoegd.', dan is het gelukt. Hieronder staat een query. Vergelijk deze query met jouw query.

### Opdracht 3: Pseudo Code

In deze opdracht schrijf je de pseudo code voor de createpagina. Hiervoor kun je (als hulpmiddel) gebruik maken van de werkmethode die je kunt vinden in Teams -> programmeren 2 -> Files.

> *   Schrijf de pseudo code van de pagina: create.php
> *   Neem de pseudo code over in je editor en plaats deze als comments bovenaan de create.php pagina van `week4/start/create.php`

### Opdracht 4: Create.php

Je hebt nu alle ingrediënten om de createpagina te kunnen maken. Gebruik bij de uitwerking ook stap 4 uit de werkmethode. Loop je tegen een error aan, kijk dan of het Debugstroomdiagram je kunt helpen. Deze kun je vinden in Teams -> programmeren 2 -> Files.

> Werk de createpagina uit, zodat je een album kunt toevoegen aan de database.
>
> *   Alle velden zijn verplichte velden. Voeg server-side validatie toe
> *   Zijn niet alle velden ingevuld, toon dan een foutmelding
> *   Bij een foutmelding moeten de velden die goed waren, teruggeschreven worden in het formulier
> *   Na het succesvol toevoegen aan de database moet de gebruiker doorgestuurd worden naar de indexpagina. Hiervoor kan je gebruik maken van de PHP-functie [header()](https://www.php.net/manual/en/function.header.php)

### Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:

*   De eindgebruiker wil de foutmeldingen van de validatie niet samen boven het formulier hebben, maar elke losse foutmelding netjes onder het betreffende veld zien.
*   De eindgebruiker wil nu ook graag een afbeelding uploaden bij het muziekalbum. Voeg een veld toe waar je een plaatje kan uploaden en sla dit plaatje op in de map 'images'. Zorg ervoor dat je geen BLOB-datatype gebruikt in de database voor het plaatje, maar enkel de naam van het plaatje hier als VARCHAR opslaat. Toon de afbeelding ook in de tabel en op de detailpagina.
*   Kijk ook terug bij de extra opdrachten van voorgaande weken en voer degenen uit die je nog hebt opgepakt.