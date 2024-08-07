# 📋CadEcommerce
Projeto criado com base em atividade de Programação Web II. Escola Social Marista Ir. Acácio - Ensino Médio Técnico.

## Sobre
Esse projeto é um sistema de cadastro de categoria, marca de produtos e carrinho, com banco de dados.
![inicial](https://github.com/user-attachments/assets/027345dd-5afb-434f-bfb3-d1682383ae87)


## 🛠️ Funcionalidades
- Vídeo do Projeto, mostrando as funcionalidades de cadastro, como de Categoria, Marca, Produto e Carrinho.
![projetogif](https://github.com/user-attachments/assets/b51b6f02-289c-4bd3-9385-03e891758feb)


## 🎲 Inserções no Banco de Dados
https://github.com/user-attachments/assets/7bc5c513-7f2c-4518-b771-8c19c1ae3ed1


## 👨‍💻 Funções PHP

- [include_once](https://www.w3schools.com/php/keyword_include_once.asp) - Incorporar código PHP de outro arquivo. Se o arquivo for Não encontrado, um aviso é mostrado e o programa continua a funcionar.
  Exemplo:
  
      <!DOCTYPE html>
      <html>
      <body>
      
      <h1>Welcome to my home page!</h1>
      <p>Some text.</p>
      <p>Some more text.</p>
      <?php include_once 'footer.php';?> //incorporando o código de outro arquivo
      
      </body>
      </html> 

- [require_once](https://www.php.net/manual/en/function.require-once.php) - Parecido com o "Include" Incorpora o código de outro arquivo, Se o arquivo for não encontrado, um erro fatal é lançado e o programa parará.
  Exemplo:

      <!DOCTYPE html>
      <html>
      <body>
      
      <h1>Welcome to my home page!</h1>
      <p>Some text.</p>
      <p>Some more text.</p>
      <?php require_once 'footer.php';?>
      
      </body>
      </html> 
  
- [session_start](https://www.php.net/manual/en/function.session-start.php) - Iniciar sessão nova ou retomar a sessão existente.  
  Exemplo:

      <?php
      // Start the session
      session_start();
      ?>
      <!DOCTYPE html>
      <html>
      <body>
      
      <?php
      // Set session variables
      $_SESSION["favcolor"] = "green";
      $_SESSION["favanimal"] = "cat";
      echo "Session variables are set.";
      ?>
      
      </body>
      </html> 

- [mysqli_connect](https://www.php.net/manual/pt_BR/function.mysqli-connect.php) - Começa uma conexão com o Servidor MYSQL.
  exemplo:
  
      <?php
      $mysqli = new mysqli("localhost","my_user","my_password","my_db");
      
      // Check connection
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      ?> 

- [mysqli_insert_id](https://www.w3schools.com/php/func_mysqli_insert_id.asp#gsc.tab=0) - Retonar um id gerado com AUTO_INCREMENT a partir da última consulta.
  exemplo:

      <?php
      $mysqli = new mysqli("localhost","my_user","my_password","my_db");
      
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      //Inserindo no BD
      $mysqli -> query("INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Glenn', 'Quagmire', 33)");
      
      // Print auto-generated id
      echo "New record has id: " . $mysqli -> insert_id;
      
      $mysqli -> close(); //Fechando Conexão com o BD
      ?> 

- [mysqli_query](https://www.php.net/manual/pt_BR/mysqli.query.php) - Consulta o Banco de Dados.
  exemplo:
  
      <?php
      $mysqli = new mysqli("localhost","my_user","my_password","my_db");
      
      // Check connection
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
      // Perform query
      if ($result = $mysqli -> query("SELECT * FROM Persons")) {
        echo "Returned rows are: " . $result -> num_rows;
        // Free result set
        $result -> free_result();
      }
      
      $mysqli -> close();
      ?>     

- [mysqli_fetch_assoc](https://www.php.net/manual/pt_BR/mysqli-result.fetch-assoc.php) - Retorna um array com os resultados do banco.
  exemplo:

      <?php
      
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
      
      $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";
      
      $result = mysqli_query($mysqli, $query);
      
      /* obtém o array associativo */
      while ($row = mysqli_fetch_assoc($result)) {
          printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
      }

- [mysqli_fetch_object](https://www.php.net/manual/pt_BR/mysqli-result.fetch-object.php) - Recebe a próxima linha de um resultado como um objeto.
  exemplo:

      <?php
      mysql_connect("hostname", "user", "password");
      mysql_select_db("mydb");
      $result = mysql_query("select * from mytable");
      while ($row = mysql_fetch_object($result)) {
          echo $row->user_id;
          echo $row->fullname;
      }
      mysql_free_result($result);
      ?>


- [mysqli_affected_rows](https://www.php.net/manual/en/mysqli.affected-rows.php") - Número de linhas por uma operação MySQL anterior.
  exemplo:
  
      <?php
      $mysqli = new mysqli("localhost","my_user","my_password","my_db");
      
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
      // Perform queries and print out affected rows
      $mysqli -> query("SELECT * FROM Persons");
      echo "Affected rows: " . $mysqli -> affected_rows;
      
      $mysqli -> query("DELETE FROM Persons WHERE Age>32");
      echo "Affected rows: " . $mysqli -> affected_rows;
      
      $mysqli -> close();
      ?> 

- [mysqli_error](https://www.php.net/manual/pt_BR/mysqli.error.php") - Retorna uma string descrevendo o erro ocorrido.
  exemplo:
  
      <?php
      $mysqli = new mysqli("localhost","my_user","my_password","my_db");
      
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
      // Perform a query, check for error
      if (!$mysqli -> query("INSERT INTO Persons (FirstName) VALUES ('Glenn')")) {
        echo("Error description: " . $mysqli -> error);
      }
      
      $mysqli -> close();
      ?> 
  
- [mysqli_close](https://www.php.net/manual/pt_BR/mysqli.close.php") - Fecha uma conexão ao banco de dados, pessoal da segurança agradeçe🙂.
  exemplo:
  
      <?php
      
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = mysqli_connect("localhost", "meu_usuario", "minha_senha", "mundo");
      
      $result = mysqli_query($mysqli, "SELECT Nome, CodigoPais FROM Cidade ORDER BY ID LIMIT 3");
      
      /* Fecha a conexão assim que não for mais necessária */
      mysqli_close($mysqli);
      
      foreach ($result as $row) {
          /* Processando os dados obtidos do banco */
      }


## 🖥Tecnologias Utilizadas
- :heavy_check_mark: [HTML5]
- :heavy_check_mark: [CSS3]
- :heavy_check_mark: [JS]
- :heavy_check_mark: [PHP]
- :heavy_check_mark: [GIT]
- :heavy_check_mark: [SQL]


## Referências
[W3Shools PHP](https://www.w3schools.com/php/)

[PHP Manual](https://www.php.net/manual/pt_BR/)
