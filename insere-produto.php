<?php

//Insere Produto no Banco de Dados

    include_once('controller/conexao.php');

    // Recupera os dados enviados pelo formulário via POST
    $categoria = $_POST['seleciona_categoria'];
    $marca = $_POST['seleciona_marca'];
    $nome_produto = $_POST['nome'];
    $descricao= $_POST['descricao'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

    // Comando SQL para inserir um novo produto na tabela 'produtos'
    $grava_produto="INSERT INTO `produtos`(IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$categoria','$marca','$nome_produto','$descricao','$estoque','$preco')";

    // Execução do SQL, verifica se o comando afetou alguma linha, caso não tenha redireciona para página produtos, caso seja afetado ele redireciona e mostra a mensagem de erro.
    $result_gravacao = mysqli_query($mysqli, $grava_produto);
    if(mysqli_affected_rows($mysqli) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = 'O; URL=produtos.php'
            <script type=\"text/javascrpit\">

                alert ('Produto cadastrado com Sucesso');

            </script>
        ";
    }else{
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = 'O; URL=produtos.php'
            <script type=\"text/javascrpit\">
            
                alert ('Produto não cadastrado, tente novamente');

            </script>
        ";
    }
?>