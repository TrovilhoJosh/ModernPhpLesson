<?php 

  $nome = "Rafael";
  $sobronome = "Vieira";
  $idade = 19;
  $mes = 12;
  $conta = date("Y") * 12 - ($idade * 12);
  if (date("m") < $mes) {
    $conta = $conta + (date("m") - $mes);
  };
  $ano = floor($conta / 12);

  echo "Ola $nome $sobronome, voce nasceu no ano de $ano";


?>