# color-name
Trouve la couleur associée à un code hexadécimal.

## Utilisation

### Mode simple
```php
$color = new ColorName();
$name = $color->getColorName('#FEE7F1');
```
#### Sortie 
```bash
array(4) {
  ["hex"]=>
  string(7) "#FEE7F0"
  ["color"]=>
  string(4) "Rose"
  ["colorName"]=>
  string(16) "Cuisse de nymphe"
  ["exact"]=>
  bool(false)
}
```
---
### Mode avancé
Vous pouvez lors de l'initialisation de la classe, définir votre propre tableau de noms.
```php
$names = [
  ['FFFFFF', 'Blanc', 'Clair'],
  ['000000', 'Noir', 'Foncé']
];
$color = new ColorName($names);
$name = $color->getColorName('#FEE7F1');
```

#### Sortie 
```bash
array(4) {
  ["hex"]=>
  string(7) "#FFFFFF"
  ["color"]=>
  string(5) "Blanc"
  ["colorName"]=>
  string(11) "Clair"
  ["exact"]=>
  bool(false)
}
```
