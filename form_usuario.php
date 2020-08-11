<h1>Lista de Usuarios</h1>
<?php
  $id = $_GET['id'];

  $conexao = mysql_connect("localhost", "livro", "Admsys!23") or die('erro');
  
  mysql_select_db("livro", $conexao) or die('erro 2');
  
  $query = "select id,nome,email,data_cadastro from usuario where id = $id";
  $resultado = mysql_query($query, $conexao);
  
  $linha = mysql_fetch_array($resultado);
  $nome = $linha['nome'];
  $email = $linha['email'];
  
  mysql_close($conexao);
?>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
  <h1>Cadastro de Usuarios</h1>
  <form method="post" action="salvar_usuario.php">
    <input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
	<p>Nome:</p>
    <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" />
	<p>Email:</p>
	<input type="text" id="email" name="email" value="<?php echo $email ?>" />
	<br>
	<input type="submit" value="Salvar" />
  </form>
  </body>
</html>