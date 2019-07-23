<?php 

include 'ColorName.php';


$color = new ColorName();
$name = $color->getColorName('#FEE7F1');
var_dump($name);

$names = [
    ['FFFFFF', 'Blanc', 'Blanc clair'],
    ['000000', 'Noir', 'Noir foncé']
  ];
$color = new ColorName($names);
$name = $color->getColorName('#FEE7F1');
var_dump($name);
?>