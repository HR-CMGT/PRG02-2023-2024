    Overzicht van de lesopdrachten van les 2

GET Request
===========

**Opdracht 1: Informatie doorsturen via een link.**

> In [pagina 1](exercises/opdr1-get-pagina1.html) staat een link die informatie moet doorgeven naar [pagina 2](exercises/opdr1-get-pagina2.php). Maak pagina1 kloppend zodat op pagina2 de tekst "Geweldig, het is gelukt om de tag 'techniek' door te sturen." komt te staan.

**Opdracht 2: Blue Pill or Red Pill?**

> Op [pagina 1](exercises/opdr2-get-pagina1.html) kun je klikken op de Blue Pill of de Red Pill. Maak zowel [pagina 1](exercises/opdr2-get-pagina1.html) als [pagina2](exercises/opdr2-get-pagina2.php) kloppend, zodat pagina2 de naam van de aangeklikte Pill laat zien.

Detailpagina
============

De details van een muziekalbum
------------------------------

_Maak een webpagina met de detailinformatie van een muziekalbum (details.php). Voeg achter elk album op de **indexpagina** een detaillink toe. Deze verwijst naar `details.php`, deze staat al klaar in de map [start](../start/details.php). Alle albums verwijzen naar dezelfde details.php, maar tonen toch alleen de details van het album waarop geklikt is (op de indexpagina)_

**Details (ontwerp tweetallen)**

> Werk in tweetallen en één persoon beantwoordt de vragen in [Brightspace](https://brightspace.hr.nl/d2l/le/lessons/28859/topics/244611).
>
> 1.  Welke informatie / data heb je nodig als input voor deze opdracht?
> 2.  Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen technische termen gebruiken het gaat om de functionaliteit.
> 3.  Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.

**Details (uitwerking individueel)**

> Werk de [**opdracht**](../start) uit in je persoonlijke map in de htdocs folder. De startcode staat in de map `start`.

POST Request
============

**Opdracht 3: Informatie doorsturen via een formulier.**

> Pas [pagina 1](exercises/opdr3-post-pagina1.html) aan zodat je ingevulde voornaam getoond wordt op [pagina 2](exercises/opdr3-post-pagina2.php).

**Opdracht 4: Informatie uit een formulier afhandelen in dezelfde pagina.**

In deze opdracht vult een bezoeker een formulier in, maar deze data wordt afgehandeld in dezelfde pagina. Dit noemen we een Postback. Er is dus geen pagina 2 die de data verwerkt. Je zult de beslissing of de data verwerkt moet worden dus op dezelfde pagina moeten nemen als waar het formulier te zien is.

> Beantwoord voor deze opdracht eerst de drie vragen uit de werkmethode.

Nadat je het ontwerp gemaakt hebt bepaal je per stap de techniek die je daarbij nodig hebt. Werk de techniek stap voor stap uit en gebruik `print_r()` om informatie te loggen. Zo kan je zien of je de stap goed uitgewerkt hebt.

> Zorg ervoor dat de data van het formulier verzonden wordt naar [dezelfde pagina](exercises/opdr4-post-postback.php). Je kunt deze pagina dus op 2 manieren bezoeken
>
> *   (GET) Het formulier is dan nog leeg en er is nog niet op "submit" geklikt
> *   (POST) Het formulier is verzonden (door klik op "submit"). De $\_POST array bevat alle data.
>
> De functie [isset()](https://www.php.net/manual/en/function.isset) kun je gebruiken om te controleren of het formulier verzonden is op de volgende manier:
>
> `if(isset($_POST['submit'])) {   // Post data uitlezen   }`

Createpagina
============

Het toevoegen van een nieuw muziekalbum
---------------------------------------

_Voeg een "Create" link toe, boven de tabel op de indexpagina. Na het aanklikken van de link wordt de bijbehorende `create.php` geladen met een formulier waarvan de velden overeenkomen met de gegevens van een album. De createpagina zal je nog in de map **start** moeten aanmaken. Stuur de data van het formulier terug naar dezelfde pagina (Postback) en controleer of alle velden zijn ingevuld. Laat een notificatie zien als alle velden correct zijn ingevuld.  
Vind je dit lastig dan mag je ook een aparte pagina `(store.php)` maken die de ingevuld data laat zien._

**Create (ontwerp tweetallen)**

> Werk in tweetallen en één persoon beantwoordt de vragen in [Brightspace](https://brightspace.hr.nl/d2l/le/lessons/28859/topics/244613).
>
> 1.  Welke informatie / data heb je nodig als input voor deze opdracht?
> 2.  Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen technische termen gebruiken het gaat om de functionaliteit.
> 3.  Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.

**Create (uitwerking individueel)**

> Werk de [**opdracht**](../start) uit in je persoonlijke map in de htdocs folder. De startcode staat in de map `start`.

Aanvullende opdrachten
======================

Maak de onderstaande opdrachten om met verschillende onderwerpen te oefenen
---------------------------------------------------------------------------

**GET met Postback.**

> Werk [**opdracht 5**](exercises/opdr5-get-postback.php) uit.

**POST en GET met Postback op dezelfde pagina.**

> Werk [**opdracht 6**](exercises/opdr6-post-en-get-postback.php) uit.