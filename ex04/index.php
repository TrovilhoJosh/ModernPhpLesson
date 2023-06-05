<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos de PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php 
    // 0x = hexadecimal, 0b = binario, 0 = octal
    //$num = 0x1A;
    //echo "O valor da variavel e $num"

    //$v = 300;
    //var_dump($v);

    //$num = 3e2; //3 * 10(2)
    //echo "O valor eh: $num";

    //$num = (float) "950";
    //var_dump($num);

    //$vet = [6, 2, 9, 3, 5];
    //var_dump($vet);

    class Pessoa {
      private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
  ?>
  
</body>
</html>