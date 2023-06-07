<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"> 
  <title>Gerador de numeros</title>
</head>
<body>
  <header>
    <h1>Gerador de numeros aleatorios </h1>
  </header>
  <main>
    <?php 

      $geraNumero = rand(0, 100);
      echo "Gerando um numero aleatorio entre 0 e 100 <br> <br>";
      echo "O valor gerado foi $geraNumero <br> <br>"
    ?>
    <form action="index.php" method="get">
      <input type="submit" value="Gerar outro"></input>
      </form>
  </main>
</body>
</html>