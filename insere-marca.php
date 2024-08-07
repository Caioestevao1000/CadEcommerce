<?php

//Insere Marca no Banco de Dados

    //conexão com o BD
    include_once('controller/conexao.php');

    
    $descricao = $_POST['descricao'];

    //Descriação da Marca
    echo "<h3>Descrição: $descricao </h3><br>";

    // Inserção no BD, com SQL de uma nova marca.
    $cad_marca="INSERT INTO  marca(DESCRICAO) VALUES('$descricao')";

    //Executa o comando SQL, se bem sucedido confirma, caso contrario ele exibe a mensagem de erro, com "mysqli_error($mysqli)."
    if(mysqli_query($mysqli, $cad_marca)) {
        echo "<h1>Nova categoria cadastro com sucesso</h1><br>";
    }else {
        echo "Erro:". $cad_marca . "<br>" . mysqli_error($mysqli);
    }

    //Encerra Conexão com o BD
    mysqli_close($mysqli);

?>