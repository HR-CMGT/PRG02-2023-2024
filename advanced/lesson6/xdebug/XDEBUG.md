# xDebug

xDebug is een tool die je helpt de programmeerervaring een stuk aangenamer te maken.
Tot nu toe was je gewend om `print_r` of `var_dump` te gebruiken. Het werkt, maar het
geeft ook een hoop rommel omdat veel van die code vaak achterblijft in applicaties.
Ook is handmatig toevoegen van zo'n stukje code niet echt efficient en foutgevoelig.
Als je na het volgen van deze stappen xDebug aan de praat hebt, is dat verleden tijd.

Meer informatie: https://xdebug.org/

## Installatie

Om xDebug aan de praat te krijgen moet je deze installeren als PHP-extensie binnen je
XAMPP omgeving.

In je `php.ini` (gebruik de phpinfo() functie op een webpagina als je niet weet waar je
deze kunt vinden) moet je het volgende toevoegen helemaal onderaan het bestand:

### Mac

#### Installeren benodigde packages via Homebrew

Mocht je Homebrew nog niet hebben geïnstalleerd kun je dat uitvoeren via volgend commando:

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

Daarna installeer je volgende pakketten via homebrew. Deze zijn nodig om xDebug straks goed
te kunnen installeren binnen je PHP:

```bash
brew install autoconf automake libtool
```

> Aanname: Toen je XAMPP hebt geïnstalleerd heb je de developer tools ook aangevinkt. Zo niet,
> dan moet je XAMPP opnieuw installeren met de juiste vinkjes aangezet.
> ![Step 1](xampp-installation.png)

#### xDebug compilen naar je PHP-installatie

Open je terminal en draai de volgende commando's:

```bash
git clone https://github.com/xdebug/xdebug.git
cd xdebug
phpize
```

Afhankelijk van of je een M1 of Intel-machine hebt moet je een ander commando draaien.

**Intel**

`pecl install xdebug`

**M1**

Nu hangt er nog vanaf of je een x86_64 of arm64 architectuur hebt. Dit kun je controleren met
het volgende commando:

`file `which php`

Voor arm64:

`arch -arm64 sudo pecl install xdebug`

Voor x64_64:

`arch -x86_64 sudo pecl install xdebug`

> Mocht je een foutmelding krijgen omdat pecl niet bestaat, kun je `pecl` in bovenstaand commando
> vervangen door `/Applications/XAMPP/bin/pecl`

Tenslotte voeg je de volgende regels toe onderaan je `php.ini`:

```ini
zend_extension = xdebug.so
xdebug.mode = develop,debug
xdebug.start_with_request = yes
```

### Windows

Volg de wizard: https://xdebug.org/wizard om de juiste package te kunnen downloaden
en configureren.

Tenslotte voeg je de volgende regels toe onderaan je `php.ini`:

```ini
zend_extension = xdebug
xdebug.mode = develop,debug
xdebug.start_with_request = yes
```

> Let op: Na het aanpassen van de `php.ini` moet je Apache opnieuw opstarten!

### Browser plugin

Naast xDebug zelf heb je ook een plugin nodig voor in je browser. Deze zorgt er straks voor
dat je jouw applicatie toestemming geeft om te gaan debuggen. Via de betreffende plugin stores
kun je deze installeren:

- [Chrome/Edge](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc)
- [FireFox](https://addons.mozilla.org/en-US/firefox/addon/xdebug-helper-for-firefox/)
- [Safari](https://apps.apple.com/app/safari-xdebug-toggle/id1437227804?mt=12)

## Gebruik browser & phpStorm

Nu je alles hebt geïnstalleerd kun je xDebug in gebruikt gaan nemen, daarvoor kun je de volgende
stappen uitvoeren.

1. Zet je browserplugin aan op "debug"
   ![Step 1](configure-step1.png)<br><br>
2. Zet je phpStorm "Start Listening for PHP Debug Connections" aan (icoontje met telefoontje)
   ![Step 2](configure-step2.png)<br><br>
3. Plaats een breakpoint op een plaats waar je meer informatie over wilt verkrijgen (debugging!)
   ![Step 3](configure-step3.png)<br><br>
4. Vernieuw de webpagina eenmalig en je wordt automatisch naar phpStorm gestuurd, accepteer hier
   de request en kies het juiste bestand wat wordt geopend.
   ![Step 4](configure-step4.png)<br><br>
5. **YEAH!** Daar is je debuginformatie. Gefeliciteerd, vanaf nu heb je geen `print_r` en `var_dump`
   meer nodig. Welkom in de wereld van professioneel debuggen 🥳
   ![Step 5](configure-step5.png)

## Referenties

- https://blog.devsense.com/2022/install-xdebug-for-xampp-on-mac
- https://xdebug.org/wizard
- https://www.jetbrains.com/help/phpstorm/2023.3/zero-configuration-debugging.html?utm_source=product&utm_medium=link&utm_campaign=PS&utm_content=2023.3
