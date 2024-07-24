<?php
    include_once('controller/conexao.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Produtos</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header>
      <div class="center">
        <h1>Cadastro de Produtos</h1>
        <a href="index.php" target="_self">Voltar</a>
      </div>
    </header>

    <section id="produtos">
      <form action="insere-produto.php" method="post">
        <input type="text" name="nome" placeholder="  Nome"><br>
        <input type="text" name="descricao" placeholder="  Descrição"><br>
        <input type="number" name="estoque" min="0.00" max="100000.00" step="0.01" placeholder="  Estoque"><br>
        <input type="number" name="preco" min="0.00" max="100000.00" step="0.01" placeholder="  Preço"><br>
        Categoria: <select name="seleciona_categoria" id="" aria-placeholder="  Categoria">
          <option value=""> Selecione</option>
          
          <?php
            $resultado_categoria = "SELECT * FROM categoria";
            $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
            while($row_categorias = mysqli_fetch_assoc($resultcategoria)){
          ?>
            
            <option value="<?php echo $row_categorias['IDCATEGORIA'];?>">
            <?php 
              echo $row_categorias['DESCRICAO'];
            ?>
          </option>

          <?php
            }
          ?>
        </select>
            <br>
            <br>
        Marca: <select name="seleciona_marca" id="">
          <option value=""> Selecione</option>
          
          <?php
            $resultado_marca = "SELECT * FROM MARCA";
            $resultmarca = mysqli_query($mysqli, $resultado_marca);
            while($row_cmarca = mysqli_fetch_assoc($resultmarca)){
          ?>
            
            <option value="<?php echo $row_cmarca['IDMARCA'];?>">
            <?php 
              echo $row_cmarca['DESCRICAO'];
            ?>
          </option>

          <?php
            }
          ?>
        </select>
            <br>
            <br>
            <input type="submit" value="Cadastrar">
      </form>
    </section>
    
  </body>
</html>