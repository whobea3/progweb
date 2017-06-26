<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private $nome;
	private $endereco;
	private $tel;
	private $especie;
	private $nomeanimal;
	private $tamanho;
	private $raca;
	private $servico;
	private $valor;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function setTel($tel){
		$this->tel = $tel;
	}
	
	public function setEspecie($especie){
		$this->especie = $especie;
	}
	
	public function setNomeanimal($nomeanimal){
		$this->nomeanimal = $nomeanimal;
	}
	
	public function setTamanho($tamanho){
		$this->tamanho = $tamanho;
	}
	
	public function setRaca($raca){
		$this->raca = $raca;
	}
	
	public function setServico($servico){
		$this->servico = $servico;
	}
	
	public function setValor($valor){
		$this->valor = $valor;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, endereco, tel, especie, nomeanimal, tamanho, raca, servico, valor) VALUES (:nome, :endereco, :tel, :especie, :nomeanimal, :tamanho, :raca, :servico, :valor)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':tel', $this->tel);
		$stmt->bindParam(':especie', $this->especie);
		$stmt->bindParam(':nomeanimal', $this->nomeanimal);
		$stmt->bindParam(':tamanho', $this->tamanho);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':servico', $this->servico);
		$stmt->bindParam(':valor', $this->valor);
		
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, endereco = :endereco, tel  = :tel, especie = :especie, nomeanimal = :nomeanimal, tamanho = :tamanho, raca = :raca, servico = :servico, valor = :valor WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':tel', $this->tel);
		$stmt->bindParam(':especie', $this->especie);
		$stmt->bindParam(':nomeanimal', $this->nomeanimal);
		$stmt->bindParam(':tamanho', $this->tamanho);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':servico', $this->servico);
		$stmt->bindParam(':valor', $this->valor);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}