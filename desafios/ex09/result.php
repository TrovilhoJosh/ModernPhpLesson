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
      //Pega dados da Api

      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=%2706-07-2023%27&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
      $response = file_get_contents($url);

      $data = json_decode($response, true);

      $dado = $data['value'][0]['cotacaoCompra'];

      //Pega dados do index.php

      $number = $_GET["number"];

      // Formatar o número com duas casas decimais
      $formatNumber = sprintf("%.2f", $number);
      $formatDolar = $formatNumber / $dado;
      $formatDolar = sprintf("%.2f", $formatDolar);


      $dado = strtr($dado, ['.' => ',', ',' => '.']);
      $formatNumber = str_replace('.', ',', $formatNumber);
      $formatDolar = strtr($formatDolar, ['.' => ',', ',' => '.']);

      echo "R$ $formatNumber em dólar equivale a US$ $formatDolar <br><br>";
      echo "Cotação variável. Informações fornecidas pelo site do Banco Central do Brasil! Cotação utilizada: R$ $dado";

  ?>
    

    <p>

      <a href="javascript:history.go(-1)">Voltar</a>

    </p>
    
  </main>
</body>
</html>