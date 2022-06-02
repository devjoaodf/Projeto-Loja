<?php
//print_r($_POST);


// 1. VERIFICAR SE O USUÁRIO ESTÁ LOGADO
	// N/A

// 2. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
	$usuario = $_POST['user'];
	$senha = md5($_POST['pass']);
	
	//echo "<br> $usuario - $senha";
		
// 3. VALIDAR OS DADOS ENVIADOS PELO FORMULÁRIO(VALIDAÇÕES)
	// 3.1. VERIFICAR SE OS CAMPOS OBRIGATORIOS ESTÃO PREENCIDOS
	if($usuario == "" OR $senha == ""){
		// algum campo está em branco
		$msg = "Campos obrigatórios vazio";
		header("Location: index.php?m=$msg");
		exit;
	}
	
	// 3.2. VERIFICAR SE AS SENHAS SÃO IGUAIS
		
// 4. TRATAR/PREPARAR OS DADOS PARA O BD
	//NSA

//5. CONECTAR NO BANCO DE DADOS
	$conexao = mysqli_connect("localhost", "root", "", "loja");
		
// 6. CRIAR SCRIPT SQL
	$sql = "SELECT login, senha  FROM usuario";
	$sql .= " WHERE login = '$usuario' ";
	//echo "<br> $sql";
	
	
// 7. EXECUTAR SCRIPT SQL
	$resultado = mysqli_query($conexao, $sql);
		
// 8. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS	
	$arResultado = mysqli_fetch_assoc($resultado);
	
	//print_r($arResultado);
	// 8.1 - DADOS CADASTRADOS NO BD
	$usuarioCadastrado = $arResultado['login'];
	$senhaCadastrado = $arResultado['senha'];
	
	//echo "<br> $usuarioCadastrado - $senhaCadastrado";
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)
	if($senha == $senhaCadastrado){
	// 9.0.1 inicia a sessão e acrescenta o parametro		
		session_start();
		$_SESSION['LOGADO'] = true;

		
		//9.1 - SUCESSO
		// criar o controle de $LOGADO
		
		$msg = "Seja bem vindo";
		header("Location: home.php?m=$msg");
		exit;
	}else{
		//9.2 - FALHA
		$msg = "Dados inválidos";
		header("Location: index.php?m=$msg");
		exit;
	}

// 10. APRESENTAR OS DADOS
	
// 11. FECHAR CONEXÃO COM O BD
	mysqli_close($conexao);
?>








