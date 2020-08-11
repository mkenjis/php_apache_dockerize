<h1>Lista de Usuarios</h1>
<table border="1">
<tr>
	<td width="50px"><b>ID</b></td>
	<td width="200px"><b>Nome</b></td>
	<td width="200px"><b>Email</b></td>
	<td width="100px"><b>Data Cadastro</b></td>
	<td width="100px"><b>Acao</b></td>
</tr>

<?php
  $conexao = mysql_connect("localhost", "livro", "Admsys!23") or die('erro');
  
  mysql_select_db("livro", $conexao) or die('erro 2');
  
  $query = "select id,nome,email,data_cadastro from usuario order by id";
  $resultado = mysql_query($query, $conexao);
  while ($linha = mysql_fetch_array($resultado)) {
  
?>

	<tr>
		<td><?php echo $linha['id']; ?></td>
		<td><?php echo $linha['nome']; ?></td>
		<td><?php echo $linha['email']; ?></td>
		<td><?php echo $linha['data_cadastro']; ?></td>
		<td><a href="form_usuario.php?id=<?php echo $linha['id']; ?>">Editar</a> | 
		    <a href="deletar_usuario.php?id=<?php echo $linha['id']; ?>">Deletar</a></td>
	</tr>
<?php
}

mysql_close($conexao);
?>
</table>
<p>
<a href="form_usuario.php">Novo</a>
</p>
</body>
</html>
