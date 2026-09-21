<?php

function obtenerSaludo($nombre = "mundo") {
    return "¡Hola, " . $nombre . "!";
}

echo obtenerSaludo();
echo obtenerSaludo("Carlos");

?>
