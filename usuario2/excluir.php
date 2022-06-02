<?php
// 2. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
	
	$id = $_GET['a'];// Recuperar o ID do usuário selecionado

	//echo "<p>ID: " . $id;
			
		
// 3. VALIDAR OS DADOS ENVIADOS PELO FORMULÁRIO(VALIDAÇÕES)
	// 3.1. VERIFICAR SE OS CAMPOS OBRIGATORIOS ESTÃO PREENCIDOS
	
		
// 4. TRATAR/PREPARAR OS DADOS PARA O BD
	//NSA

//5. CONECTAR NO SERVIDOR DE BANCO DE DADOS
	/*
	mysqli_connect(
		SERVIDOR, 
		USUARIO DO BD, 
		SENHA DO USUARIO, 
		NOME DO BD);
	*/
	$conexao = mysqli_connect("localhost", "root", "", "loja");
	
	/*
	if($conexao){
		echo "<p>Conexão realizad com sucesso";
	}else{
		echo "<p>Falha na conexão com o BD";
	}
	*/
	
// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
	$sql = "SELECT * FROM usuario";
	$sql .= " WHERE idUsuario = " . $id;
	
	
	//echo "<p>SQL: " . $sql;
	//exit;
	
// 7. EXECUTAR SCRIPT SQL
	/* mysqli_query(
			LINK DE CONEXAO AO SERVIDOR DE BD, 
			COMANDO DO BD);
	*/
	$resultado = mysqli_query($conexao, $sql);
	/*
	echo "<p>";
	print_r($resultado);
	*/
		
// 8. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS
		//NSA
	$arResultado = mysqli_fetch_assoc($resultado);
		
		
	//echo "<p>";
	/*
	print_r($arResultado);
	echo "<p>";
	echo "Nome: ". $arResultado['nome'];
	*/
	//exit;
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)
	/*
	if($resultado){
		echo "<p> Usuários selecionados com sucesso.";
	}else{
		echo "<p> Falha ao selecionar usuário. Verifique!";
	}
	*/

// 10. APRESENTAR OS DADOS


	
	
	
// 11. FECHAR CONEXÃO COM O BD
	
	
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>USUÁRIO</title>
	</head>
	<body>
		<h3>Excluir Usuário</h3>
		<p>Desejar realmente excluir este usuário? </p>
		
		<form method="post" action="cExcluir.php">
			<input type="hidden" name="codigo" value="<?php echo $arResultado['idUsuario']; ?>">
			ID: <?php echo $arResultado['idUsuario']; ?>
			<br/>
			Nome: <?php echo $arResultado['nome']; ?>
			<br/>			
			Usuário: <?php echo $arResultado['login']; ?>
			<br/>			
			<p>
			<input type="submit" value="EXCLUIR">
			</p>			
		</form>		
	</body>
</html>