<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulários</title>
  </head>
  <body>
    <form name="cadastro" action="cadastro.php" method="POST">
      <p>Nome: <input type="text" name="nome" /></p>
      <p>Endereço: <input type="text" name="endereco" /></p>
      <p>Cidade: <input type="text" name="cidade" /></p>

      <p>
        <input type="submit" name="botao" value="Enviar" />
        <input type="reset" name="botao" value="Limpar" />
      </p>
    </form>
  </body>
</html>
