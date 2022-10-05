<?php 

include 'alunadao.php';

$matricula 		= $_GET['matricula'];
$nome 			= $_GET['nome'];
$nascimento 	= $_GET['nascimento'];
$mensalidade 	= $_GET['mensalidade'];
$botao 			= $_GET['botao'];

$alunaDao = new alunaDao();

$alunaDao->setMatricula($matricula);
$alunaDao->setNome($nome);
$alunaDao->setNascimento($nascimento);
$alunaDao->setMensalidade($mensalidade); 

if($botao=="cadastrar"){
	$alunaDao->cadastrar();

}else if($botao=="atualizar"){
	$alunaDao->atualizar();

}else if($botao=="deletar"){
	$alunaDao->deletar();

}else if($botao=="buscar"){

	$alunaDao->buscar();

	foreach($alunaDao->buscar() as $resultado){
		echo $resultado['matricula']."<br>";
		echo $resultado['nome']."<br>";
		echo $resultado['nascimento']."<br>";
		echo $resultado['mensalidade']."<hr>";
	}

}
?>