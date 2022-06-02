<?php
session_start();
if(!$_SESSION == true){
	$_SESSION['LOGADO'];
	echo "USUARIO LOGADO";
}
else{
	$msg = "Usuario não logado";
	header("Location: index.php?m=$msg");
}
?>