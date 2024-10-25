# Changelog

## 4.1.0 (25.10.2024)

Die neue Version hat eine Vielzahl von Neuerungen zur Verbesserungen der Barrierefreiheit bekommen:

- LASR lässt sich nun deutlich besser mit der Tastatur bedienen. Mittels eines zusätzlichen Javascripts `js_accessibility.html5`, das über das Seitenlayout (de-)aktiviert werden kann.
- Fokussierte Links werden nun mit einem gepunkteten Rahmen gekennzeichnet
- Links werden in der Demo standardmäßig mit dem dunklere Blauton gekennzeichnet, um die Lesbarkeit zu verbessern.

Mehr Infos zur Tastaturbedienung findest du auch in der Theme-Demo unter [Barrierefreiheit](https://lasr-4.contao-theme.de/barrierefreiheit.html).

Theme-Anpassungen kannst du über die [UPDATE.md](UPDATE.md) nachvollziehen.

## 4.0.0 (30.08.2024)

- Die neue Version verwendet nun das Nutshell Framework als Contao Komponente. Die Dateien liegen nicht mehr in `files` sondern unter `assets`
- Das Hero-Element wurde grafisch überarbeitet und verfügt über neue Funktionen. Außerdem ist es nun standardmäßig in einem eigenen Layoutbereich `hero` angelegt.
- In der neuen Version gibt es nun ein Card-Element, mit dem sich Bild, Text und Links in einem klickbaren Element kombinieren lassen.
- CSS-Klassen können nun über die Theme Toolbox verwaltet und Artikeln und Elementen zugeordnet werden
- Artikelklasssen wurden von `.band--*` in `.article--*` umbenannt und liegen nun in `base/_article.scss`.
- Fallbacks für ältere Browser (keine Grid-Unterstützung) wurden entfernt.
- Die Pfeil-Icons werden nun über `mask` eingebunden und können so entsprechend der Theme-Farben eingefärbt werden.
