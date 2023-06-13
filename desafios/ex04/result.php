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
      $inicio = date("m-d-Y", strtotime("-7 days"));
      $fim = date("m-d-Y");
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

      $response = file_get_contents($url);

      $data = json_decode($response, true);

      $cotacao = $data['value'][0]['cotacaoCompra'];

      //Pega dados do index.php

      $number = $_GET["number"];

      // Formatar os números 
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      //calculo dolar

      $dolar = $number / $cotacao;

      echo numfmt_format_currency($padrao, $number, "BRL") . " em dolar eh equivalente a " . numfmt_format_currency($padrao, $dolar, "USD") . "<br> <br>";
      echo "Cotação variável. Informações fornecidas pelo site do Banco Central do Brasil! Cotação utilizada:". numfmt_format_currency($padrao, $cotacao, "USD");

  ?>
    

    <p>

      <a href="javascript:history.go(-1)">Voltar</a>

    </p>
    
  </main>
</body>
</html>