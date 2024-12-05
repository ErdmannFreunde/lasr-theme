# UPDATES

## LASR 4.1.1

Ein Fehler im Script verhinderte die Auswahl eines Menüpunkts mit der ENTER-Taste. außerdem wurde eine Variable ergänzt, um die Farbe des Menüs einfacher ändern zu können.

- `theme/js/accessibility.js` wurde optimiert

### \_variables.scss, \_navs.scss

`--nav-main-color` wurde ergänzt, um die Farbe des Hauptmenüs per Variable ändern zu können.

## LASR 4.1.0

Die neue Version hat eine Vielzahl von Neuerungen zur Verbesserungen der Barrierefreiheit bekommen:

### \_variables.scss

- generelle Farbanpassungen,
- neue Variablen zur Auszeichnung von Links:

```
--links-color-visited: color-mix(in srgb, var(--color-highlight), red 40%);
  --links-outline-focus-color: var(--color-brand-primary-darker);
  --links-outline-focus: 2px dotted var(--links-outline-focus-color);
  --links-outline-active: none;
```

### \_shared.scss

- Einblenden und gestalten der Sprungmarken innerhalb von Navigationen zum Überspringen von Navigationselementen:

```
a {
  &.invisible {
    &:focus-visible {
      outline: none;
      clip: unset;
      height: auto;
      width: auto;
      color: var(--color-text-inverted);
      background-color: var(--color-text);
      z-index: 1005;
      position: fixed;
      left: 0;
      top: 0;
      margin: 0;
    }
  }
}
```

### \_navs.scss

```
.nav--main {
  @media (hover) {
    .level_1 {
      > li.submenu {
        &.submenu--active {
          > a,
          > strong {
            &::after {
              transform: rotate(180deg);
            }
          }

          > .level_2 {
            @include media-query(screen-menu) {
              overflow: visible;
              z-index: 1002;
              max-height: 9999px;
              opacity: 100%;
              transition-delay: 0s;
              visibility: visible;
            }
          }
        }
      }
    }

    .level_2 {
      > li.submenu {
        &.submenu--active {
          > a,
          > strong {
            &::after {
              transform: rotate(180deg);
            }
          }

          > .level_3 {
            @include media-query(screen-menu) {
              overflow: visible;
              z-index: 1002;
              max-height: 9999px;
              opacity: 100%;
              transition-delay: 0s;
              visibility: visible;
            }
          }
        }
      }
    }
  }
}

.nav--mobile {
  li {
    &.submenu--active {
      > a,
      > strong {
        &::after {
          transform: rotate(180deg);
        }
      }

      > .level_2,
      > .level_3 {
        max-height: 999px;
      }
    }
  }
}

.nav-toggler__button {
  &:focus-visible {
    outline: var(--links-outline-focus);
  }
}

.nav--meta {
  a,
  strong.active,
  strong.trail {
    &:focus-visible {
      outline-color: var(--nav-meta-color);
    }
  }

  strong.active {
    opacity: 70%;
  }
}
```

### \_accordion.scss, \_card.scss, \_logo.scss, \_portfolio.scss, \_news.scss

Allgemeine Anpassungen, um den Fokus auf Elementen korrekt darzustellen, z.B. Block-Anweisungen für einige Linkflächen:

```
a {
    display: block;
  }
```
