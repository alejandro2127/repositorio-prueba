<?php


function saludo($nombre, $apellido="no pasaron parametro"){
  return "Hola $nombre $apellido";
}


echo saludo("Ale","Ramirez");

echo "<br>";

$horaActual = date("H:i");
$horaDespertar = "7:00";


function despertador($hora1, $hora2){
  if ($hora1 == $hora2) {
    return "Bip Bip";
    }else {
    return "seguir durmiendo.";
  }
}

echo despertador($horaActual, $horaDespertar);

function sumar($num1, $num2){
  global $resultado;
  $resultado = $resultado + $num1 + $num2;
  return $resultado;
}

echo "<br>";
echo "<br>";
echo sumar(1,4);
echo "<br>";
echo sumar(1,5);
echo "<br>";
echo sumar(1,3);
echo "<br>";





 ?>
