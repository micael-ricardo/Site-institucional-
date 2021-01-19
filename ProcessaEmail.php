<?php 

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	$destino = "postmaster@csfranquias.com.br";
	$remetente = "contato@csfranquias.com.br";
	$assunto_usuario = $assunto;

	$mensagem_usuario  = "Nome: "." ".$nome."\n";
	$mensagem_usuario .= "e-mail: "." ".$email."\n";
	$mensagem_usuario .= utf8_decode($mensagem);

	$send_email = mail($destino, $assunto_usuario, $mensagem_usuario, $remetente);

	if($send_email){
		header('location:index.php');
		echo '<script> alert("E-mail enviado com sucesso!");</script>';
	}else{
		echo "<script>alert('Falhar ao enviar.!');</script>";	}
 ?>
