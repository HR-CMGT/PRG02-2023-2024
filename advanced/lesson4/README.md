# Advanced les 4

## Onderwerpen

- [Composer](https://getcomposer.org/)
- [Composer packages - Packagist](https://packagist.org/)
- [PSR-4 - Autoloader](http://www.php-fig.org/psr/psr-4/)
- [Templating Explained](https://www.daggerhartlab.com/create-simple-php-templating-function/)

## Opdrachten

> Let op! Als je op dit moment moeite ondervindt met bepaalde concepten in de basis, bekijk dan ook de 
> Video's die in de regulier les worden gebruikt op Brightspace! Hier worden bepaalde concepten zeer 
> helden en uitgebreid toegelicht.

### Opdracht 1: Installeren composer

Om tijdens het werken met (vele) classes niet meer bezig te hoeven zijn met handmatige require statements,
kun je de auto loader van composer gebruiken. Dit is de hoofdreden waarvoor we composer nu toepassen.

Een andere, in de praktijk meest gebruikte, reden om composer te gebruiken is het downloaden van packages.
Pakketjes code die door andere ontwikkelaars zijn geschreven die jij zo in je eigen project kunt inladen
en gebruiken. Op https://packagist.org/ kun je al die packages vinden!

- Ga naar https://getcomposer.org/ en installeer composer op je eigen machine
- Na installatie heb je het `composer` commando tot je beschikking op je computer. Dit commando heb je nodig
  tijdens de demo in de les. Check de uitwerking van dit voorbeeld na de les als je er nog naar wilt terugkijken.
  Besef je goed dat je zelf altijd `composer install` moet draaien als je die code ergens neerzet omdat de
  `vendor` map niet in Git mag komen te staan.

In de demo van de les hebben we het volgende gedaan:
- Terminal open in phpStorm zodat we composer kunnen gebruiken;
- Via `cd` kun je navigeren naar de juiste map waar je het composer project wilt initialiseren;
- `composer init` voor het genereren van een composer project;
- De autoload waarde ingesteld (zie hiervoor [het voorbeeld](example/students_composer)) op de namespace waarin
  al onze code te vinden is;
- `composer install` gedraaid om de vendor map te verkrijgen waarin de autoloader staat;
- De require_once statements in de initialize vervangen door de require van het autoload bestand.

### Opdracht 2: Code lezen en vragen stellen

Kopieer de [uitwerking](../lesson3/assignment) naar je eigen werkmap (in de map "music-collection"
die je afgelopen les hebt aangemaakt) en overschrijf je eigen uitwerking. Hiermee heb je weer een
gelijk startpunt om door te gaan met de volgende opdrachten.

Om goed te weten hoe je zelf aan verder kunt, is het aan te raden deze code te lezen/analyseren.
Neem de overgenomen code door om er zeker van te zijn dat je die snapt. Zet waar nodig comments in
je code met vragen voor de docent zodat je die kunt bespreken.

### Opdracht 3: Muziekalbums composer

Momenteel heeft de muziekalbums opdracht nog veel losse `require_once` statements. In de les hebben we
een [voorbeeld](example/students_composer) uitgewerkt met composer waarin je terug kunt kijken hoe het werkt.

- Implementeer composer in dit project om te zorgen dat alle losse require statements er niet meer inzitten

### Opdracht 4: Muziekalbums templates

Momenteel zijn er nog 5 hoofdbestanden in ons project (index, detail, create, edit, delete). In de les hebben we
een [voorbeeld](example/templating) uitgewerkt met templates waarin je terug kunt kijken hoe het werkt.

- Kopieer de `.htaccess`. Deze heb je nodig om al in inkomende verkeer naar index.php te leiden
- Bouw je initialize om zodat deze gebruik maakt van de GET-parameter genaamd `_url`
- Laad de juiste pages aan juiste template in op basis van deze waarde
- Toon een 404 template als de waarde niet bestaat

### Opdracht 5: Werken aan eindopdracht

Met de opgedane kennis, en beschikbare tijd tot de deadline, is het verstandig deze les aan je eindopdracht
te starten. Maak voor jezelf logische keuzes:

- Starten met je opdracht, wat zijn logische eerste stappen?
    - Kies een onderwerp die goed past bij de vereiste CRUD-functionaliteiten
    - Maak een ERD voor je opdracht zodat je weet hoe je database eruit gaat zien
    - Maak voor pagina's ook een technisch ontwerp waarin je laat zien na te denken over de stappen die
      nodig zijn de betreffende pagina/functionaliteit werkend te maken
- Welke structuur ga je gebruiken?
    - Reguliere code met daarbovenop een aantal advanced technieken is helemaal prima!
    - PDO is een voorbeeld die je redelijk makkelijk op zichzelf kunt gebruiken binnen elk type project!
- Maak gebruik van composer als je externe packages nodig hebt
- Comment je code via standaarden van phpDoc
- Denk zelf na over een slimme manier om je templates en PHP-code zoveel mogelijk van elkaar te scheiden
