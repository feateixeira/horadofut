<?php
class Usuario
{

	private $id;
	private $nomeUsuario;
	private $nomeTime;
	private $cidade;
	private $email;
	private $senha;
	private $telefone;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNomeUsuario()
	{
		return $this->nomeUsuario;
	}

	public function setNomeUsuario($nomeUsuario)
	{
		$this->nomeUsuario = $nomeUsuario;
	}

	public function getNomeTime()
	{
		return $this->nomeTime;
	}

	public function setNomeTime($nomeTime)
	{
		$this->nomeTime = $nomeTime;
	}

	public function getCidade()
	{
		return $this->cidade;
	}

	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getTelefone()
	{
		return $this->telefone;
	}

	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}
}
