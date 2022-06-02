<?php

print_r($_POST);


// 2. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
	$nome = $_POST['nome'];
	$login = $_POST['user'];
	$senha = $_POST['pass'];
	$senhaConf = $_POST['passConfirma'];

		
		
// 3. VALIDAR OS DADOS ENVIADOS PELO FORMULÁRIO(VALIDAÇÕES)
	// 3.1. VERIFICAR SE OS CAMPOS OBRIGATORIOS ESTÃO PREENCIDOS
	if($nome == "" OR  $login == "" OR $senha == "" OR $senhaConf == ""){
		echo "<br>Campos obrigatorio não preenchido";
	}else{
		echo "<br>Campos preenchido";
	}
	
	
	
	// 3.2. VERIFICAR SE AS SENHAS SÃO IGUAIS
	if($senha == $senhaConf){
		echo "<p>Senhas Iguais";
	}else{
		echo "<p>Senhas DIFERENTES";
	}
	
		
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
	
	if($conexao){
		echo "<p>Conexão realizad com sucesso";
	}else{
		echo "<p>Falha na conexão com o BD";
	}
	
// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
	$sql = "UPDATE usuario SET nome = '$nome', ";
	$sql .= " login = '$login', senha= '$senha' ";
	$sql .= " WHERE idUsuario = " . $_POST['id'];
	
	echo "<p>SQL: " . $sql;
	
// 7. EXECUTAR SCRIPT SQL
	/* mysqli_query(
			LINK DE CONEXAO AO SERVIDOR DE BD, 
			COMANDO DO BD);
	*/
	$resultado = mysqli_query($conexao, $sql);
		
// 8. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS
		//NSA
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)
	if($resultado){
		//echo "<p> Usuário '$nome' cadastrado com sucesso.";
		header("Location: index.php");
	}else{
		echo "<p> Falha ao cadastrar usuário. Verifique!";
	}

// 10. APRESENTAR OS DADOS
	
// 11. FECHAR CONEXÃO COM O BD
	
?>








