<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Intercao com formularios</title>
</head>
<body>
  <header>
    <h1>Apresente-se para nos</h1>
  </header>
  <section>
    <form action="cad.php" method="get">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="idNome">
      <label for="sobrenome">Sobrenome:</label>
      <input type="text" name="sobrenome" id="idSobrenome">
      <input type="submit" value="Enviar"></input>
    </form>
  </section>
</body>
</html>