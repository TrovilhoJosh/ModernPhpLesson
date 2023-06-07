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
      $n1 =  $number - 1;
      $n2 = $number + 1;

      echo "O numero escolhido foi $number <br>";
      echo "O numero <i>antecessor</i> eh: $n1 <br>";
      echo "O numero <i>sucessor</i> eh: $n2 ";
     
      
    ?>

    <p>
      <a href="javascript:history.go(-1)">Voltar</a>
    </p>
    
  </main>
</body>
</html>