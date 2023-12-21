# Hostname instellen

Om lokaal te werken met XAMPP werken je altijd in `localhost/<project>/<veel>/<submappen>/<jouwcode>`.
Dit werkt helemaal prima en is in essentie niks mis mee qua testen en ontwikkelen. Echter werk je in de
praktijk uiteindelijk (bijna) altijd in een hoofdmap zoals `nu.nl/<jouwcode>`, oftewel geen submap.

Om dit lokaal ook werkend te krijgen moet je de volgende stappen doorlopen:

> **LET OP:** Een lokale URL mag alleen maar gemaakt worden met een `.localhost` of een `.test` domain.
> Andere domeinen (`.nl`/`.com`/`.net`/etc) zijn allemaal al gereserveerd en je kunt hiermee dus tegen
> allerlei problemen aanlopen, vooral vanuit security.

## Aanpassen XAMPP vhost

- Open `/<XAMPP-path>/etc/extra/httpd-vhosts.conf`

Je zult eerst moeten zorgen dat je standaard localhost (dus waar je XAMPP dashboard opent) blijft werken.
Dit kun je doen door het volgende toe te voegen aan dit bestand:

```text
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs"
    ServerName localhost
    ErrorLog "logs/localhost-error_log"
    CustomLog "logs/localhost-access_log" common
</VirtualHost>
```

> Let erop dat `DocumentRoot` gelijk is aan jouw eigen pad op je machine

Daarna kun je per omgeving die je als host wilt hebben een nieuw VirtualHost aanmaken. In dit voorbeeld is
dit gedaan voor de code van week 7 om te verwijzen naar de public map aangezien dit hier noodzakelijk is.
Als je klaar bent sla je het bestand op en kun je die sluiten.

```text
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/PRG02-2023-2024/advanced/lesson7/public"
    ServerName music-collection-l7.localhost
    ErrorLog "logs/music-collection.local-error_log"
    CustomLog "logs/music-collection.local-access_log" common
</VirtualHost>
```

> Per host kun je onderstaande code dus hergebruiken om meerdere hosts aan te maken

## Inladen van vhosts in XAMPP

Bovenstaande aanpassingen zullen niet automatisch werken. Daarvoor moet je nog een regel 'uncommenten'.
Dat kun je doen door:

- `/<XAMPP-path>/etc/httpd.conf` te openen
- Het `#` teken voor `#Include etc/extra/httpd-vhosts.conf` verwijderen
- Het bestand op te slaan
- Apache opnieuw op te starten

> Net als dat je Apache moet herstarten na een aanpassing in `php.ini`, geldt dit eigenlijk voor elke
> configuratie. Dus ook met dit soort bestanden is een restart vereist om de wijzigingen door te voeren.
**NOTE**: always restart your apache after these changes!!!

## Lokale hosts file aanpassen

De laatste stap is het aanpassen van je lokale hosts file.

- **Mac**: Open je terminal en run het volgende commando `sudo nano /etc/hosts` om hem aan te kunnen passen
- **Windows**: Open `C:\Windows\System 32\drivers\etc\hosts.txt` als administrator

Daarin voeg je de volgende regel toe. Ook dit doe je weer per toegevoegde host. De naam moet uiteraard
hetzelfde zijn als de ingevoerde naam onder `ServerName` uit het eerdere voorbeeld.

```text
127.0.0.1       music-collection-l7.localhost
```

## Geniet van je host!

Tada! Je bent klaar en kun je aangemaakte host nu in je browser bezoeken. In dit specifieke voorbeeld ga je
naar `http://music-collection-l7.localhost` en kun je deze laatste advanced opdracht bekijken!
