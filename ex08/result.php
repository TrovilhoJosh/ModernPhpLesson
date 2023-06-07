<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"> 
  <title>Resultado</title>
</head>
<body>
  <header>
    <h1>Resultado do processamento </h1>
  </header>
  <main>
    <?php 

      $number = $_GET["number"];
      $formatNumber = number_format($number, 2);
      $dolar = $number / 5.22;
      $formatDolar = number_format($dolar, 2);
      $formatNumber = strtr($formatNumber, ['.' => ',', ',' => '.']);
      $formatDolar = strtr($formatDolar, ['.' => ',', ',' => '.']);

      echo "R$ $formatNumber em dolar eh equivalente a $ $formatDolar <br> <br>";
      echo "Cotacao fixa! No valor de R$5,22"
      
     
      
    ?>

    <p>
      <a href="javascript:history.go(-1)">Voltar</a>
    </p>
    
  </main>
</body>
</html>