<?php 

include 'conexao.php';

class AlunaDao
{

	private $Matricula, $Nome, $Nascimento, $Mensalidade ;

	//============================================
	public function getMatricula(){
		return $this->Matricula;
	}

	public function setMatricula($matricula){
		$this->Matricula= $matricula;
	}

	//============================================
	public function getNome(){
		return $this->Nome;
	}

	public function setNome($nome){
		$this->Nome = $nome;
	}

	//============================================
	public function getNascimento(){
		return $this->Nascimento;
	}

	public function setNascimento($nascimento){
		$this->Nascimento= $nascimento;
	}

	//============================================
	public function getMensalidade(){
		return $this->Mensalidade;
	}

	public function setMensalidade($mensalidade){
		$this->Mensalidade= $mensalidade;
	}


	//============================================
	public function cadastrar(){
		
		$bd = new Conexao();
		$con = $bd->getConexao();

		$sql = "insert into aluna(matricula, nome, nascimento, mensalidade) values(?, ?, ?, ?)";
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $this->Matricula);
		$stm->bindValue(2, $this->Nome);
		$stm->bindValue(3, $this->Nascimento);
		$stm->bindValue(4, $this->Mensalidade);

		$result = $stm->execute();

		if($result){
			echo "cadastrou";
		}else{
			echo "não cadastrou";
		}
	}

	//============================================
	public function atualizar(){
	
		$bd = new Conexao();
		$con = $bd->getConexao();

		$sql = "update aluna set nome=?, nascimento=?, mensalidade=? where matricula=?";
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $this->Nome);
		$stm->bindValue(2, $this->Nascimento);
		$stm->bindValue(3, $this->Mensalidade);
		$stm->bindValue(4, $this->Matricula);

		$result = $stm->execute();

		if($result){
			echo "atualizado";
		}else{
			echo "não atualizado";
		}
	}

	//============================================
	public function deletar(){
		
		$bd = new Conexao();
		$con = $bd->getConexao();

		$sql = "delete from aluna where matricula=?";
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $this->Matricula);

        $result = $stm->execute();

		if($result){
			echo "deletado";
		}else{
			echo "não deletado";
		}
	}

	//============================================
	public function buscar(){
		$bd = new Conexao();
		$con = $bd->getConexao();
		
		$sql = "select * from aluna";
		$stm = $con->prepare($sql);

		$stm->execute();

		if($stm->rowCount()>0){
		   $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
		   return $result;
		}
	}

}
?>