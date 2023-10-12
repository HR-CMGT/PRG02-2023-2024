# Programmeren 2 onderdeel van CMTTHE01-2

[Link naar Brightspace](https://brightspace.hr.nl/d2l/home/28859)

Hier vind je alle informatie, lesopdrachten, oefeningen, startcode en uitwerkingen voor programmeren 2.
Binnen deze cursus leer je CRUD functionaliteit bouwen in een website met behulp van [PHP](https://www.php.net/).
Onderwerpen die aan bod zullen komen zijn

| Week | Les            | Onderwerpen                                                                              | Technieken                                                    | Producten                                  | Deadline                                      | 
|------|----------------|------------------------------------------------------------------------------------------|---------------------------------------------------------------|--------------------------------------------|-----------------------------------------------|
| 1    | [Les1](./les1) | Wat zijn een webserver, interpreter, request and response.<br/> Basic syntax in PHP      | Syntax PHP<br/>Datum en tijd                                       | (zonder db)<br/>Index.php                  |                                               |
|      | [Les2](./les2) | Links<br/>Verwerken van formulieren                                                      | GET en POST<br/>While<br/>Postback                            | (zonder db)<br/>Details.php<br/>Create.php |                                               |
| 2    | [Les3](./les3) | Wat is een database?<br/>Aanmaken van een database<br/>Ophalen van data uit een database | SQL SELECT<br/>ERD<br/>1-op-veel                              | Index.php<br/>Details.php                  |                                               |
|      | [Les4](./les4) | ERD’s<br/>Invoegen van data                                                              | SQL INSERT en relaties<br/>Validatie                          | Create.php<br/>Delete.php                  | Donderdag 17:00<br/>Screencast in Brightspace |
| 3    | [Les5](./les5) | Update actie en terugschrijven van data in formuliervelden<br/>Hidden field              | Update<br/>Hidden field                                       | Edit.php                                   | Maandag 09:00 peer-feedback op screencast     |
|      | [Les6](./les6) | Authenticatie, login<br/>1-to-many relatie Foreign key<br/>Security                      | Session, Cookie<br/>htmlentities(), mysqli_real_escape_string()| Login.php<br/>Logout.php                   |                                               |
| 4    | [Les7](./les7) | Veel-op-veelrelaties                                                                     | SQL JOINS, LIKE, DELETE                                       | Delete.php                                 |                                               |
|      | Les8           | Ondersteuning uitwerking                                                                 |                                                               |                                            | Vrijdag 17:00<br/>Screencast eindproduct      |

Is bovenstaande je al bekend? Volg dan de [Advanced cursus](advanced)

## Lesmaterialen

Elke les bevat de volgende structuur:

- **examples**
  In een versimpelde vorm, staan hier uitgewerkte voorbeelden uit de les met uitleg (comments).
- **exercises**
  Opdrachten die in de les of als huiswerk gemaakt kunnen worden.<br/>
  **Door in je browser naar deze map te navigeren, zie je de opdrachten van deze week.**
- **start**
  Elke week werken we één of meerdere pagina's van de CRUD functionaliteiten uit. In deze map staat de startcode voor de taak / taken van die week.
- **finished**
  Wekelijks wordt er ook een finished folder toegevoegd met de uitwerkingen. Door een `git pull` uit te voeren, kan je deze per week binnenhalen.

## Werkomgeving

- [PHPStorm](https://www.jetbrains.com/phpstorm/download/)
  Je kunt voor PHPStorm een [account](https://www.jetbrains.com/shop/eform/students) krijgen met je HR-email.
- Lokale webserver opzetten met [XAMPP](https://www.apachefriends.org/download.html).
- Om up-to-date te blijven met deze repository heb je [GIT](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) nodig.

**Clone maken van deze repository op jouw harde schijf**
- Ga in PHPStorm naar Git > Clone
- Url: **https://github.com/HR-CMGT/PRG02-2023-2024.git**
- Directory: [Link naar htdocs in xampp folder]


