!<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Hola  Mundo</title>
  </head>
  <body>

  <h4>Ejercicio 1</h4>

  <?php
    $a=4;

  if ($a>=0) {

    echo "$a es positivo>";

    // code...
  }

  echo "<h4>Ejercicio 2 </h4>";

  $a=4;

  if ($a>1 and $a<10) {
    echo "$a es mayor a 1 y menor a 10 ";


    // code...
  }else {
    echo "$a el numero no existe";
    // code...
  }

    echo "<h4>Ejercicio 3 </h4>";
  if ($a>10) {
      echo "$a es mayor a 10";
    // code...
  } elseif ($a<2) {
      echo "$a es menor a 2";
    // code...
  } else {
      echo "$a no es menor a 2 y no es mayor a 10";
    // code...
  }

    echo "<h4>Ejercicio 4 </h4>";

$numero1=9;
$numero2=7;

if ($numero1 >$numero2) {
  echo ($numero1+$numero2);
  echo "<br>";
  echo ($numero1-$numero2);
  echo "<br>";

}elseif ($numero1 <$numero2) {
  echo "<br>";
  echo ($numero1*$numero2);
  echo "<br>";
  echo ($numero1/$numero2);
  echo "<br>";
  echo "El resto es 2";
  echo "<br>";
  // code...
}elseif  ($numeo1 == $numero2) {
   echo "Los numeros ingresados son iguales";
  // code...
}








  ?>
