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
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php 
      //var_dump($_GET); //$_REQUEST = $_GET + $_POST + $_COOKIES)

      $nome = $_GET["nome"] ?? "Desconhecido";
      $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome";
      echo "Eh um prazer te conhecer,<strong> $nome $sobrenome! </strong>, este eh o meu site";
      $conta = 10 + 5;
      
    ?>

    <p>
      <a href="javascript:history.go(-1)">Voltar</a>
    </p>
    
  </main>
</body>
</html>