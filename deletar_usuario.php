<?php
  $id = $_POST['id'];

  $conexao = mysql_connect("localhost", "livro", "Admsys!23") or die('erro');
  
  mysql_select_db("livro", $conexao) or die('erro 2');
  
  $query = "delete usuario where id = $id";
  
  $resultado = mysql_query($query, $conexao);
  
  mysql_close($conexao);
  
  header('Location: index.php');
?>