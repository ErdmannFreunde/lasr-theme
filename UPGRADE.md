# Upgrade

Bitte beachte nachfolgenden Anweisungen, bevor du ein UPGRADE durchführst:

- erstelle immer vor Beginn ein Backup
- plane genügend Zeit für das Upgrade ein (1 Std bis 1 Tag)

Wenn du sichestellen möchtest/musst, dass die Website dauerhaft erreichbar ist, solltest du das Upgrade in einem Duplikat der Website durchführen.

## LASR-Installationen auf Contao 5.3 LTS aktualisieren

Um bestehende Contao 4 Installationen auf Contao 5.3 LTS aktualisieren zu können, sind sowohl Anpassungen im Theme als auch in Contao notwendig. 

Auch wenn nach dem Update auf Contao 5.3 LTS bereits 3 Migrationen ausgeführt werden, musst du dennoch damit rechnen, dass du mehrere Inhaltselemente nachträglich bearbeiten musst (siehe u.a. Punkt 4: Hero-Element).

### 1. Vorbereitung
- Prüfe, ob alle Drittanbieter-Erweiterungen mit Contao 5.3 komaptibel sind. Manche Erweiterungen erfordern eine andere Bezeichnung oder neue Version (z.B. `^2.0` statt `^1.0`)
- Lade dir aus dem Club-Bereich das Zusatzpaket `upgrade-contao-53.zip` herunter. In diesem ZIP-Archiv sind die weiter unter erwähnten `.scss`- und `.html5`-Dateien.

### 2. Contao Update auf 5.3

Das LASR-Theme gab es in Ausführungen, der Standard-Edition und der Entwickler Edition. Wenn du über den Contao Manager ein Paket hochgeladen hast, dann hast du die Standard Edition. Die Entwickler Edition ist eine lokale Installation unter Verwendung von gulp.js 

**Wenn du die Standard Edition einsetzt**: Entferne das private Paket **LASR-SE**, das du über den Contao Manager hochgeladen hast. Führe dann eine Paketaktualisierung durch. Überspringe den Schritt „Datenbank aktualisieren“ indem du auf „Bestätigen & Schließen“ klickst, denn wir wollen alle Datenbank-Inhalte erhalten.

**Wenn du die Entwickler Edition einsetzt**: Solltest du die Entwickler-Edition verwenden, prüfe, dass du die aktuellste Version des lasr-theme-bundles verwendest oder passe die Version ggf. an. Sie sollte mindestens 3.X sein.

Führe nun ein Contao Update auf Contao 5.3 durch, indem du die Versionsnummer im Contao Manager auf `5.3.*` änderst und lasse **alle Pakete aktualisieren**. 

Im Anschluss wirst du durch Migrationen und Datenbank-Änderungen von Contao geführt. 

Auch hier solltest du nur Datenbank-Updates machen, bei denen keine Tabellen (z.B. tl_portfolio) und keine Spalten (z.B. tl_content.addText) gelöscht werden. Oder anders ausgedrückt: Wenn du den Haken unterhalb der Buttons nicht setzt, wird auch nichts gelöscht.

Wenn nur noch Datenbank-Änderungen zum Löschen vorhanden sind, beende den Prozess mit **Abbrechen**.

Wenn du zuvor das private Paket entfernt hast, suche nun im „Entdecken“-Tab nach _LASR-Theme-Bundle_, füge das Paket hinzu und lasse die **Änderungen anwenden**. Lasse erneut die **Datenbank aktualisieren** und lasse die folgenden Migrationen **ausführen**.

Nach erfolgreicher Migration sollten nun neue Datenbank-Änderungen auftauchen und es sollte deutlich weniger Löschungen geben.

Nun kannst du **Alle Änderungen inklusiven Löschungen anwenden** und die Datenbank erneut aktualisieren.

Contao, Theme-Erweiterungen und Datenbank sind nun auf dem aktuellen Stand.

### 3. Nutshell Framework als Contao Komponente

Statt `erdmannfreunde/euf_nutshell` wird nun das neue Repository `nutshell-framework/assets` verwendet. Die Dateien des Frameworks liegen nun unter `assets/nutshell` (statt wie bisher unter `files/nutshell`). Nach dem Update müssen die Pfade entsprechend angepasst werden:

#### Standard Edition:
- Alle Sass-Importe müssen von `../../../nutshell` auf `../../../../assets/nutshell` umgeschrieben werden.

#### Entwickler Edition:

- Alle Sass-Importe müssen von `../../../nutshell` auf `assets/nutshell` umgeschrieben werden.

### 4. Hero-Element

Statt `erdmannfreunde/euf_hero` wird nun das neue Repository `nutshell-framework/hero-element` verwendet. Das neue Hero-Element bietet zum Beispiel die Möglichkeit, neben einem Hiuntergrundbild ein zusätzliches Bild über, neben oder unter dem Text darzustellen.

**Beim Update wurdest du aufgefordert, die Migration _EufHeroMigration_ auszuführen, damit die bisher verwendeten Bilder als Hintergrundbilder verwendet werden!**

Da sich mit der neuen Version auch das Markup geändert hat, gibt es nun eine `_hero-c5.scss`, die du in deine `default.scss` einbinden und dort deine zusätzlichen Layout-Anpassungen vornehmen kannst.

Über die Klassen `.hero--text-left`, `.hero--text-right` und `.hero--text-below` änderst du ab sofort die Darstellung des Hero-Elements.

Solltest du Änderungen am Template `ce_hero` gemacht haben, musst du diese mit der neuen Template-Version manuell abgleichen. 

### 5. Contact-Element

Analog zum Hero-Element wird für Kontakte nun das neue Repository `nutshell-framework/contact-element` verwendet.

**Beim Update wurdest du aufgefordert, die Migration _EufContactMigration_ auszuführen, damit die Spalten in der Datennbank angepasst werden!**

Da sich auch hier das Markup für Kontakt-Elemente geändert hat, gibt es eine `_contact-c5.scss`, die du in deine `default.scss` einbinden und in der du zusätzliche Layout-Anpassungen vornehmen kannst.

Solltest du Änderungen am Template `ce_contact` gemacht haben, musst du diese mit der neuen Template-Version manuell abgleichen.

### 6. TinyMCE-Template

Das Template `tinyMCE.html5` war bisher so aufgebaut, dass es je nach Version die richtigen Scripte und Anweisungen geladen hat. Mit Contao 5 ist die Abfrage der Contao Version über eine Konstante nicht länger möglich.

Um die Template-Datei nicht selbst anpassen zu müssen, gibt es eine `be_tinyMCE-c5.html5`, die du in `be_tinyMCE.html5` umbenennen und damit das bisherige Template ersetzen kannst.

Solltest du eigene CSS-Klassen ergänzt oder aber die Plugins oder Toolbars geändert haben, so musst du diese im neuen Template nachtragen.