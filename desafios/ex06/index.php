<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Anatomia de uma divisão</title>
</head>
<body>
  <?php 
    //Capturando os dados do formulario
    $d1 = $_GET['dividendo']?? 0;
    $d2 = $_GET['divisor']?? 0;
  ?>
  <header>
    <h1>Anatomia de uma divisão</h1>
  </header>
  <section>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
      <label for="dividendo">Dividendo</label>
      <input type="number" name="dividendo" id="idDividendo" step="0.1" value="<?=$d1?>">
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" id="idDivisor" step="0.1" value="<?=$d2?>">
      <input type="submit" value="Converter"></input>
    </form>
  </section>
  <section id='resultado'>
    
      <h2>Resultado Divisao</h2>
                      
      <?php 
      
      echo "Dividendo = $d1";
      echo "Divisor = $d2";

      $r = 

      echo "Resto = $r";
      echo "quociente = $q";
          
        
      ?>

</section>
</body>
</html>