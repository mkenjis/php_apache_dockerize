<?php
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $conexao = mysql_connect("localhost", "livro", "Admsys!23") or die('erro');
  
  mysql_select_db("livro", $conexao) or die('erro 2');
  
  if ($id) {
    $query = "update usuario set nome = '$nome', email = '$email' where id = $id";
  }
  else {
    $query = "insert into usuario (nome,email,data_cadastro) values ('$nome', '$email', now())";
  }
  
  $resultado = mysql_query($query, $conexao);
  
  mysql_close($conexao);
  
  header('Location: index.php');
?>