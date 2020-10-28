# Changelog

## 2.1.0 (28.10.2020)
- NEU: Über `$boxed-layout: false;` in `base/_layout.scss` lässt sich das Layout über die komplette Breite strecken. Da wir grundsätzlich Anpassungen an der Berechnung vornehmen mussten, lässt sich diese Einstellung nicht bereits bestehenden Projekten umsetzen.
- NEU: Verwendung der Portfolio-Erweiterung in Version 4.0. Referenzen tauchen nun in der Sitemap auf. Außerdem können unterschiedliche Archive ausgewählt und Rechte festgelegt werden.

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
