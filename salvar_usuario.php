<?php
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $conexao = mysqli_connect("172.17.0.3", "livro", "Admsys!23", "livro") or die('erro');
  
  mysqli_select_db($conexao, "livro") or die('erro 2');
  
  if ($id) {
    $query = "update usuario set nome = '$nome', email = '$email' where id = $id";
  }
  else {
    $query = "insert into usuario (nome,email,data_cadastro) values ('$nome', '$email', now())";
  }
  
  $resultado = mysqli_query($conexao, $query);
  
  mysqli_close($conexao);
  
  header('Location: index.php');
?>
