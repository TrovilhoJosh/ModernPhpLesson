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
 
      $number = $_GET["number"] ?? 0;

      echo "<p>Analisando o numero ". number_format($number, 3, ",", ".") . " informado pelo usuario:</p>";

      $int = (int) $number;
      $fra = $number - $int;

      echo "<ul><li> A parte inteira do numero eh ". number_format($int, 0, ",", ".") . "</li>";
      echo "<li> A parte inteira do numero eh ". number_format($fra, 3, ",", ".") . "</li></ul>";
  ?>
    

    <p>

      <a href="javascript:history.go(-1)">Voltar</a>

    </p>
    
  </main>
</body>
</html>