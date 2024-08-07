<?php

//Insere Categoria no Banco de Dados

    
    include_once('controller/conexao.php');//conexão com o BD

    $descricao = $_POST['descricao'];//pega o valor do formulário pelo metodo POST

    echo "<h3>Descrição: $descricao </h3><br>";//Descriação da categoria

    $cad_categoria="INSERT INTO  categoria(DESCRICAO) VALUES ('$descricao')";// Inserção no BD, com SQL de uma nova categoria

    //Executa o comando SQL, se bem sucedido confirma, caso contrario ele exibe a mensagem de erro, com "mysqli_error($mysqli)."
    if(mysqli_query($mysqli, $cad_categoria)) {
        echo "<h1>Nova categoria cadastro com sucesso</h1><br>";
    }else {
        echo "Erro:". $cad_categoria. "<br>" . mysqli_error($mysqli);
    }

    //Encerra Conexão com o BD
    mysqli_close($mysqli);

?>