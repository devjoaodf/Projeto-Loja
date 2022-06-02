<?php
// 2. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
	
	$id = $_GET['a'];// Recuperar o ID do usuário selecionado

	//echo "<p>ID: " . $id;
			
		
// 3. VALIDAR OS DADOS ENVIADOS PELO FORMULÁRIO(VALIDAÇÕES)
	// 3.1. VERIFICAR SE OS CAMPOS OBRIGATORIOS ESTÃO PREENCIDOS
	
		
// 4. TRATAR/PREPARAR OS DADOS PARA O BD
	//NSA

//5. CONECTAR NO SERVIDOR DE BANCO DE DADOS
	include_once("conexao.php");
	
// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
	$sql = "SELECT idUsuario, nome, login FROM usuario";
	$sql .= " WHERE idUsuario = " . $id;
	
	
	//echo "<p>SQL: " . $sql;
	//exit;
	
// 7. EXECUTAR SCRIPT SQL
	$resultado = mysqli_query($conexao, $sql);
		
// 8. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS
		//NSA
	$arResultado = mysqli_fetch_assoc($resultado);
		
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)

// 10. APRESENTAR OS DADOS

	
// 11. FECHAR CONEXÃO COM O BD
	mysqli_close($conexao);
	
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>USUÁRIO</title>
	</head>
	<body>
		<h3>Nova Senha</h3>
		<form method="post" action="cNovaSenha.php">
			ID: <?php echo $arResultado['idUsuario']; ?>
			<input type="hidden" name="id" value="<?php echo $arResultado['idUsuario']; ?>"><br/>
			Nome:  <?php echo $arResultado['nome']; ?><br/>
			Usuário: <?php echo $arResultado['login']; ?><br/><br/>
			Senha: <input type="password" name="pass" placeholder="informe a senha do usuário"><br/>
			Confirme a senha: <input type="password" name="passConfirma" placeholder="Confirme e senha do usuário">
			<p>
				<input type="submit" value="ATUALIZAR NOVA SENHA">
			</p>
		</form>		
	</body>
</html>