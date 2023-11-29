    Overzicht van de lesopdrachten van les 4

Validatie
=========

Opdracht 1: Server-side controle op velden uit een formulier
------------------------------------------------

In deze opdracht ga je ervoor zorgen dat verzonden informatie in een formulier valide is. De enige veilige plek om dit te controleren is op de server. In dit geval zal je dat dus met PHP moeten doen.

Technieken die je hierbij nodig hebt zijn:

*   Postback, meer info is te vinden in het [filmpje over Post en Postback](https://brightspace.hr.nl/d2l/le/lessons/28859/topics/244606) van les 2. [Code voorbeeld](../../les2/examples/) in `les2/examples`
*   Validatie, [voorbeeld](../../les4/examples/validation) van deze les in `les4/examples/validation`

> In het bestand [opdr1-validation.php](opdr1-validation.php) zie je een formulier. Zorg ervoor dat het formulier in PHP wordt gecontroleerd (dus niet met het attribuut `required` in de HTML). Wanneer het veld leeg gelaten wordt, moet er een foutmelding in de HTML getoond worden.

SQL: INSERT query
=================

Opdracht 2: Het toevoegen van een nieuw item aan de database
------------------------------------------------

Open [PhpMyAdmin](http://localhost/phpmyadmin/) en klik op de database [music\_collection](http://localhost/phpmyadmin/index.php?route=/database/sql&db=music_collection) en vervolgens op de tabel [albums](http://localhost/phpmyadmin/index.php?route=/table/sql&db=music_collection&table=albums). Klik vervolgens op de tab 'SQL'.

> Noteer voor het volgende album de INSERT query.
>
> *   album: The Dark Side Of The Moon
> *   artist: Pink Floyd
> *   genre: Progressive Rock
> *   year: 1973
> *   tracks: 9

Klik nu op de tab 'Insert' / 'Invoegen'.

> Voeg hier een album naar keuze toe d.m.v. het formulier (voer de `id` niet in).
> Zie je een groene balk met de tekst: '1 row inserted.' / '1 rij toegevoegd.', dan is het gelukt. Hieronder staat een query. Vergelijk deze query met jouw query.

Pseudocode create.php
=====================

Opdracht 3: De stappen bedenken voordat je ze in code gaat schrijven
--------------------------------------------------------

> *   Doorloop weer de drie vragen op [Brightspace](https://brightspace.hr.nl/d2l/le/lessons/28859/topics/247561) (nu individueel). Bij de laatste stap schrijf je de pseudocode.
> *   Neem de pseudocode over in je editor en plaats deze als comments bovenaan de create.php pagina van `les4/start/create.php`

Createpagina
============

Opdracht 4: Het toevoegen van een nieuw album aan de database
-------------------------------------------------

Je hebt nu alle ingrediënten om de createpagina te kunnen maken. Gebruik bij de uitwerking de pseudocode uit de vorige opdracht. Werk je code stap voor stap uit (dus per regel comment) en test elke stap of deze werkt. Ga dan pas verder met de volgende regel.

Loop je tegen een error aan, kijk dan of het [Debugstroomdiagram](https://brightspace.hr.nl/d2l/le/lessons/28859/units/231506) je kunt helpen.

> Werk de createpagina uit, zodat je een album kunt toevoegen aan de database.
>
> *   Alle velden zijn verplichte velden. Voeg server-side validatie toe
> *   Zijn niet alle velden ingevuld, toon dan een foutmelding
> *   Bij een foutmelding moeten de velden die goed waren, teruggeschreven worden in het formulier
> *   Na het succesvol toevoegen aan de database moet de gebruiker doorgestuurd worden naar de indexpagina. Hiervoor kan je gebruik maken van de PHP-functie [header()](https://www.php.net/manual/en/function.header.php)

Entity Relationship Diagram
===========================

Opdracht 5: Hulpmiddel bij het ontwerpen van de database
--------------------------------------------

Gegeven is het volgende:  
De case betreft een webshop waarbij gebruikers producten kunnen bestellen. Elke order bevat 1 of meerdere producten. Ook staat bij elke order opgeslagen hoe vaak elk product besteld is en de volgorde waarin de producten besteld zijn. Bovenaan de order staat de naam en het banknummer van de klant en onderaan het totaalbedrag van alle bestelde producten bij elkaar.

> Maak het ERD voor bovenstaande case (bijv met [DrawSQL](https://drawsql.app/)). Let goed op dat de informatie in de juiste tabel wordt opgeslagen en op de notatie van de relaties.

Verder werken
=============

Opdracht 6: Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:
-----------------------------------------------------------------------------

**Validatie per veld**

> De bezoeker wil de foutmeldingen van de validatie niet samen boven het formulier hebben, maar elke losse foutmelding netjes onder het betreffende veld zien.

**Images**

> De bezoeker wil nu ook graag een afbeelding uploaden bij het muziekalbum. Voeg een veld toe waar je een plaatje kan uploaden en sla dit plaatje op in de map 'images'. Zorg ervoor dat je geen BLOB-datatype gebruikt in de database voor het plaatje, maar enkel de naam van het plaatje hier als VARCHAR opslaat. Toon de afbeelding ook in de tabel en op de detailpagina.

**Tips:**

*   Gebruik de PHP-functie [move\_uploaded\_file()](https://www.php.net/manual/en/function.move-uploaded-file.php) om het bestand te verplaatsen van de tijdelijke locatie naar de map 'images'. Verder is het handig om de [PHP-documentatie](https://www.php.net/manual/en/features.file-upload.post-method.php) te raadplegen.
*   Ook moet je de [HTML aanpassen](https://www.geeksforgeeks.org/define-multipart-form-data/), zodat je een bestand kunt uploaden. Gebruik hiervoor het attribuut `enctype="multipart/form-data"` in de `form`\-tag.