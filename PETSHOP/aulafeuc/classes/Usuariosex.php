<?php

require_once 'Crudex.php';

class Usuarios extends Crud{
	
	protected $table = 'usuariosex';
	private $nome;
	private $endereco;
	private $tel;
	private $email;
	private $raca;
	private $tamanho;
	private $servico;
	private $local;
	private $obs;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEnde($endereco){
		$this->endereco = $endereco;
	}
		

	public function setTel($tel){
		$this->tel = $tel;
	}

public function setEmail($email){
		$this->email = $email;
	}
	public function setRaca($raca){
		$this->raca = $raca;
	}
	public function setTam($tamanho){
		$this->tamanho = $tamanho;
	}
	public function setServ($servico){
		$this->servico = $servico;
	}
	public function setLocal($local){
		$this->local = $local;
	}
	public function setObs($obs){
		$this->obs = $obs;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, endereco, tel, email, raca, tamanho, servico, local, obs) VALUES (:nome, :endereco, :email, :raca, :tamanho, :servico, :local, :obs)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':endereco', $this->endereco);
			$stmt->bindParam(':tel', $this->tel);
				$stmt->bindParam(':email', $this->email);
					$stmt->bindParam(':raca', $this->raca);
						$stmt->bindParam(':tamanho', $this->tamanho);
							$stmt->bindParam(':servico', $this->servico);
								$stmt->bindParam(':local', $this->local);
									$stmt->bindParam(':obs', $this->obs);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, endereco = :endereco, tel = :tel, email = :email, raca = :raca, tamanho = :tamanho, servico = :servico, local = :local, obs = :obs WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':tel', $this->raca);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':tamanho', $this->tamanho);
		$stmt->bindParam(':servico', $this->servico);
		$stmt->bindParam(':local', $this->local);
		$stmt->bindParam(':obs', $this->obs);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}