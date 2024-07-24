<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Categorias</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header>
      <div class="center">
        <h1>Cadastro de Categorias</h1>
        <a href="index.php" target="_self">Voltar</a>
      </div>
    </header>

    <section id="produtos">
      <form action="insere-categoria.php" method="post">
        <input type="text" name="descricao" placeholder="Descrição" style="margin-top:40px;">
        <br>
        <input type="submit" value="Cadastrar">
      </form>
    </section>
  
  </body>
</html>