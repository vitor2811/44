<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Bem vinda!</title>
</head>
<body>
   <h1> Sistema de Cadastro</h1>

	<form action="controle.php" method="get">
		<label>Matricula</label>
		<input type="text" name="matricula" placeholder="matricula"><br>

		<label>Nome</label>
		<input type="text" name="nome" placeholder="nome"><br>

		<label>Nascimento</label>
		<input type="date" name="nascimento" placeholder="nascimento"><br>

		<label>Mensalidade</label>
		<input type="text" name="mensalidade" placeholder="mensalidade"><br><br>

		<input type="submit" name="botao" value="cadastrar">
		<input type="submit" name="botao" value="buscar">
		<!-- <input type="submit" name="botao" value="atualizar"> -->
		<input type="submit" name="botao" value="deletar">
	</form>

</body>
</html>
