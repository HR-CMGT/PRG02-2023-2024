    Overzicht van de lesopdrachten van les 3

Database
========

Het importeren van een database en het ophalen van informatie
-------------------------------------------------------------

**Database importeren**

In deze opdracht ga je oefenen met het ophalen van data uit de database. Hiervoor heb je eerst een database nodig. Er is al een database aangemaakt en deze is geëxporteerd in de vorm van een `.sql` bestand met de naam: [music\_collection.sql](music_collection.sql) (in de map les3/exercises)

> *   Zorg ervoor dat (in XAMPP) de Apache en SQL server aanstaan
> *   Download [music\_collection.sql](./exercises/music_collection.sql)
> *   Ga naar [PhpMyAdmin](http://localhost/phpmyadmin/)
> *   Klik op 'Import' / 'Importeren'
> *   Klik op 'Choose file' / 'Bestand kiezen' en selecteer de zojuist gedownloade music\_collection.sql
> *   Klik vervolgens helemaal onderaan de pagina op de knop 'Import' / 'Starten'

Aan de linkerkant zie je nu dat er een database is toegevoegd met de naam `music_collection`. Door op de plusjes ervoor te klikken kun je de tabellen zien. De inhoud van de tabellen kun je zien door op de tabelnaam te klikken.

**Data selecteren met het SELECT statement**

Wanneer je informatie wilt ophalen uit de database zul je dit moeten doen d.m.v. een vraag. Via SQL ga je deze specifieke vragen stellen aan de database. De vraag die je stelt noemen we een query en dan specifiek een [SELECT Statement](https://www.w3schools.com/sql/sql_select.asp).

Open de music\_collection database door op het 'plusje' voor de naam te klikken en klik vervolgens op de naam 'albums'. Klik nu bovenin op het tabblad 'SQL'. Hier kun je SQL-queries invoeren en zien welk resultaat de database als antwoord geeft. **Let op! Het resultaat van een SELECT Statement is altijd een tabel, ook als deze leeg is**.

> Formuleer voor onderstaande zinnen de juiste SELECT Statements en voer deze uit op de database.
>
> *   Toon alle albums. (Aantal 19)
> *   Toon alle albums met genre ‘Rock’. (Aantal: 7)
> *   Toon alle albums die meer dan 10 tracks bevatten. (Aantal: 17)
> *   Toon alle albums die meer dan 10 tracks bevatten en NA 2014 zijn uitgebracht. (Aantal: 9)
> *   Toon alle albums waarvan de artiest begint met een ‘H’. (Aantal: 3). Gebruik hierbij het [`LIKE`](https://www.w3schools.com/sql/sql_like.asp) keyword
> *   Toon de eerste 5 albums op alfabetische volgorde van de artiest. Gebruik hierbij de [`ORDER BY`](https://www.w3schools.com/sql/sql_orderby.asp) en [`LIMIT`](https://www.w3schools.com/mysql/mysql_limit.asp)

Indexpagina
===========

De indexpagina waarbij de informatie uit de **database** komt
-------------------------------------------------------------

> Maak de indexpagina (zie de map 'start' in les3) voor de muziekalbums, maar nu gekoppeld aan de [database](https://www.khanacademy.org/computing/computer-programming/sql/sql-basics/pt/querying-the-table). Dit vervangt de multidimensionale array uit eerdere lessen. Gebruik hiervoor de database uit opdracht hierboven. Haal albumdata op uit de database en toon deze in (de bestaande) tabel.

_Tip 1: in het bestand `les3/examples/database-query-flow.php` staat de volledige code beschreven (voorzien van comments) hoe je de data van álle albums uit de database haalt.  
Tip 2: in de map `les3/includes` staat het bestand `connection.php`. Dit is ook het bovenste deel van de code uit `database-query-flow.php`, dus let op dat je het niet dubbel doet. Deze kan je importeren met de PHP-functie `require_once`. Hierna is er verbinding gemaakt met de database. Dit kun je ook gebruiken bij de volgende opdracht (details.php) om verbinding te maken met de database._

Detailpagina
============

De detailpagina waarbij de informatie uit de **database** komt
--------------------------------------------------------------

> Werk in tweetallen en één persoon beantwoordt de vragen in [Brightspace](https://brightspace.hr.nl/d2l/le/lessons/28859/topics/245748).
>
> 1.  Welke informatie / data heb je nodig als input voor deze opdracht?
> 2.  Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen technische termen gebruiken het gaat om de functionaliteit.
> 3.  Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.

_Tip: Denk goed na welke informatie je moet doorsturen aan de detailpagina vanaf de indexpagina._

> Maak de detailpagina ook dynamisch vanuit de database. Laat de details zien van het specifieke album dat aangeklikt is (op de indexpagina).

Verder werken
=============

Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:
-----------------------------------------------------------------------------

**Pagination**

> De eindgebruiker wil nu maar maximaal 5 muziekalbums tegelijk op de index pagina zien. Maak gebruik van [pagination](https://bulma.io/documentation/components/pagination/) om maar 5 albums per keer te bekijken.

**Createpagina met validatie**

> Ga werken aan de create.php pagina. Let hier vooral op het toevoegen van validatie op alle velden. Gaat er iets fout, toon dan een foutmelding. Zorg er ook voor dat de eerder ingevulde velden niet verloren gaan.

**Toevoegen aan de database**

> Kijk nu of je dit zelf kunt uitbreiden door de informatie ook op te slaan in je database via een INSERT-query. (komt volgende keer terug in de les!)

**Database voor eindopdracht**

> Ga alvast nadenken hoe je database voor je eindopdracht eruit moet komen te zien. Noteer de onderdelen die je wilt opslaan of bijhouden en waar dat stukje informatie bij hoort.