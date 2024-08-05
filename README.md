# 📋CadEcommerce
 Atividade Avaliativa de Programção Web II


Projeto criado com base em atividade de Programação Web II. Escola Social Marista Ir. Acácio - Ensino Médio Técnico.


## Sobre
Esse projeto é um sistema de cadastro de categoria, marca de produtos e carrinho, com banco de dados.
[Imagem tela inicial](doc/inicial.png)


## 🛠️Funcionalidades

### 1 - Cadastro de Marca, Categoria e Produtos
[Imagem CategoriaDB](doc/categoriaBD.png)
´´´include_once('controller/conexao.php')´´´
´´´ $descricao = $_POST['descricao'];

    echo "<h3>Descrição: $descricao </h3><br>";

    $cad_categoria="INSERT INTO  categoria(DESCRICAO) VALUES ('$descricao')";´´´

´´´if(mysqli_query($mysqli, $cad_categoria)) {
        echo "<h1>Nova categoria cadastro com sucesso</h1><br>";
    }else {
        echo "Erro:". $cad_categoria. "<br>" . mysqli_error($mysqli);
    }´´´

´´´ mysqli_close($mysqli);´´´

### 2 - Cadastro de Categoria

### 3 - Carrinho


## 🖥Tecnologias Utilizadas
- :heavy_check_mark: [HTML5]
- :heavy_check_mark: [CSS3]
- :heavy_check_mark: [JS]
- :heavy_check_mark: [PHP]
- :heavy_check_mark: [GIT]
- :heavy_check_mark: [SQL]


## Referências

