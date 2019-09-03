# Countdown
Das Modul ermöglicht es einen Countdown bis zu einem Event im Webfront anzuzeigen.

### Inhaltverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Voraussetzungen](#2-voraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Statusvariablen und Profile](#5-statusvariablen-und-profile)
6. [WebFront](#6-webfront)
7. [PHP-Befehlsreferenz](#7-php-befehlsreferenz)

### 1. Funktionsumfang

* Ermöglicht es einen Countdown im Webfront anzuzeigen, der sich minütlich aktualisiert
* Festlegung eines Zeitpunktes und Namen eines Ereignis

### 2. Voraussetzungen

- IP-Symcon ab Version 5.0

### 3. Software-Installation

* Über den Modul Store das Modul Countdown installieren.
* Alternativ über das Modul Control folgende URL hinzufügen:
`https://github.com/symcon/Countdown`  

### 4. Einrichten der Instanzen in IP-Symcon

- Unter "Instanz hinzufügen" ist das 'Countdown'-Modul unter dem Hersteller '(Sonstige)' aufgeführt.  

__Konfigurationsseite__:

Name              |  Beschreibung
----------------- | -------------------------------------
Datum und Uhrzeit | Datum und Uhrzeit  
Ereignis          | Name der Im WebFront angezeigt werden soll


### 5. Statusvariablen und Profile

Die Statusvariablen/Kategorien werden automatisch angelegt. Das Löschen einzelner kann zu Fehlfunktionen führen.

##### Statusvariablen

Name              | Typ     | Beschreibung
----------------- | ------- | --------------------------------
Ereignis erreicht | Boolean | Zeigt an ob das Ereignis erreicht wurde
Verbleibende Zeit | String  | Beinhaltet die verbleibende Zeit 

##### Profile:

Es werden keine neuen Profile erstellt.

### 6. WebFront

Hier wird der Countdown angezeit und, sowie eine Nachricht, wenn das Ereignis eingetreten ist.

### 7. PHP-Befehlsreferenz


