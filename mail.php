<?
session_start();
	$assunto = $_POST['assunto'];
	$cod = $_POST['cv'];
	$mens = "Nome:".$_POST['nome']."\n".$_POST['mens'];
	$email = $_POST['email'];
	if($_SESSION['cv']==$cod){
	mail('contato@magrasspontapora.com.br',$assunto,$mens,"From: ".$email);
	echo "Sua Mensagem foi Enviada com sucesso!";
	session_destroy();
	}else{
	echo '<b>Erro!</b> Digite o codigo corretamente!<br><a onclick="window.location.reload();" href="#">Tente Novamente</a>';
	session_destroy();
}
?>
