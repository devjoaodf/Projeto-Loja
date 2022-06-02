<html>
<head>
	<title>QUITANDA - LOGIN </title>
</head>
<body valign="middle">
	<form method="post" action="cLogin.php">
		<table align="center">
			<tr>
				<th colspan="2" align="center">LOGIN</th>
			</tr>
			
			<tr>
				<th colspan="2" align="center" bgcolor="yellow">
					<?php
						if(isset($_GET['m'])){//existe conteúdo na variavel
							echo $_GET['m']; //imprimindo a msg de erro
						}
						
					?>
				</th>
			</tr>
			
			<tr>
				<td>Usuário:</td>
				<td>
					<input type="text" name="user">
				</td>
			</tr>
			
			<tr>
				<td>Senha:</td>
				<td>
					<input type="password" name="pass">
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="enviar" value="ACESSAR"> <br/>
					<input type="reset" name="enviar" value="LIMPAR">
				</td>
			</tr>
		</table>
		<a href="esqueciaSenha.php">Esqueci a senha</a>
	</form>
</body>
</html>