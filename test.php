<?php 

include 'ColorName.php';


$color = new ColorName();
$name = $color->getColorName('#FEE7F1');
var_dump($name);
?>