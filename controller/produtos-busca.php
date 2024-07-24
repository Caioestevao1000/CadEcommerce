<?php
  require_once('model/Produtos.class.php');

  $produtos = new Produtos();//conceito de orientação a objeto
  $produtos->buscar();
?>