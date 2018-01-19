<?php

  //Camel Case


  /* Repetir o nome
  for ($i = 0; $i < 100; $i++) {
    echo $i + 1 ." Isaque \n <br>";
  }
  */

  /*Contar até 100

  for ($i = 0; $i < 100; $i++) {
    echo $i+1 . "\n <br>";
  }

  */

  /*Do 1 ao 100 diferenciando que curiosamente usa bool para o resultado verdadeiro (porque o resultado é 0, logo ele vira falso) e falso

  for ($i = 1; $i < 101; $i++) {
    if ($i % 2) {
      echo "$i * \n <br>";
    } else {
      echo "$i ** \n <br> ";
    }
  }

  */

  /*1, 2, 3, PIN!  Este jeito funcionou, mas não é legal
  $count = 1;
  for ($i = 1; $i <= 100; $i++) {
    if ($count !== 4) {
      echo "$i \n <br>";
    } else {
      echo "PIN \n <br>";
      $count = 0;
    }
    $count++;
  }

  */

  //Tentando de novo o do PIN

  for ($i = 1; $i <= 100; $i++) {
    if ($i % 4) {
      echo "$i \n <br>";
    } else {
      echo "PIN \n <br>";
    }
  }

?>
