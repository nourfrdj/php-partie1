<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>partie1 ex5 Php</title>
</head>

<body>
  <?php
                            // $var_int;
  settype($var_int, "int"); //fonction php avec des parametres on peut ne pas l'initialiser valeur null
                            //$toto= (int) 58 initialiser une variable toto et forcer le typpage et obliger de lui donner une valeur au pire NULL
  $var_int = null;
  var_dump($var_int);
  $var_int = 5;
  echo $var_int;
  ?>
</body>

</html>