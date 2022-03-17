# Changelog

## 3.3.1 (17.03.2022)
- PHP 8 Unterstützung
- Adresse in Demo-Daten angepasst

## 3.3.0 (15.02.2022)
- Unterstützung für Contao 4.13
- Contao 4.12 Support eingestellt
- Entwickler Edition: node und gulp aktualisiert, gulp tasks linter und images entfernt, da die Plugins nicht mehr aktualisiert werden und ein potenzielles Sicherheitsrisiko sind

## 3.2.0 (06.09.2021)
- Unterstützung für Contao 4.12
- Contao 4.11 Support eingestellt
- Entwickler Edition: node und gulp aktualisiert 
- FIX: localconfig-Einstellungen lassen sich nun auch über die `config.yml` vornehmen

## 3.1.0 (07.03.2021)
- Unterstützung für Contao 4.11
- Contao 4.10 Support eingestellt

## 3.0.2 (12.02.2021)
- Kompatibilität zum Contao Manager 1.4 bzw Composer 2 wiederhergestellt
- Contao 4.4 Support eingestellt

## 3.0.1 (05.12.2020)
- Kompatibilität zum Portfolio-Bundle 4.1.1 wiederhergestellt

## 3.0.0 (28.10.2020)
- NEU: Über `$boxed-layout: false;` in `base/_layout.scss` lässt sich das Layout über die komplette Breite strecken. Da wir grundsätzlich Anpassungen an der Berechnung vornehmen mussten, lässt sich diese Einstellung nicht bereits bestehenden Projekten umsetzen.
- NEU: Verwendung der Portfolio-Erweiterung in Version 4.0. Referenzen tauchen nun in der Sitemap auf. Außerdem können unterschiedliche Archive ausgewählt und Rechte festgelegt werden.
- Das Template `be_tinyMCE.html5` ist nun mit dem TinyMCE 5 kompatibel
 
## 2.0.0 (25.08.2020)
- NEU: Die Referenzen lassen sich jetzt über die Portfolio-Erweiterung verwalten
- Browser-Support Hinweis wird nun per JS eingefügt (via js_supportmsg.html5)
- Kompatibilität zu Contao 4.10 hergestellt
- LASR verwendet nun das Contao-Grid-Bundle (Nachfolger von euf_grid)

## 1.3.0 (21.02.2020)
- Kompatibilität zu Contao 4.9 hergestellt
- Die Custom Properties werden nun innerhalb von `:root {}` definiert, dadurch lassen sie sich besser vom Nutshell Framework unterscheiden
- Node Dependencies aktualisiert

## 1.2.0 (19.11.2019)
- Die Demo der Server-Edition lässt sich nun direkt über den Contao Manager installieren, s.a. hhttps://erdmann-freunde.de/dokumentationen/contao-themes/theme-installieren/server-edition/theme-mit-demo/
- Für die Instalallation _mit Demo_ und _ohne Demo_ gibt es nun getrennte ZIP-Archive

## 1.1.2 (01.11.2019)
- Die Erweiterung [euf_contact] gibt nun standardmäßig auch Alt-Text, Titel und Bildunterschrift aus. Das führte in der LASR-Demo allerdings dazu, dass die Bildunterschrift aus der Dateiverwaltung angezeigt wurde. Wir haben deshalb die Bildunterschriften für Geschäftsführer und Ansprechpartner in der Demo entfernt.
