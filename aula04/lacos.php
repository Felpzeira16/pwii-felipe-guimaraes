<?php

echo "while <br>";
//while

$contador = 1;
while ($contador < 6){
    echo $contador, "<br>";
    $contador++;
}

echo "do while <br>";
//do while

$contadorii = 1;
do {
  echo $contadorii;
  $contadorii++;
} while ($contadorii < 6);

echo "<br> For <br>";
//for

for ($contadoriii = 0; $contadoriii <= 10; $contadoriii++) {
    echo "The number is: $contadoriii <br>";
}
?>