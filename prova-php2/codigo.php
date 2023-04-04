<!DOCTYPE html>
<html>
<head>
	<title>Tabela</title>
</head>
<body>
	<h1>Tabela cadastro</h1>
	<table>
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Endereço</th>
			<th>Turma</th>
			<th>Idade</th>
		</tr>
		<tr>
			<td><?php echo $_POST['nome']; ?></td>
			<td><?php echo $_POST['email']; ?></td>
			<td><?php echo $_POST['endereco']; ?></td>
			<td><?php echo $_POST['turma']; ?></td>
			<td><?php echo $_POST['idade']; ?></td>
		</tr>
	</table>
</body>
</html>
