# Changelog

## 4.0.0 ()

- Die neue Version verwendet nun das Nutshell Framework als Contao Komponente. Die Dateien liegen nicht mehr in `files` sondern unter `assets`
- Das Hero-Element wurde grafisch überarbeitet und verfügt über neue Funktionen. Außerdem ist es nun standardmäßig in einem eigenen Layoutbereich `hero` angelegt.
- In der neuen Version gibt es nun ein Card-Element, mit dem sich Bild, Text und Links in einem klickbaren Element kombinieren lassen.
- CSS-Klassen können nun über die Theme Toolbox verwaltet und Artikeln und Elementen zugeordnet werden
- Artikelklasssen wurden von `.band--*` in `.article--*` umbenannt und liegen nun in `base/_article.scss`.
- Fallbacks für ältere Browser (keine Grid-Unterstützung) wurden entfernt.
- Die Pfeil-Icons werden nun über `mask` eingebunden und können so entsprechend der Theme-Farben eingefärbt werden.
