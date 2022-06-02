<?php
$logado = include_once("logado.php");
// 2. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
			
		
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
	$sql = "SELECT idUsuario, nome, login FROM usuario";
	
	/*
	echo "<p>SQL: " . $sql;
	*/
	
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
		
		/*
	echo "<p>";
	print_r($arResultado);
	*/
	
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
<p><p>
<!DOCTYPE html>
<html>
	<head>
		<title>Listar Usuário</title>
		<meta charset="UTF-8">
	</head>
	<body>
	<?php
		if(isset($_GET['m'])){//existe conteúdo na variavel
			echo "<b><font color='red'>" .$_GET['m'] . "</font></b><br/>"; //imprimindo a msg de erro
		}
		
	?>
		<!-- Menu -->
			| <a href="home.php">HOME</a>|
			| <a href="cadastrar.php">CADASTRAR USUÁRIO</a>|
			| <a href="index.php">SAIR</a>|
		<!-- Fim-Menu -->
	
		<h3>Listar Usuário</h3>
		
		<table border="1">			
			
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Login</th>
				<th colspan="4">Ações</th>
			</tr>
			
		<?php
			do{
		?>
					<tr>
						<td><?php echo $arResultado['idUsuario']; ?></td>
						<td><?php echo $arResultado['nome']; ?></td>
						<td><?php echo $arResultado['login']; ?></td>
						<td>
							<a href="#">Visualizar</a>
						</td>
						<td>
							<a href="editar.php?a=<?php echo $arResultado['idUsuario']; ?>">Editar</a>
						</td>
						<td>
							<a href="excluir.php?a=<?php echo $arResultado['idUsuario']; ?>">Excluir</a>
						</td>
						<td>
							<a href="novaSenha.php?a=<?php echo $arResultado['idUsuario']; ?>">Nova Senha</a>
						</td>
					</tr>
				
		<?php
			}while( $arResultado = mysqli_fetch_assoc($resultado) );
		?>
			
			
			
			
		</table>
		<p>
			<a href="index.php">+ Novo Usuário</a>
		</p>
	</body>
</html>









