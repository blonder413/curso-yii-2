<?php
//echo "<pre>";
//print_r($editorial);

echo $editorial->editorial;
echo "<hr>";

foreach ($editorial->libros as $key => $value) {
    echo $value->titulo . " - " . $value->editorial->editorial . "<br>";
    echo "<h1>$value->tituloPersonalizado</h1>";
    echo "<h1>$value->libroEditorial</h1>";
}