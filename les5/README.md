    Lesopdrachten week 5

### Opdracht 1: Form data vullen

In deze opdracht ga je ervoor zorgen dat de inhoud van een formulier gevuld wordt op basis van een meegestuurd id (GET methode).

> [Pagina1.html](./exercises/opdr1-pagina1.html) linkt naar pagina2.php en stuurt id=1 mee naar [pagina2.php](./exercises/opdr1-pagina2.php). Vul (op pagina2.php) de betreffende velden van het formulier met de data uit de database voor dit specifieke album. Het id heb je nodig in de vraag die je aan de database stelt. Gebruik hiervoor de music\_collection database.

### Opdracht 2: UPDATE query

Open [PhpMyAdmin](http://localhost/phpmyadmin/) en klik op de database [music\_collection](http://localhost/phpmyadmin/index.php?route=/database/sql&db=music_collection) en vervolgens op de tabel [albums](http://localhost/phpmyadmin/index.php?route=/table/sql&db=music_collection&table=albums). Klik vervolgens op de tab 'SQL'.

> In de opdracht van les 4 zat een fout. Verander het aantal tracks van Pink Floyd (The Dark Side Of The Moon) van 9 naar 10. Schrijf hiervoor de bijbehorende UPDATE query.

Mocht je nog niet alle albums zien, klik dan op het tabblad 'Browse' / 'Verkennen'.

> Pas een willekeurig album aan door op 'Edit' te klikken (achter gele potlood icon). Verander een waarde en druk op 'Go' / 'Starten'  
> Zie je een groene balk met de tekst: '1 row inserted.' / '1 rij toegevoegd.', dan is het gelukt. Hieronder staat een query. Vergelijk deze query met jouw query.

### Opdracht 3: Hidden field

Voor deze opdracht kan je gebruik maken van het voorbeeld `week5/examples/hidden-field`

> Voeg aan het formulier van [opdr3-form.php](./exercises/opdr3-form.php) een hidden field toe. Dmv een postback vang je de inhoud van het hidden field op en deze toon je vervolgens op dezelfde pagina in de HTML.

### Opdracht 4: Pseudo Code

In deze opdracht schrijf je de pseudo code voor de updatepagina. Hiervoor kun je (als hulpmiddel) gebruik maken van de drie vragen uit de eerdere lessen of van de [werkmethode](https://brightspace.hr.nl/d2l/le/lessons/28859/units/231506). Dezelfde drie vragen zitten hierin verwerkt met aanvullende informatie. Er is een stap toegevoegd waarin je terugkijkt naar je oplossing.

> *   Schrijf de pseudo code van de pagina: update.php
> *   Neem de pseudo code over in je editor en plaats deze als comments bovenaan de update.php pagina van `week5/start/edit.php`
>
>
> Disclaimer: het letterlijke antwoord op deze opdracht wordt niet door de docent gegeven, omdat het nadrukkelijk onderdeel is van de beoordeling. Je kunt natuurlijk wel feedback vragen aan de docent of medestudenten.

Updatepagina
============

Het bewerken van gegevens van een bestaand album
------------------------------------------------

Je hebt nu alle ingrediënten om de updatepagina te kunnen maken. Gebruik bij de uitwerking ook stap 4 uit de werkmethode.

Loop je tegen een error aan, kijk dan of het [Debugstroomdiagram](https://brightspace.hr.nl/d2l/le/lessons/28859/units/231506) je kunt helpen.

> Werk de updatepagina uit, zodat je een album kunt bijwerken in de database.
>
> *   Het formulier van de updatepagina wordt gevuld met albuminformatie van het specifieke album dat aangeklikt is op de indexpagina
> *   Alle velden zijn verplichte velden. Voeg server-side validatie toe
> *   Zijn niet alle velden ingevuld, toon dan een foutmelding
> *   Bij een foutmelding moeten de velden die goed waren, teruggeschreven worden in het formulier
> *   Na het succesvol aanpassen van de albuminformatie moet de gebruiker doorgestuurd worden naar de indexpagina. Hiervoor kan je gebruik maken van de PHP-functie [header()](https://www.php.net/manual/en/function.header.php)

Verder werken
=============

Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:
-----------------------------------------------------------------------------

*   Ga verder met één van de extra opdrachten uit voorgaande weken
*   Ga verder met je eindopdracht.